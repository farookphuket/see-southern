<section id="template">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Template List</h1>
                <p>&nbsp;</p>
            </div>
            <div class="col-lg-12">
            <form action="<?php echo site_url("template/modSave"); ?>" id="frmTmp">
                    
                    <div class="form-group">
                    <label for="tmp_title">Template Title</label>
                    <input type="text" name="tmp_title" id="tmp_title" class="tmp_title form-control">
                    <input type="hidden" name="tmp_id" id="tmp_id" class="tmp_id">
                    <input type="hidden" name="tmp_user_id" id="tmp_user_id" class="tmp_user_id">
                    </div>

                    <div class="form-group">
                        <label for="sec_title">Section title</label>
                        <textarea class="form-control sec_title tinymce" name="sec_title" id="sec_title"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="sec_body">Section Detail</label>
                        <textarea class="form-control sec_body tinymce" name="sec_body" id="sec_body"></textarea>
                    </div>



                </form>
                <p>&nbsp;</p>
                <p class="float-right">
                <button type="submit" form="frmTmp" class="btn btn-primary btnSave">Save</button>
                <button class="btn btn-danger btnReset">Reset</button>
                </p>
                <div class="frmStatus">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <p>&nbsp;</p>
        <h1 class="text-center">
            Template 
            <span class="badge badge-success numTmp">0</span> item(s).
            <p>&nbsp;</p>
        </h1>
        <div class="table-responsive">
        <table class="table table-striped">
        <tr>
            <th>Template title</th>
            <th width="25%">Date Create</th>
            <th width="25%">Manage</th>
        </tr>    
        <tbody class="tmp_list">
            
        </tbody>
        </table>         
        </div>
        <div class="tmp_pagin">
            
        </div>
        
    </div>
</section>


<script charset="utf-8">
    
$(function(){
    const $TP = $("#template");

    const $page_status = $(".status");

    const tp = (function(){
        let $frmStatus = getEl(".frmStatus");
        let $tmp_list = getEl(".tmp_list");
        let $tmp_pagin = getEl(".tmp_pagin");
        let $numTmp = getEl(".numTmp");

        //--the form
        let $frm = getEl("#frmTmp");
        let tmp_id = getEl(".tmp_id");
        let tmp_user_id = getEl(".tmp_user_id");
        let tmp_title = getEl(".tmp_title");
        let sec_title = getEl(".sec_title");
        let sec_body = getEl(".sec_body");
        let btnSave = getEl(".btnSave");
        let btnReset = getEl(".btnReset");

        function tmpList(page=1){
            $tmp_list.html("");
            let url = "<?php echo site_url("template/modList/") ?>"+page;
            $.ajax({
            url : url,
                success : (e)=>{
                let rs = $.parseJSON(e);
               // console.log(rs.get.length);
                $numTmp.html(rs.get.length);
                if(rs.get.length === 0){
                    let showNo = `<tr>
                            <td colspan=3>
                            <h1 class="badge badge-danger">There is no data</h1>
                            </td>
                        </tr>`;
                    $tmp_list.html(showNo);
                }else{
                    //console.log(`the leng is ${rs.get.length}`);

                    $.each(rs.get,(i,v)=>{

                        let lnEdit = `<a class="btn btn-primary lnEdit" data-tmp_id="${v.tmp_id}">Edit</a>`;
                        let lnDel = `<a class="btn btn-danger lnDel" data-tmp_id="${v.tmp_id}">Delete</a>`;
                        let tmp = `<tr>
                            <td>${v.tmp_name}</td>
                            <td>${v.date_create}</td>
                            <td>
                            ${lnEdit} ${lnDel} 
                            </td>
                    
                        </tr>`;

                        $tmp_list.append(tmp);
                    });


                } 
        
            }
            });
        }

        function tmpEdit(id){
            $frm.trigger("reset");
            let url = "<?php echo site_url("template/modEdit/") ?>"+id;
            $.ajax({
            url : url,
                success : function(e){
                    let rs = $.parseJSON(e);
                    $.each(rs.get,(i,v)=>{
                        tmp_id.val(v.tmp_id);
                        tmp_user_id.val(v.tmp_user_id);
                        tmp_title.val(v.tmp_name);
                        tinymce.get("sec_title").setContent(v.section_title);
                        tinymce.get("sec_body").setContent(v.section_body);
                        let showMsg = `<span class="badge badge-warning">The  '${v.tmp_name}' is being edit now please click "Save" button to keep the change or "Reset" to start the new one.</span>`;
                    $frmStatus.html(showMsg);
                    });
                }
            });
        }
        function tmpSave(){
            btnSave.unbind();
            $frm.submit(function(e){
                e.preventDefault();
                let url = $(this).attr("action");
                let data = $(this).serialize();
                $.post(url,data,function(e){
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                    $page_status.html("loading..").fadeOut("slow");
                    tmpEdit(rs.tmp_id);
                    getSummary();
                    },2000);
                });
            });
        }
        function tmpDel(id){
            let url = "<?php echo site_url("template/modDel/") ?>"+id;
            $.ajax({
            url : url,
                success : function(e){
                    let rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                        $page_status.html("loading..").fadeOut("slow");
                        getSummary();
                    },2000);
                    
                }
            });
        }
        function frmReset(){
            $frm.trigger("reset");
            $frmStatus.html("");
        }
        function getSummary(){
            tmpList();
        }
        function getEl(el){
            return $TP.find(el);
        }
        function getEvent(){
            getSummary();

            //--submit
            btnSave.on("click",function(){
                tmpSave();
            });


            $tmp_list.delegate(".lnEdit","click",function(){
                let id = $(this).attr("data-tmp_id");
                tmpEdit(id);
            });

              $tmp_list.delegate(".lnDel","click",function(){
                let id = $(this).attr("data-tmp_id");
                tmpDel(id);
            });

            btnReset.on("click",function(){
                frmReset();
            });

        }
        return{ getEvent:getEvent }
    })();
    tp.getEvent();
});
</script>
