<section id="blog">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 pt-0 mb-4 bg-faded rounded">
                <h2 class="text-center">
                    Blog
                    <span class="badge badge-success bl_num">0</span>
                </h2>
                <div class="bl_pagin pt-4 mb-3">
                    
                </div>
                <div class="bl_list">
                    
                </div>
                <div class="bl_pagin pt-2 mb-4">
                    
                </div>
            </div>
            <p class="line">&nbsp;</p>


<!-- show as Category START -->
<?php

    $cur_url = current_url();
    $blog_url = site_url("blog");
    $uri_seg1 = $this->uri->segment(1);
    if($cur_url == $blog_url):
        //--- this part will only show if the current url is blog
?>
            <div class="col-lg-12 pt-5 mb-4 bg-faded rounded">
                <h2 class="text-center">By category&nbsp;
                <span class="badge badge-success bl_num_cat">
0
                </span>
                </h2>
                <div class="row">
<?php
    if($get_cat):
        $num=0;
    foreach($get_cat as $row):
        $num++;
        ?>
<div class="col-lg-4 mb-2">
    <div class="list-group list_by_cat">
    <a href="#" class="list-group-item list-group-item-action list-group-item-primary lnGetByCat" data-bl_cat_id="<?php echo $row->cat_id; ?>">
<?php 

    $show_cat = "{$num}. {$row->cat_title}";
    echo $show_cat; 

?>
    </a> 
    </div>
</div>
<?php
    endforeach;
   endif; 
?> 
                    <div class="col-lg-12 pt-3 mb-4">
                        <div class="bl_cat_pagin">
                            
                        </div>
                        <div class="bl_cat_list">
                            
                        </div>
                    </div>
                </div>
            </div>

<?php
    endif;
?>
<!-- show as category END-->

        </div>
    </div>
</section>
<script charset="utf-8">
    $(function(){
        const $BLOG = (function(){


            let ck_blog_page = Cookies.get("ck_blog_page");
            if(ck_blog_page === undefined){
                ck_blog_page = 1;
            }

            //-- category
            let $bl_cat_list = getEl(".bl_cat_list");
            let $bl_cat_pagin = getEl(".bl_cat_pagin");
            let $lnGetByCat = getEl(".lnGetByCat");
            let $bl_num_cat = getEl(".bl_num_cat");

            //--- blog item
            let $bl_list = getEl(".bl_list");
            let $bl_pagin = getEl(".bl_pagin");
            let $bl_num = getEl(".bl_num");

            function getBlogList(ck_blog_page=1){
                $bl_list.html("");
                let url = "<?php echo site_url("blog/blogGet/"); ?>"+ck_blog_page;
                $.ajax({
                    url : url,
                        success : (e)=>{
                        let rs = $.parseJSON(e);
                        //console.log(rs);
                        if(rs.get_all.length !== 0){
                            if(rs.pagination){
                                $bl_pagin.html(rs.pagination);
                            }
                            $bl_num.html(rs.get_all.length);

                        let bl_at_num = 0;
                        $.each(rs.get_pub,(i,v)=>{
                            bl_at_num++;
                            let view_url = "<?php echo site_url("blog/view/"); ?>"+v.bl_uniq_id;
                            let share_url = "<?php echo site_url("blog/view/"); ?>"+v.bl_uniq_id;
                            let tmp = `${v.bl_des}
    <div class="bg-faded">
        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>By</th>
                    <td>${v.name}</td>
                </tr>
                <tr>
                    <th>Date</th>
                    <td>Create ${v.bl_date_create} | Update ${v.bl_date_update}</td>
                </tr>
                <tr>
                    <th>Share Link</th>
                    <td>
                    <p>
                    <textarea class="form-control share_link">${share_url}</textarea>
                    </p>
                    </td>
                </tr>
                <tr>
                    <th>Read More</th>
                    <td>
                    <div class="float-right">
                    <a  href="${view_url}" target="_blank" data-bl_id="${v.bl_id}">${v.bl_title}</a>
                            
                    </div>

                    </td>
                </tr>
            </table>
            
        </div>
</div>`;     
                $bl_list.append(tmp);
                        });

                        }
                        
                }
                });                
            }
            function blogGetByCat(cat_id,ck_cat_page=1){
                $bl_cat_list.html("");
                let url = "<?php echo site_url("blog/blogGetByCat/"); ?>"+cat_id+"/"+ck_cat_page;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);
                    console.log(rs);
                    $.each(rs.get,(i,v)=>{
                        let tmp = `<div class="bg-faded rounded">
                            ${v.bl_des}
                            </div>`;
                        $bl_cat_list.append(tmp);
                    }); 
                }
                });
                
            }
            function getSummary(){
                getBlogList(ck_blog_page);

            }
            function getEl(el){
                return $(el);
            }
            function getEvent(){
                getSummary();

                $bl_list.delegate(".share_link","click",function(e){
                    e.preventDefault();
                    $(this).select();
                    let open_me = $(this).val();
                    setTimeout(()=>{
                    if(confirm(`go to page ${open_me}?`) === true){
                        window.open(open_me,"_blank");
                    }
                    },1200);

                });

                $bl_pagin.delegate(".pagination a","click",function(e){
                    e.preventDefault();
                    let page = $(this).attr("data-ci-pagination-page");
                    
                    ck_blog_page = Cookies.set("ck_blog_page",page);
                    getBlogList(page);
                });


                //-- lnGetByCat
                $lnGetByCat.on("click",function(e){
                    e.preventDefault();
                    let cat_id = $(this).attr("data-bl_cat_id");
                    if($(".lnGetByCat").hasClass("active")){
                        $(".lnGetByCat").removeClass("active");
                    }
                    $(this).addClass('active');
                    blogGetByCat(cat_id);
                });

            }
            return{ getEvent:getEvent }
        })();
        $BLOG.getEvent();
    });
</script>

