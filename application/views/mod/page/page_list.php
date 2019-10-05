<section id="page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center mdTitle">Create new Static page</h1>
                <p>&nbsp;</p>
                <form action="<?php echo site_url("page/modSave"); ?>" id="frmPage">
                <div class="form-group">
                    <label for="page_title">Title</label>
                    <input type="text" name="page_title" id="page_title" class="form-control page_title">
                    <input type="hidden" name="page_id" id="page_id" class="page_id">
                </div>
                <div class="form-group">
                    <label for="page_body">Page Detail</label>
                    <textarea class="form-control page_body tinymce" name="page_body"></textarea>
                <p>&nbsp;</p>
                </div>
                <div class="form-group form-inline">
                <input type="checkbox" name="show" id="show" class="show">    
                <label class="alert alert-warning" for="show">&nbsp; Show on page (Check this box)</label>
                </div>
                 <div class="frmStatus">
                    
                </div>

                <p class="float-right">

               <button class="btn btn-primary btnSave" type="submit" form="frmPage">Save</button> 
                <a class="btn btn-warning lnReset" >Reset</a> 
 
                    </p>
                    
                </form>
                <p>&nbsp;</p>
               
            </div>
            <div class="col-lg-12">
                <p>&nbsp;</p>
                <div class="table-responsive ">
                    <table class="table table-bordered page_list">
                    <tr>
                        <th width="50%">Title</th>
                        <th>Show</th>
                        <th width="10%">Edit</th>
                    </tr>
                                
                    </table>                    
                </div>
                <div class="page_pagin">
                    
                </div>
            </div>

        </div>
    </div>
</section>
<script charset="utf-8">
$(function(){

    const $PA = $("#page");
    const $page_status = $(".status");
    const $pa = (function(){

        let $page_list = getEl(".page_list");
        let $page_pagin = getEl(".page_pagin");
        let lnReset = getEl(".lnReset");

        let $mdTitle = getEl(".mdTitle");
        let $fStatus = getEl(".frmStatus");

        let $frm = getEl("#frmPage");
        let page_title = getEl(".page_title");
        let page_id = getEl(".page_id");
        let btnSave = getEl(".btnSave");
        let show = getEl(".show")

        function modList(page=1){
            $page_list.html("");
            let url = "<?php echo site_url("page/modList/") ?>"+page;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $.each(rs.get,(i,v)=>{
                //console.log(v);
                let yes = `<span class="badge badge-success">Yes</span>`;
                let no = `<span class="badge badge-danger">No</span>`;
                let showOn = no;
                if(parseInt(v.page_show) !== 0){
                              showOn = yes; 
                }
                let tmp =`<tr>
                    <td>
                    ${v.page_title}
                    
                    </td>
                    <td>${showOn}</td>
                    <td>
                    <a class="btn btn-primary lnEdit" data-page_id="${v.page_id}">Edit</a>

</td>
                        </tr>`;
                    
                    $page_list.append(tmp);
                });
            }
            });
        }

        function modEdit(id){
            $frm.trigger("reset");
            $mdTitle.html("loading...");
            let url = "<?php echo site_url("page/modEdit/"); ?>"+id;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
                $.each(rs.get,(i,v)=>{
                    
                    page_id.val(v.page_id);
                    page_title.val(v.page_title);
                    if(parseInt(v.page_show)!== 0){
                        show.prop("checked",true);
                    }
                    tinymce.get("page_body").setContent(v.page_body);
                    let showMsg = `<div class="col-lg-8">
<p class="alert alert-warning">the page '${v.page_title}' is being edit...</p>
</div>
`;
                    $mdTitle.html(`editing...${v.page_title}`);
                    $fStatus.html(showMsg);
                });
            }
            });
        }

        function modSave(){
            btnSave.unbind();
            $frm.submit(function(e){
                e.preventDefault();
                let url = $(this).attr("action");
                let data = $(this).serialize();
                $.post(url,data,function(e){
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();

                    setTimeout(()=>{
                    $page_status.html("loading...").fadeOut("slow");
                    modEdit(rs.page_id);
                    modList();
                    },2000);
                });
            }); 
        }


        function getReset(){
            $frm.trigger("reset");
            $mdTitle.html("Create new Static page");
            $fStatus.html("");


        }
        function getSummary(){
            modList();
        }
        function getEl(el){
            return $PA.find(el);
        }
        function getEvent(){
           getSummary(); 

           btnSave.on("click",()=>{
           modSave();
           });

           $page_list.delegate(".lnEdit","click",function(){
           let id = $(this).attr("data-page_id");
          // alert(id);
           modEdit(id);
           });
           lnReset.on("click",function(){
                getReset();
           });
        }
        return{getEvent :getEvent}
    })();
    $pa.getEvent();
});
</script>
