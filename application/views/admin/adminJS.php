<script>

//----Fri 21 Sep 2018

$(function(){


var $el = $("#notice");
var page_status = $(".status");
var modal_status = $el.find(".modal_status");


//---notification admin---///
var notice = (function(){

    //---notice place
    var notice_list = $el.find(".notice_list");
    var notice_pagin = $el.find(".notice_pagin");
    var notice_num = $el.find(".notice_num");

    //------mark all
    var mark_all = $el.find(".mark_all");
    var set_all = $el.find(".set_all");

    //-----------get the list of notification
    function getNotice(page=1){
        notice_list.html("");
        mark_all.prop("disabled",true);
        set_all.hide();
        var url = "<?php echo site_url("admin/adminGetNotice/");?>"+page;
        $.ajax({
            url : url,
            success : function(e){
                //console.log(e);
                var rs = $.parseJSON(e);
                notice_num.html(rs.num_notice);
                $.each(rs.get_notice,function(i,v){
                    var tmp = `
                    <li>
                        <div class="content-wrap">
                            
                            <h3>${v.notice_title}</h3>
                            <div class="float-right">
                                <input type="checkbox" name="mark_id" class="mark_id" data-notice_id="${v.notice_id}">&nbsp;Mark as read
                            </div>
                            
                            
                            <p>
                                ${v.notice_body}
                            </p>
                        </div>
                    </li>
                    `;
                    notice_list.append(tmp);
                });
                if(rs.num_notice !== 0){
                    notice_pagin.html(rs.pagination);
                    mark_all.prop("disabled",false);
                    set_all.show();
                }
                
            }
        });
    }
    //---------------------
    //-------markAsRead
    function markSingleAsRead(cmd,id){
        //alert("the id is "+id);
        var opt = 0;
        var note_id = 0;
        switch(cmd){
            case"mark":
                note_id = id;
                if($(".mark_id").is(":checked")){
                    opt = 2;
                }
            break;
        }
        var url = "<?php echo site_url("admin/markSingleAsRead");?>";
        var data = {
            notice_id : note_id,
            opt : opt
        };
        $.ajax({
            type : "post",
            url : url,
            data : data,
            success : function(e){
                //console.log(e);
                var rs = $.parseJSON(e);
                page_status.html(rs.msg).show();
                setTimeout(function(){
                    page_status.fadeOut("slow");
                    getSummary();
                },2000);
                
            }
        });
        
    }
    //-------------------------
    //-------mark all as read
    function markAllAsRead(){
        $(".mark_id").each(function(){
            $(this).prop("checked",true);
            var url = "<?php echo site_url("admin/markAllAsRead");?>";
            $.ajax({
                url : url,
                success : function(e){
                    //console.log(e);
                    var rs = $.parseJSON(e);
                    page_status.html(rs.msg).show();
                    setTimeout(function(){
                        page_status.html("page is Ready!").fadeOut("slow");
                        mark_all.prop("disabled",true);
                        set_all.hide();
                        notice_pagin.fadeOut("slow");
                        getSummary();
                    },3000);
                    
                }
            });
        });
    }

    //-------------------
    //-----getSummary--------
    function getSummary(){
        getNotice();
    }
    //----------------
    function getEvent(){
        getSummary();

        //----Mark single item
        notice_list.delegate(".mark_id","change",function(){
            var id = $(this).attr("data-notice_id");
            markSingleAsRead("mark",id);
        });
        //----------------
        //------notice pagination -----
        notice_pagin.delegate(".pagination a","click",function(e){
            e.preventDefault();
            var cur_page = $(this).attr("data-ci-pagination-page");
            getNotice(cur_page);
        });
        //-----mark all item
        mark_all.on("change",function(){
            markAllAsRead();
        });
    }
    return{ getEvent : getEvent}
})();
notice.getEvent();

//-----end of notification admin------

});

</script>