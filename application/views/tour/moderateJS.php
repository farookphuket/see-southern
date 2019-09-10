<script>

$(function(){


    var $el = $("#container");
    var modal_status = $el.find(".modal_status");

    var tour = (function(){

        var btnAdd = $el.find(".addTour");
        var lnEdit = $el.find(".lnEdit");
        var lnDel = $el.find(".lnDel");

        //--modal form
        var mdTour = $el.find(".frmTour");
        var mdTitle = $el.find(".mdTitle");
        mdTitle.html("Add new Tour");

        var frmTour = $el.find("#frmTour");
        var t_title = $el.find(".t_title");
        t_title.attr("placeholder","Title of the program.ใส่ชื่อโปรแกรมย่อๆ ไม่เกิน 30 ตัวอักษร")
        .val("");

        var t_id = $el.find(".t_id");
        var t_summary = $el.find(".t_summary");
        t_summary.attr("placeholder","short info about this program 200 letters,ข้อความแบบย่อเกี่ยวกับโปรแกรมนี้ 200 ตัวอักษร")
        .val("");
        var price_minimum = $el.find(".price_minimum");
        price_minimum.attr("placeholder","number only")
        .val("");
        var price_full = $el.find(".price_full");
        price_full.attr("placeholder","number only")
        .val("");
        var t_body = $el.find(".t_body");

        var btnSave = $el.find(".btnSave");


        function showForm(cmd,id){
            tinymce.activeEditor.setMode("design");
            
            switch(cmd){
                case"edit":
                    var url = "<?php echo site_url("tour/admin");?>";
                    var data = {
                        cmd : "edit",
                        t_id : id
                    };
                    $.ajax({
                        type : "post",
                        url : url,
                        data : data,
                        success : function(e){
                            var rs = $.parseJSON(e);
                            $.each(rs.get_tour,function(i,v){
                                var title = v.t_name;
                                mdTitle.html(`Editing ${title}`);
                                t_id.val(v.t_id);
                                t_title.val(title);
                                t_summary.val(v.t_summary);
                                price_minimum.val(v.min_price);
                                price_full.val(v.full_price);
                                t_body.val(tinymce.activeEditor.setContent(v.t_program));
                                $(mdTour).modal("show");
                            });
                        }
                    });
                break;
                default:
                    frmTour.trigger("reset");
                    t_summary.val("");
                    $(mdTour).modal("show");
                break;
            }
        }
        //----
        function saveTour(){
            btnSave.unbind();
            //---save data post
            frmTour.submit(function(ev){
                ev.preventDefault();
                var url = $(this).attr("action");
                var data = $(this).serialize()+"&cmd=saveTour";
                $.post(url,data,function(o){
                    modal_status.html(o);
                    setTimeout(function(){location.reload();},2500);
                });
            });
        }

        //--delete program
        function delTour(id){
            var url = "<?php echo site_url("tour/admin");?>";
            var data = {cmd : "delete",t_id : id};
            $.ajax({
                type : "post",
                url : url,
                data : data,
                success : function(e){
                    alert(e);
                    setTimeout(function(){
                        location.reload();
                    },500);
                }
            })
        }
        //------
        function getEvent(){
            //--call form tour
            btnAdd.on("click",function(){
                
                showForm();
            });

            //--edit tour
            lnEdit.on("click",function(){
                var id = $(this).attr("data-t_id");
                
                showForm("edit",id);
            });

            //--delete
            lnDel.on("click",function(){
                var id = $(this).attr("data-t_id");
                delTour(id);
            });

            //--form tour
            btnSave.on("click",function(){
                
                saveTour();
            });
        }
        return{ getEvent : getEvent}
    })();
    //--call tour
    tour.getEvent();
});
</script>