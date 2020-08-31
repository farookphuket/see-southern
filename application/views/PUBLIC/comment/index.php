<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 bg-faded rounded">
                <h1 class="text-center pt-4 mb4">Comment</h1>
                <ul class="list-group mb-3">
                    <li class="list-group-item">
                        - All this comment has wrote by the person  it is depending upon one's perspective there is nothing to do with this much we are all different thought
                    </li>
                    <li class="list-group-item">
                        - we will delete if some of this comment has prove that it is contain rude
                    </li><li class="list-group-item">
                    - you have to <a href="<?php echo site_url("login"); ?>" alt="login to post">login</a> to post the comment
                    </li>
                </ul>
            </div>
                <p class="pt-4">&nbsp;</p>
            <div class="col-lg-12">
                <div class="cmt_pagin mb-4">
                    
                </div>
                <div class="cmt_list pt-4 mb-4">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){


        const $CM = (function(){

            let c_item_id = "<?php echo $this->uri->segment(3); ?>";
            let c_section_name = "<?php echo $this->uri->segment(1); ?>";

            let $cmt_list = getEl(".cmt_list");
            let $cmt_pagin = getEl(".cmt_pagin");

            let ck_comment_page = Cookies.get("ck_comment_page");
            if(ck_comment_page === undefined){
                ck_comment_page = 1;
            }

            function getComment(ck_comment_page){
                $cmt_list.html("");
                let url = "<?php echo site_url("comment/cmtGet/"); ?>"+ck_comment_page;
                let data = {c_section_name : c_section_name,c_item_id:c_item_id};
                $.ajax({
                    type : "post",
                    data : data,
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        //console.log(rs);
                        if(rs.pagination){
                            $cmt_pagin.html(rs.pagination);
                        }
                        $.each(rs.get_comment,(i,v)=>{
                        let tmp = `<div class="card">
    <div class="card-header">
        <h1 class="text-center">${v.c_comment_title}</h1>
    </div>
    <div class="card-body">
       ${v.c_comment_body} 
       <div class="table-responsive pt-5">
           <table class="table table-striped">
               <tr>
                   <th>Comment By</th>
                   <td>${v.name}</td>
               </tr>
               <tr>
                   <th>Date</th>
                   <td>${v.c_date_create}</td>
               </tr>
           </table>
       </div>
    </div>
</div><p>&nbsp;</p>`;   
                        $cmt_list.append(tmp);
                        });
                }
                }); 
            }

            function getEl(el){
                return $(el);
            }
            function getEvent(){
                getComment(ck_comment_page);

                $cmt_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    ck_comment_page = Cookies.set("ck_comment_page",page);
                    getComment(page);
                });
            }
            return{getEvent:getEvent}
        })();
        $CM.getEvent();
    });
</script>
