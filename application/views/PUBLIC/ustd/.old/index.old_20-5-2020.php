<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-faded rounded p-5">
                        <h1 class="text-center section-heading">What's goin' on?</h1>
     
                </div>
                <p class="pt-4">&nbsp;</p>
                <div class="st_pagin">
                    
                </div>
                <div class="st_list">
                    
                </div>
                <div class="st_pagin">
                    
                </div>
            </div>

                
                
        </div>
    </div>
    
</section>
<script charset="utf-8">
$(function(){
    const $USTD = (function(){

        let $page_status = getEl(".status");

        //-- use cookies
        let ck_h_page = Cookies.get("ck_h_page");
        if(ck_h_page === undefined){
            ck_h_page = 1;
        }

        let $st_list = getEl(".st_list");
        let $st_pagin = getEl(".st_pagin");
    


        function ustdGet(ck_h_page=1){
            $st_list.html("");
            let url = "<?php echo site_url("home/ustdGet/"); ?>"+ck_h_page;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                //console.log(rs);
                $.each(rs.get_st,(i,v)=>{
                let tmp = `<div class="bg-faded">
                    ${v.st_body}
    <div class="table-responsive pt-0 mb-5">
        <table class="table table-striped">
            <tr>
                <th>Post Title</th>
                <td>${v.st_title}</td>
            </tr>
            <tr>
                <th>Post By</th>
                <td>${v.name}</td>
            </tr>
            <tr>
                <th>Post On</th>
                <td>
                Create ${v.st_date_create} | Update ${v.st_date_update}
                </td>
            </tr>
        </table>
    </div>
</div>`;

                   $st_list.append(tmp); 
                });
                if(rs.pagination){
                    $st_pagin.html(rs.pagination);
                }
            }
            });
        }
        function getSummary(){
            ustdGet(ck_h_page);
        }
        function getEl(el){
            return $(el);
        }
        function getEvent(){
            getSummary();

            $st_pagin.delegate(".pagination a","click",function(e){
                e.preventDefault();
                let page = $(this).attr("data-ci-pagination-page");
                if(page === undefined){
                    page = 1;
                }
                Cookies.set("ck_h_page",page);
                ustdGet(page);
            });
        }
        return{getEvent:getEvent}
    })();
    $USTD.getEvent();
});
</script>
