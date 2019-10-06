<section id="template">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">
                <?php echo"{$sysName} version {$sysVersion}"; ?>
            </h1>
            <p>&nbsp;</p>
        </div>
        
        <div class="col-lg-12">
            <h1 class="text-center mdTitle">
            Create New Template              
            </h1>
            <p>&nbsp;</p>

            <form id="frmTmp" action="<?php echo site_url("template/adminSave"); ?>">
                <div class="form-group">
                    <label for="tmp_title">Template Name</label>
                    <input type="text" name="tmp_title" id="tmp_title" class="form-control tmp_title" required minlength=10>
                <input type="hidden" name="tmp_id" id="tmp_id" class="tmp_id">
                <input type="hidden" name="tmp_user_id" id="tmp_user_id" class="tmp_user_id">
                </div>
                <div class="form-group">
                    <label for="sec_title">Section title</label>
                    <textarea class="form-control tinymce sec_title" name="sec_title" id="sec_title"></textarea>
                </div>
                 <div class="form-group">
                    <label for="sec_body">Section Body</label>
                    <textarea class="form-control tinymce sec_body" name="sec_body" id="sec_body"></textarea>
                </div>

            </form>
            <span class="frmStatus"></span>
            <p>&nbsp;</p>
            <div class="float-right">
                <button class="btn btn-primary btnSave" type="submit" form="frmTmp">Save</button>
                
                <button class="btn btn-danger btnReset">Reset</button>
            </div>
            <p>&nbsp;</p>
        </div>
        <div class="line">
            
        </div>
        <div class="col-lg-12">
            <h1 class="text-center">
            Template list 
            <span class="badge badge-success numTmp">0</span> item(s).
            </h1>
            <p>&nbsp;</p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <th>Template </th>
                        <th>Date </th>
                        <th>Edit </th>
                    </thead>             
                    <tbody class="tmp_list">
                        
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>


</section>

<script charset="utf-8">
$(()=>{

    const $TP = $("#template");
    const $page_status = $(".status");
    const tp = (()=>{

        let $numTmp = getEl(".numTmp");
        let $tmp_list = getEl(".tmp_list");
        let $tmp_pagin = getEl(".tmp_pagin");
    //-- the form
    let $mdTitle = getEl(".mdTitle");
    let $frm = getEl("#frmTmp");
    let tmp_id = getEl(".tmp_id"); 
    let tmp_title = getEl(".tmp_title"); 
    let tmp_user_id = getEl(".tmp_user_id"); 
    let sec_title = getEl(".sec_title"); 
    let sec_body = getEl(".sec_body"); 

    let $frmStatus = getEl(".frmStatus");
    let btnSave = getEl(".btnSave");
    let btnReset = getEl(".btnReset");

    function getList(page=1){
        $tmp_list.html("");
        let url = "<?php echo site_url("template/adminList/"); ?>"+page;
        $.ajax({
        url : url,
            success : function(e){
                let rs = $.parseJSON(e);
                $numTmp.html(rs.get.length);
                //console.log(rs);
                if(parseInt(rs.get.length) !== 0){

                    $.each(rs.get,(i,v)=>{
                    let lnEdit = `<a class="btn btn-primary btn-sm lnEdit" data-tmp_id="${v.tmp_id}" style="font-weight:bold;color:white;">Edit</a>`;
                    
                    let lnDel = `<a class="btn btn-danger btn-sm lnDel" data-tmp_id="${v.tmp_id}" style="font-weight:bold;color:white;">Delete</a>`;
                    let tmp = `<tr>
                    <td>${v.tmp_name}</td>
                    <td>${v.date_create}</td>
                    <td>
                        ${lnEdit} ${lnDel}
                    </td>
                    </tr>`;

                    $tmp_list.append(tmp);
                
                    });
                }else{
                    let showM = `<span class="alert alert-danger">There is no data</span>`;
                    $tmp_list.html(showM);
                }
            }
        });
    }

        function tmpEdit(id){
            $frm.trigger("reset");
            $frmStatus.html("");
            $mdTitle.html(`Create new template`);
            let url = "<?php echo site_url("template/adminEdit/") ?>"+id;
            $.ajax({
            url : url,
                success : function(e){
                    let rs = $.parseJSON(e);
                   // console.log(rs);
                    $.each(rs.get,(i,v)=>{
                    tmp_id.val(v.tmp_id);
                    tmp_title.val(v.tmp_name);
                    tinymce.get("sec_title").setContent(v.section_title);
                    tinymce.get("sec_body").setContent(v.section_body);
                    let showM = `<div class="alert alert-warning">The '${v.tmp_name}' is being edit click "Save" to save or "Reset" button to start the new template.</div>`;
                    $frmStatus.html(showM);
                    $mdTitle.html(`Editing ${v.tmp_name}...`);
                    });
                }
            });
        }

    function tmpReset(){
        $frm.trigger("reset");
        $frmStatus.html("");
        $mdTitle.html(`Create new template`);
    }
    function tmpSave(){
        btnSave.unbind();
        $frm.submit(function(e){
            e.preventDefault();
            let url = $(this).attr("action");
            let data = $(this).serialize();
            $.post(url,data,(e)=>{
            let rs = $.parseJSON(e);
            $page_status.html(rs.msg).show();
            setTimeout(()=>{
            tmpEdit(rs.tmp_id);
            getSummary();
            $page_status.html("loading...").fadeOut("slow");
            },2000);
            });
        });
    }
    function tmpDel(id){
        let url = "<?php echo site_url("template/adminDel/"); ?>"+id;
        $.ajax({
        url : url,
            success : (e)=>{
            let rs = $.parseJSON(e);
            $page_status.html(rs.msg).show();
            setTimeout(()=>{
            $page_status.html("loading...").fadeOut("slow");
            getSummary();
            },2000);
        }
        });
    }
    function getSummary(){
        getList();
    }

    function getEl(el){
        return $TP.find(el);
    }
    function getEvent(){
        getSummary();

        $tmp_list.delegate(".lnEdit","click",function(){
            let id = $(this).attr("data-tmp_id");
            tmpEdit(id);
        });

         $tmp_list.delegate(".lnDel","click",function(){
            let id = $(this).attr("data-tmp_id");
            tmpDel(id);
        });

        btnSave.on("click",function(){
            tmpSave();
        });
        btnReset.on("click",()=>{
            tmpReset();
        });

    }
        return{getEvent:getEvent}
    })();

    tp.getEvent();

});
</script>
