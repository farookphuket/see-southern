<script>



$(function(){



    var $el = $("#container");
    var page_status = $el.find(".status");

    var pic = (function(){

        var pic_id = $el.find(".pic_id");
        var btnSave = $el.find(".btnSave");
        var show_pic_list = $el.find(".gallery_show_list");
        var pagin_div = $el.find("#paginator");
        var num_pic_result = $el.find(".num_pic_result");

        var frmPic = $el.find(".frmPhoto");
        var pic_title = $el.find(".pic_title");
        var file_upload  = $el.find(".userfile");
        var pic_pub = $el.find(".pic_pub");
        var admin_allow = $el.find(".allowed");

        //--delete pic ajax
        function delPic(id){
            page_status.html("");
            var url = "<?php echo site_url("gallery/admin");?>";
            var data = {cmd : "delete",pic_id :id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    page_status.html(e).show();
                    setTimeout(function(){
                        page_status.fadeOut("slow");
                        getPic(1);
                    },2000);
                }
            });
        }
        

        function setPub(v,id){
            var p = 0;
            if(parseInt(v) !== 0){
                p = 1;
            }
            
            var url = "<?php echo site_url("gallery/admin");?>";
            var data = {cmd : "setPub",pic_pub : p,pic_id : id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    console.log(e);
                    page_status.html(`data has been set!`).show();
                    setTimeout(function(){
                        page_status.fadeOut("slow");
                        getPic(1);
                    },2000);
                    
                }
            });
            
        }


        function setAllow(v,id){
            var al = 0;
            if(parseInt(v) !== 0){
                al = 1;
            }
            var url = "<?php echo site_url("gallery/admin");?>";
            var data = {cmd : "setAllow",allow : al,pic_id : id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    console.log(e);
                    
                    setTimeout(function(){
                        getPic(1);
                    },400);
                    
                }
            });
            
        }

        function setTitle(v,id){
            if(!v.length){
                alert("Error :Cannot be empty!!");
                getPic(1);
            }else{
                var url = "<?php echo site_url("gallery/admin");?>";
                var data = {cmd : "setTitle",pic_title : v,pic_id : id};
                $.ajax({
                    type : "post",
                    url : url,
                    data : data,
                    success : function(e){
                        //console.log(e);
                        page_status.html(`Title has been save!`).show();
                        setTimeout(function(){
                            page_status.fadeOut("slow");
                            getPic(1);
                        },2000);
                        
                    }
                });
            }
            
        }

        //---get the number of photos from database
        function getPic(page=1){
            //--create on Sun 10 June 2018
            
            var url = "<?php echo site_url("gallery/ajaxGetPic/");?>"+page;
            $.ajax({
                url : url,
                success : function(e){
                    var rs = $.parseJSON(e);
                    show_pic_list.html(rs.get_pic);
                    pagin_div.html(rs.pagination);
                    num_pic_result.html(rs.num_pic);
                }
            });
            
            
        }

        function getEvent(){

            //---get all of the image
            getPic();

            show_pic_list.delegate(".pic_title","blur",function(){
                var id = $(this).attr("data-pic_id");
                var p_val = $(this).val();
                setTitle(p_val,id);
            });

            show_pic_list.delegate(".pic_pub","change",function(){
                var p_val = $(this).val();
                
                var id = $(this).attr("data-pic_id");
                
                setPub(p_val,id);
            });

            show_pic_list.delegate(".pic_perm","change",function(){
                var a_val = $(this).val();
                var id = $(this).attr("data-pic_id");
                setAllow(a_val,id);
            });

            show_pic_list.delegate(".pic_code","click",function(){
                //var id = $(this).attr("data-pic_id");
                $(this).focus();
                $(this).select();
            });

            show_pic_list.delegate(".btnDelPic","click",function(evt){
                evt.preventDefault();
                var id = $(this).attr("data-pic_id");
                delPic(id);
            });

            pagin_div.delegate(".pagination a","click",function(evt){
                evt.preventDefault();
                var cur_page = $(this).attr("data-ci-pagination-page");
                
                getPic(cur_page);
            });

            file_upload.on("change",function(){
                var file = this.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e){
                    var tmp = `<img src="${e.target.result}" class="responsive">`;

                    //--show image preview before upload
                    $(".preview").html(tmp);
                };
                //console.log(file);
                
            });
            
        }
        return{getEvent : getEvent}
    })();
    pic.getEvent();

    var upload_pic = (function(){

        var show_result = $el.find(".show_result");
        var frmUpload = $el.find("#frmUpload");

        //---show the percent
        var progress_bar = $el.find(".progress-bar");
        var show_prog = $el.find(".show_prog");
        show_prog.html(0+"%");

        var btnSave = $el.find(".btnSave");

        function addPic(){
            show_result.html("");
            page_status.html("");
            btnSave.unbind();
            
            /*
            frmUpload.submit(function(e){
                e.preventDefault();
                var url = $(this).attr("action");
                var data = new FormData(this);
                //alert("url is "+url+"and data is "+data);
                $.ajax({
                    type : "post",
                    url : url,
                    data : data,
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        var pic_id = 0;
                        var thumb = 0;
                        $.each(rs.img,function(i,v){
                            pic_id = v.pic_id;
                            thumb = "<?php echo site_url("public/image/thumb/");?>"+v.thumb_name;
                            var tmp = `
                            <img class="responsive" src="${thumb}">
                            `;
                            page_status.html(tmp).show();
                            setTimeout(function(){
                                page_status.fadeOut("slow");
                                frmUpload.trigger("reset");
                                location.reload();
                            },2000);
                        });
                        
                        
                    }

                });
            });
            */
            
            frmUpload.submit(function(e){
                e.preventDefault();
                
                var data = new FormData(this);
                var url = $(this).attr("action");
                var req = new XMLHttpRequest();
                req.upload.addEventListener('progress',function(e){
                    var percent = Math.round(e.loaded/e.total * 100);
                    //console.log(percent);
                    progress_bar.width(percent+"%").html(percent+"%");
                    show_prog.html(percent+"%");
                    //frm.find(".progress-bar").width(percent+"%");
                });
                
                
                req.addEventListener("load",function(e){
                    progress_bar.addClass("progress-bar-success").html("Upload Successfully...");
                });
                

                req.open("post",url);
                req.send(data);
                req.onreadystatechange = function(){
                    if(req.readyState === 4){
                        if(req.status === 200){
                            var rs = req.responseText;
                            var p = JSON.parse(rs);
                            //console.log(rs.img);
                            var pic_id = 0;
                            var thumb = 0;
                            
                            $.each(p.img,function(i,v){
                                pic_id = v.pic_id;
                                thumb = "<?php echo site_url("public/image/thumb/");?>"+v.thumb_name;
                                var tmp = `
                                <img class="responsive" src="${thumb}">
                                `;
                                show_prog.html(`${v.pic_name} has been upload and resized!!`);
                                setTimeout(function(){
                                    
                                    frmUpload.trigger("reset");
                                    show_prog.html(0+"%");
                                    $(".preview").html(tmp);
                                    progress_bar.removeClass("progress-bar-success")
                                    .width(0+"%")
                                    .html("Ready for new upload");
                                    
                                    //--after upload call pic.getPic
                                    pic.getEvent();
                                },2000);
                                
                                
                            });
                            
                        }else{
                            console.log("req fail");
                            
                        }
                    }
                };
                
                

                
            });
            
            
            

        }
        function getEvent(){
            btnSave.on("click",function(){
                addPic();
            });
        }
        return{getEvent : getEvent}
    })();
    upload_pic.getEvent();

    var editPic = (function(){

        var btnEdit = $el.find(".btnEdit");

        var showPlace = $el.find(".showPlace");

        var btnDel = $el.find(".btnDel");

        //---global url for this site
        var url = "<?php echo site_url("gallery/admin");?>";
        //----------------
        function editPic(id){
            var url = "<?php echo site_url("gallery/admin");?>";
            var data = {cmd:"editPic",pic_id:id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    //console.log(e);
                    var rs = $.parseJSON(e);
                    showPlace.html(rs.get_pic);
                    
                }
            });
        }
        //--set public
        function setPub(value,id){
            var p = value;
            //alert("value is "+value+"id is "+id);
            var url = "<?php echo site_url("gallery/admin");?>";
            var data = {cmd : "setPub",pic_id:id,pic_pub:p};
            $.ajax({
                type:"post",
                url:url,
                data : data,
                success : function(e){
                    page_status.html("data has been save!").show();
                    setTimeout(function(){
                        page_status.fadeOut("slow");
                    },2000);
                }
            });
        }

        //------allow or not allow
        function setAllow(val,id){
            var p = val;
            //alert("value is "+value+"id is "+id);
            
            var data = {cmd : "setAllow",pic_id:id,allow:p};
            $.ajax({
                type:"post",
                url:url,
                data : data,
                success : function(e){
                    page_status.html("permission has been save!").show();
                    setTimeout(function(){
                        page_status.fadeOut("slow");
                    },2000);
                }
            });
            
        }
        //-------set title
        function setTitle(val,id){
            var data = {cmd:"setTitle",pic_id:id,pic_title:val};
            $.ajax({
                type:"post",
                url:url,
                data:data,
                success : function(e){
                    page_status.html("Title has been save!").show();
                    setTimeout(function(){
                        page_status.fadeOut("slow");
                        location.reload();
                    },2000);
                }
            });
        }

        //---delete this image
        function delPic(id){
            //alert(`we will delete ${id}`);
            var data = {cmd:"delete",pic_id:id};
            $.ajax({
                type:"post",
                url : url,
                data : data,
                success : function(e){
                    page_status.html(e).show();
                    setTimeout(function(){
                        page_status.fadeOut("slow");
                        location.reload();
                    },2000);
                }
            })
        }
        //----------------
        function getEvent(){
            btnEdit.on("click",function(a){
                a.preventDefault();
                var id = $(this).attr("data-pic_id");
                editPic(id);
            });

            //----click to select or text in textbox
            showPlace.delegate(".pic_code","click",function(){
                var id = $(this).attr("data-pic_id");
                $(this).focus();
                $(this).select();
            });

            //---edit set public or private to this image
            showPlace.delegate(".pic_pub","change",function(){
                var id = $(this).attr("data-pic_id");
                var vl = $(".pic_pub").val();
                setPub(vl,id);
            });

            //------edit set allow to this image
            showPlace.delegate(".pic_perm","change",function(){
                var id = $(this).attr("data-pic_id");
                var vl = $(".pic_perm").val();
                setAllow(vl,id);
            });

            //------edit set text title to this image
            showPlace.delegate(".pic_title","blur",function(){
                var id = $(this).attr("data-pic_id");
                var vl = $(".pic_title").val();
                setTitle(vl,id);
            });

            //-----delete this image
            btnDel.on("click",function(){
                var id = $(this).attr("data-pic_id");
                delPic(id);
            });
        }
        return{getEvent:getEvent}
    })();

    editPic.getEvent();

    
});
</script>