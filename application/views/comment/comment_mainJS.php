<script>



//--use jQuery
$(function(){

    var $el = $(".container");
    var page_status = $(".status");

    var comment = (function(){

        var call_module = "<?php echo $this->uri->segment(1);?>";
        var call_item_id = "<?php echo $this->uri->segment(3);?>";

        var ip = "<?php echo $ip;?>";

        var frmArea = $el.find(".commentForm");

        var comment_list = $el.find(".comment_list");
        var comment_pagin = $el.find(".comment_pagination");
        var show_num_comment = $el.find(".num_comment");
        //---comment form element
        var c_frm = $el.find("#commentForm");
        var c_id = $el.find(".c_id");
        var c_user_name = $el.find(".c_user_name");
        var c_user_email = $el.find(".c_user_email");
        var c_title = $el.find(".c_title");
        var c_body = $el.find(".c_body");

        var btnSave = $el.find(".btnSave");

        var emp_div = `
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h2>There are no data</h2>
            </div>
            <div class="panel-body">
            <p>You can create one now.</p>
            </div>
        </div>
        `;

        function getUri(){
            var data = {
                section_name : call_module,
                item_id : call_item_id
            };

            return data;
        }

        function showFormComment(){

            var o = getUri();

            var sec_name = o.section_name;
            var item_id = o.item_id;
            
            var frmAction = "";
            var frmTMP = ``;

            //frmArea.append(frmTMP);
        }

        

        function saveComment(){
            btnSave.unbind();
            var cou = 1;

            var o = getUri();
            var sec_name = o.section_name;
            var item_id = o.item_id;

            c_frm.submit(function(e){
                e.preventDefault();
                cou++;
                var data = $(this).serialize()+"&section_name="+sec_name+"&item_id="+item_id;
                var url = $(this).attr("action");
                $.post(url,data,function(e){
                    page_status.html(e).show();
                    setTimeout(function(){
                        page_status.html("loading...").fadeOut("slow");
                        getCommentSummary();
                    },4000);
                    
                });
                
            });
           
            
        }

        //---show the comment list and pagination
        function showCommentList(obj){
            //--reset show list
            comment_list.html("");
            comment_pagin.html("");
            var items = parseInt(obj.num_comment);
            var item = 0;
            //console.log("item is "+items);
            if(!items || items === 0){
                comment_list.html(emp_div);
            }else{
                //console.log(obj);
                show_num_comment.html(items);
                $.each(obj.get_comment,function(i,v){
                    item++;
                    var TMP = `
                    <div class="card">
                    <div class="card-header">
                        <h2>#${item} of ${items} - ${v.c_comment_title}</h2>
                    </div>
                    <div class="card-body">
                        ${v.c_comment_body}
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <span class="label label-default">
                                IP : ${v.c_user_ip}
                            </span>&nbsp;

                            <span class="label label-info">
                                By : ${v.c_user_name}
                            </span>&nbsp;

                            <span class="label label-default">
                                date : ${v.c_date_create}
                            </span>
                        </div>
                    
                    </div>
                    </div>
                    <p>&nbsp;</p>
                    `;

                    comment_list.append(TMP);
                });
                comment_pagin.html(obj.pagination);
            }
        
            
        }

        //----------
        function getCommentCount(page=1){
            var o = getUri();
            var sec_name = o.section_name;
            var item_id = o.item_id;
            
            var url = "<?php echo site_url("comment/getCommentCount/");?>"+page;
            var data = {section_name : sec_name,item_id : item_id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    var rs = $.parseJSON(e);
                    showCommentList(rs);
                }
            });
            
        }

        //--getMyComment
        function getMyComment(){
            var o = getUri();
            var sec_name = o.section_name;
            var item_id = o.item_id; 
            var url = "<?php echo site_url("comment/getMyComment");?>";
            var data = {section_name : sec_name,item_id : item_id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    var rs = $.parseJSON(e);
                    var num_my_comment = parseInt(rs.get_my_comment.length);
                    //console.log(num_my_comment);
                    
                    if(!num_my_comment || num_my_comment === 0){
                        setTimeout(function(){
                            c_user_name.attr("placeholder","Your name");
                            c_user_email.attr("placeholder","Your email will not show as public.| อีเมลของคุณจะไม่แสดงต่อสาธารณะ");
                            c_title.attr("placeholder","Your comment title");
                            c_body.attr("placeholder","Your comment body");
                        },2000);
                    }else{
                        //console.log(`there are something`);
                        btnSave.html("update My Comment");
                        $.each(rs.get_my_comment,function(i,v){
                            c_user_name.val(v.c_user_name);
                            c_user_email.val(v.c_user_email);
                            c_title.val(v.c_comment_title);
                            c_body.val(v.c_comment_body);
                            c_id.val(v.c_id);
                        });
                    }
                    
                }
            });
        }


        function getCommentSummary(){
            
            getCommentCount(1);
            getMyComment();
            c_frm.trigger("reset");
        }
        function getEvent(){
            getCommentSummary()
            
            //--save button click
            btnSave.on("click",function(){
                saveComment();
            });

            comment_pagin.delegate(".pagination a","click",function(e){
                e.preventDefault();
                var cur_page = $(this).attr("data-ci-pagination-page");
                getCommentCount(cur_page);
            });
        }
        return{getEvent : getEvent}
    })();
    comment.getEvent();
});
</script>