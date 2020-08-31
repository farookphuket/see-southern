
<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Thank You</span>
<?php
    if($is_login):
        ?>
<span class="badge badge-success" id="v_user_label">
<?php echo $user_name; ?>
</span>
<?php
    endif;
?>
              <span class="section-heading-lower">for visiting us today</span>
            </h2>

                 <ul class="list-group" id="show_visitor">
                     <li class="list-group-item">
<?php
    $show = "IP {$ip} OS {$os} Browser {$browser}";
    echo $show;
?>
                    </li>
                 </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<script charset="utf-8">
    $(function(){
        //-- visitor version 2.0
        //-- date 12-May-2020
        const $VT = (function(){

            let $tb_visitor = getEl("#show_visitor");

            let my_ip = "<?php echo $ip; ?>";
            let my_browser = "<?php echo $browser; ?>";
            let my_os = "<?php echo $os; ?>";

            let cur_day = new Date().getDate();
            let cur_month = new Date().getMonth()+1;
            let cur_year = new Date().getFullYear();
            
            function visitorCount(){
                let tmp = ``;
                $tb_visitor.html(tmp);
                let url = "<?php echo site_url("visitor/visitorGetCount/"); ?>";
                
                $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        //console.log(rs);
                        tmp = `
                            <li class="list-group-item active">
    IP ${my_ip} OS ${my_os} Browser ${my_browser}
</li>
                            <li class="list-group-item">
                            today ${rs.today}
                           </li> 
                            <li class="list-group-item">
                            yesterday ${rs.yesterday}
                           </li>
                            <li class="list-group-item">
                            this month  ${rs.thisMonth}
                           </li>
                            <li class="list-group-item">
                            last month  ${rs.lastMonth}
                           </li>
                        <li class="list-group-item">
                            last year  ${rs.lastYear}
                           </li>
                        <li class="list-group-item">
                            this year  ${rs.thisYear}
                           </li>
                        <li class="list-group-item">
                            All time  ${rs.get.length}
                           </li>

                        `;
                    $tb_visitor.html(tmp);

                }
                });
                 


            }

            function runMyTime(){
                let num = 0;
                let countMe = setInterval(()=>{
                num++;
                //console.log(`call function visitorCount  is ${num} going on...`);
                visitorCount();

                    if(num > 1){
                        //console.log(`time will be clear now after run ${num} times`);
                        clearTimeout(countMe);
                    } 
                },2000);

            }
            function getSummary(){
                runMyTime();
            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){
                getSummary();

            }
            return{getEvent: getEvent}
        })();
        $VT.getEvent();
    }); 
</script>

