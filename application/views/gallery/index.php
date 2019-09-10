<div class="jumbotron">
<h1>Gallery version 1.02</h1>
</div>
<div class="container">


    
    
    <div class="show_pic">
        <!--dynamic show pic-->
    </div>
    
    <ui class="nav nav-tabs">
        <li class="active">
            
            <a  href="#1" data-toggle="tab">
            <h3>
                Public Gallery
                &nbsp;
                <span class="label label-info pic_num">0</span>
            </h3>
            </a>
        </li>
    </ui>
    <div class="tab-content">
        <div class="tab-pane active" id="1">
            <div class="page-header">
                <h2>
                Public image gallery | อัลบั้มรูปภาพสาธารณะ
                </h2>
                <p>
                show the public image that post by member | รูปภาพเหล่านี้โพสโดยสมาชิกเว๊บ
                </p>
            </div>
            <div class="col-md-12 show_list_div gallery cf">
                <!--dynamic show pic list-->
            </div>
            <div class="pagin_div">
                <!--dynamic show pagination-->
            </div>
        </div>
    </div>


    

</div>



<script>

    $(function(){

        var $el = $(".container");
        
        var image = (function(){


            var show_list_div = $el.find(".show_list_div");
            var pagin_div = $el.find(".pagin_div");
            var pic_num = $el.find(".pic_num");
            var show_pic = $el.find(".show_pic");

            var emp_div = `
            <div class="well">
                <h2 class="alert alert-danger">There are no data</h2>
            </div>
            `;

            var url = "<?php echo site_url("gallery/index");?>";

            function getPic(page=1){
                show_list_div.html("");
                var url = "<?php echo site_url("gallery/ajaxPubPic/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);

                        console.log(rs);

                        if(!rs.get.length || rs.get.length === 0){
                            show_list_div.html(emp_div);
                        }else{
                            $.each(rs.get,function(i,v){

                                var thumb = "<?php echo site_url("public/image/thumb/");?>"+v.thumb_name;
                                var pic = "<?php echo site_url("public/image/");?>"+v.pic_name;
                                
                                
                                var p_title = v.pic_title.substr(0,10);
                                var tmp = `

                                <div class="img_thumb">
                                    <a href='${pic}' target="_blank" title="click to see full image">
                                        <img src='${thumb}' class='responsive' alt='click here for the full image' style="height:158px;">
                                    </a>
                                    <span>
                                        <a href='#' class='showPic' data-pic_id='${v.pic_id}' title='click to get BBCode' alt="get BBCode Click">
                                            ${p_title}
                                        </a>
                                    </span>
                                </div>
                                `;
                                show_list_div.append(tmp);
                            });
                        }

                        pic_num.html(rs.num_pic);
                        pagin_div.html(rs.pagination);
                    }
                });

            }

            function showPic(id){
                var data = {cmd : "showPic",pic_id:id};
                $.ajax({
                    type : "post",
                    url : url,
                    data : data,
                    success : function(e){

                        var rs = $.parseJSON(e);

                        $.each(rs.get,function(i,v){
                            var thumb = "<?php echo site_url("public/image/thumb/");?>"+v.thumb_name;
                            var pic = "<?php echo site_url("public/image/");?>"+v.pic_name;
                            var BB_thumb = `&lt;img src='${thumb}'&gt;`; 
                            var BB_pic = `&lt;img class='responsive' src='${pic}'&gt;`; 
                            var tmp = `
                                <div class="page-head">
                                    <h2>${v.pic_name}</h2>
                                </div>
                                <p class="text-center">
                                    <img src="${pic}" class="responsive">
                                </p>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="label-control col-sm-4">BB Code for Thumbnail</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control pic_code" readonly='readonly' data-pic_id="${v.pic_id}">${BB_thumb}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="label-control col-sm-4">BB Code for Image</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control pic_code" readonly='readonly' data-pic_id="${v.pic_id}">${BB_pic}</textarea>
                                        </div>
                                    </div>
                                </form>
                        
                            `;

                            show_pic.html(tmp);


                        });
                        
                        
                        
                    }
                })
            }

            //---getEvent
            function getEvent(){
                getPic();

                show_list_div.delegate(".showPic","click",function(ev){
                    ev.preventDefault();
                    var id = $(this).attr("data-pic_id");
                    showPic(id);
                });

                show_pic.delegate(".pic_code","click",function(){
                    $(this).select();
                });

                //---pagination click
                pagin_div.delegate(".pagination a","click",function(evt){
                    evt.preventDefault();
                    var cur_page = $(this).attr("data-ci-pagination-page");
                    //alert("click "+cur_page);
                    getPic(cur_page);
                });
            }
            return{getEvent:getEvent}
        })();
        image.getEvent();
    });
</script>
