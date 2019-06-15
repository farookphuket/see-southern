<script>



//----JQuery
$(function(){

    var $el = $("#comment");
    var page_status = $el.find(".status");
    var modal_status = $el.find(".modal_status");

    var commentAdmin = (function(){

        //---label count all comment on the right
        var label_right = $el.find(".label_right");
        var num_right = $el.find(".num_right");

        //---show list of comment in the main div
        var c_right_list = $el.find(".c_list");
        var c_right_pagin = $el.find(".c_pagin");

        //---modal mdEditComment
        var mdEditComment = $el.find(".mdC");
        var mdTitle = $el.find(".mdTitle");

        //---from and element
        var frmComment = $el.find("#frmComment");
        var c_id = $el.find(".c_id");
        

        var c_title = $el.find(".c_title");
        var c_body = $el.find(".c_body");
        
        var c_show = $el.find(".c_show");
        var txt_show = $el.find(".txt_show");

        var c_approve = $el.find(".c_approve");
        var txt_approve = $el.find(".txt_approve");

        var btnSaveComment = $el.find(".btnSaveComment");
        //-------form element end

        function getAllComment(page=1){
            c_right_list.html("");
            var url = "<?php echo site_url("comment/adminGetAllComment/");?>"+page;
            $.ajax({
                url : url,
                success : function(e){
                   var rs = $.parseJSON(e);
                   console.log(rs);
                    num_right.html(rs.num_comment);
                   $.each(rs.get_comment,function(i,v){
                       
                       //---show or hide comment status
                       var c_show_status = `
                       <span class="label label-danger">
                        Hide
                       </span>
                       `;
                       if(parseInt(v.c_show) !== 0){
                            c_show_status = `
                            <span class="label label-success">
                                Show
                            </span>
                        `;
                       }

                        var c_is_approve = `
                            <span class="label label-danger">Not Approve</span>
                        `;
                        if(parseInt(v.c_status) === 2){
                            c_is_approve = `
                                <span class="label label-success">Approve</span>
                            `;
                        }
                        var goto_url = `<a href="${v.c_comment_url}" title="Go to page " target="_blank">View Comment</a>`;
                       var tmp = `
                       <div class="card">
                        <div class="card-header">
                            <h2>${v.c_comment_title}</h2>
                        </div>
                        <div class="card-body">
                            ${v.c_comment_body}
                            <p>&nbsp;</p>
                            <div class="table-responsive">
                            <table class="table table-bordered">
                            <tr>
                            <th>User Info</th>
                            <td>
                            <strong>
                            Name :
                            </strong>
                            ${v.c_user_name}
                            &nbsp;
                            <strong>
                            Email :
                            </strong>
                            ${v.c_user_email}
                            &nbsp;
                            <strong>
                            IP :
                            </strong>
                            ${v.c_user_ip}
                            &nbsp;
                            
                            <strong>
                            Show :
                            </strong>
                            ${c_show_status}
                            &nbsp;
                            </td>
                            </tr>

                            <tr>
                            <th>Date</th>
                            <td>
                            <strong>Comment on :</strong>
                            ${v.c_date_create} ${v.c_comment_time}
                            </td>


                            </tr>

                            </table>
                            </div>
                        </div>
                        <div class="card-footer">
                        <button class="btn btn-primary lnEditComment" data-c_id="${v.c_id}">Edit</button>
                        </div>
                       </div>
                       <p>&nbsp;</p>
                       `;

                       c_right_list.append(tmp);

                   });
                   c_right_pagin.html(rs.pagination);
                   
                }
            });
        }
        //--------------------------------------
        //------------editComment
        function editComment(cmd,id){
            frmComment.trigger("reset");
            mdTitle.html("");
            tinymce.activeEditor.setMode("design");
            switch(cmd){
                case"edit":
                    var url = "<?php echo site_url("comment/adminEditComment/");?>"+id;
                    $.ajax({
                        url : url,
                        success : function(e){
                            var rs = $.parseJSON(e);
                            //console.log(rs.get_comment);
                            modal_status.html("press save button to save change");
                            
                            $.each(rs.get_comment,function(i,v){
                                c_id.val(v.c_id);
                                c_title.val(v.c_comment_title);
                                c_body.val(tinymce.activeEditor.setContent(v.c_comment_body));
                                
                                var s_txt = "Not Show";
                                if(parseInt(v.c_show) !== 0){
                                    c_show.prop("checked",true);
                                    s_txt = "Show";
                                    
                                }
                                c_show.val(v.c_show);
                                txt_show.html(s_txt);

                                var a_txt = "Not Approve";
                                var c_st = parseInt(v.c_status);
                                if(c_st === 2){
                                    c_approve.prop("checked",true);
                                    a_txt = "Approve";
                                    
                                }
                                c_approve.val(v.c_show);
                                txt_approve.html(a_txt);
                                
                                var label_title = `<span class="label label-default">${v.c_comment_title}</span>`;
                                mdTitle.html(`edit and reply to ${label_title}` );
                                $(mdEditComment).modal("show");
                            });
                        }
                    });
                    
                break;
            }
        }
        //--------------------------------------
        //-----------setBox
        function setBox(cmd){
            var b_name = "";
            var b_option = 0;
            var b_label = "";
            var b_txt = "";

            switch(cmd){
                case"c_show":
                    b_name = c_show;
                    b_label = txt_show;
                    b_txt = "Not Show";
                    if(b_name.is(":checked")){
                        b_txt = "Show";
                        b_option = 1;
                    }
                break;
                case"c_approve":
                    b_name = c_approve;
                    b_label = txt_approve;
                    b_txt = "Not Approve";
                    if(b_name.is(":checked")){
                        b_txt = "Approved";
                        b_option = 2;
                    }
                break;
            }

            b_label.html(b_txt);
            b_name.val(b_option);
        }
        //-------------------------------------
        //----------saveComment
        function saveComment(){
            btnSaveComment.unbind();
            frmComment.submit(function(e){
                e.preventDefault();
                var url = $(this).attr("action");
                var data = $(this).serialize();
                $.post(url,data,function(res){
                    modal_status.html(res.msg);
                    setTimeout(function(){
                        modal_status.html("Ready please close this window");
                        
                        getSummary();
                        
                    },2000);
                });
            });
        }
        //------------getSummary----------
        function getSummary(){
            getAllComment();
        }
        //-----------------------
        function getEvent(){
            getSummary();
            
            //----edit comment click event
            c_right_list.delegate(".lnEditComment","click",function(e){
                e.preventDefault();
                var id = $(this).attr("data-c_id");
                editComment("edit",id);
            });
            //-----------------------------
            //---------right bar pagination
            c_right_pagin.delegate(".pagination a","click",function(e){
                e.preventDefault();
                var cur_page = $(this).attr("data-ci-pagination-page");
                getAllComment(cur_page);
            }) ;

            //----setbox show comment
            c_show.on("change",function(){
                setBox("c_show");
            });
            //----setbox approve comment
            c_approve.on("change",function(){
                setBox("c_approve");
            });

            //----button save Comment click event
            btnSaveComment.on("click",function(){
                saveComment();
            });
        }
        return{getEvent : getEvent}
    })();

    commentAdmin.getEvent();
});

</script>