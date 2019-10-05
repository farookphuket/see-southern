<section id="article">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Article</h1>
            <div class="float-right">
                <a class="btn btn-primary lnCreate" style="font-weight:bold;color:white;">Create</a>
            </div>
            <p>&nbsp;</p>
            </div>
            <div class="col-lg-12">
                <p>&nbsp;</p>
                <div class="ar_list">
                    
                </div>
                <div class="ar_pagin">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade md">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Create new post</h1>
                </div>
                <div class="modal-body">
<?php
    $frm = "mod/article/_frm_article";
    $this->load->view($frm);
?>
                    
                     <div class="modal_status">
                         
                     </div>
                </div>
                <div class="modal-footer">
                    <div class="float-right">
                        <button class="btn btn-primary btnSave" type="submit" form="frmArticle">Save</button>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script charset="utf-8">
$(function(){
    const $AR = $("#article");

    const $page_status = $(".status");
    const ar = (function(){

        let lnCreate = getEl(".lnCreate");
       let $ar_list = getEl(".ar_list"); 
       let $ar_pagin = getEl(".ar_pagin"); 
       let u_name = "<?php echo $user_name; ?>";

       //---the hidden fields
       let ar_id = getEl(".ar_id");
       let ar_user_id = getEl(".ar_user_id");
       let uniq_id = getEl(".uniq_id");
       let kw_id = getEl(".kw_id");

       //---the modal
       let $md = getEl(".md");
       let $mdTitle = getEl(".modal-title");
       let $get_tmp = getEl(".get_tmp");
       let $modal_status = getEl(".modal_status");
       let btnSave = getEl(".btnSave");

       //-- the form
       let $frm = getEl("#frmArticle");
       let ar_title = getEl(".ar_title");
       let ar_sum = getEl(".ar_sum");
       let ar_body = getEl(".ar_body");
       let og_url = getEl(".og_url");
       let keyword = getEl(".keyword");
       let keydes = getEl(".keydes");

       //-- the checkbox
       let show_index = getEl(".show_index");
       let approve = getEl(".approve");
       let pub = getEl(".pub");

       function getList(page=1){
            $ar_list.html("");
            let url = "<?php echo site_url("article/modList/"); ?>"+page;
            $.ajax({
            url : url,
                success : (e)=>{
                    let rs = $.parseJSON(e);
                   // console.log(rs);
                    if(rs.pagination){
                        $ar_pagin.html(rs.pagination);
                    }
                    $.each(rs.get,(i,v)=>{
                        let yes = `<span class="badge badge-success">YES</span>`;
                        let no  = `<span class="badge badge-danger">NO</span>`;

                        let ar_pub,ar_index,ar_approve = no;
                        if(parseInt(v.ar_show_public) !== 0){
                            ar_pub = yes;
                        }

                         if(parseInt(v.ar_show_index) !== 0){
                            ar_index = yes;
                        }

                         if(parseInt(v.ar_is_approve) !== 0){
                            ar_approve = yes;
                        }


                    let tmp = `<div class="card">
                        <div class="card-header">
                        <h1 class="text-center">${v.ar_title}</h1>                          
                        </div>
                        <div class="card-body">
                        ${v.ar_summary}
                            <p>&nbsp;</p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                <tr>
                                <th>Post By</th>              
                                <td>
                                <strong>User </strong> ${v.ar_post_by} <strong>IP </strong> ${v.ar_post_ip}
                                </td>
                                <tr>
                                <tr>
                                <th>POST STATUS</th>
                                <td>
                                <strong>Public </strong> ${ar_pub} &nbsp; <strong>APPROVE </strong> ${ar_approve} &nbsp; <strong>INDEX</strong> ${ar_index}
                                </td>
                                </tr>
                                </table>                    
                            </div>
                        </div>
                        <div class="card-footer">
                            <span class="float-right">
                            <a class="btn btn-primary lnEdit" style="font-weight:bold;color:white;" data-ar_id="${v.ar_id}">Edit</a>
                             <a class="btn btn-danger lnDel" style="font-weight:bold;color:white;" data-ar_id="${v.ar_id}">Delete</a>
                            
                            </span>                          
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    `;
                        $ar_list.append(tmp);
                    });
                }
            });
            
       }

       function showForm(cmd,id){
            $frm.trigger("reset");
            $modal_status.html("");
           switch(cmd){

            case"edit":
                let url = "<?php echo site_url("article/modEdit/"); ?>"+id;
                $.ajax({
                url : url,
                    success : (e)=>{
                    let rs = $.parseJSON(e);

                    $.each(rs.get,(i,v)=>{
                        //console.log(v);
                        ar_id.val(v.ar_id);
                        ar_user_id.val(v.ar_user_id);
                        kw_id.val(v.kw_id);
                        uniq_id.val(v.uniq_id);
                        og_url.val(v.og_url);
                        keyword.val(v.kw_page_keyword);
                        keydes.val(v.kw_page_des);
                        ar_title.val(v.ar_title);
                        ar_sum.val(v.ar_summary);
                        tinymce.get("ar_body").setContent(v.ar_body);

                        if(parseInt(v.ar_show_public) !== 0){
                            pub.prop("checked",true);
                        }


                        if(parseInt(v.ar_is_approve) !== 0){
                            approve.prop("checked",true);
                        }
                        if(parseInt(v.ar_show_index) !== 0){
                            show_index.prop("checked",true);
                        }

                        $mdTitle.html(`${v.ar_title} editing...`);
                        let msgShow = `<p class="badge badge-warning">the '${v.ar_title}' being editing...</p>`;
                        $modal_status.html(msgShow);
                    });
                    //console.log(rs);

                    $get_tmp.prop("disabled",true); 
                }

                });

            break;
            default:
               $mdTitle.html(`Create New Post ${u_name}`); 
               ar_id.val(0);
                
                $get_tmp.prop("disabled",false); 
            break;
           }

           $($md).modal("show");

       }
        
       function getTemplate(id){
           if(parseInt(ar_id.val()) !== 0){
               $get_tmp.prop("disabled",true);
           }else{ 
                let url = "<?php echo site_url("template/tmpGet/"); ?>"+id;
                $.ajax({
                    url : url,
                        success : function(e){
                            let rs = $.parseJSON(e);

                            $.each(rs.get,(i,v)=>{
                            ar_sum.val(v.section_title);
                            tinymce.get("ar_body").setContent(v.section_body);
                            });  
                        }

                }); 

           }
       }
       function arSave(){
           btnSave.unbind();
           $frm.submit(function(e){
           e.preventDefault();
            let url = $(this).attr("action");
           let data = $(this).serialize();

           $.post(url,data,function(e){
            let rs = $.parseJSON(e);
            $modal_status.html(rs.msg);
            setTimeout(()=>{
                $modal_status.html(""); 
                showForm("edit",rs.ar_id);
                getSummary();
            },3000);
           });

           });
       }

       function delAr(id){
           let url = "<?php echo site_url("article/modDel/"); ?>"+id;
           $.ajax({
           url : url,
               success : function(e){
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
            return $AR.find(el);
        }
        function getEvent(){

            getSummary();

            //-- create button
            lnCreate.on("click",()=>{
                showForm();
            });

            //---button edit
            $ar_list.delegate(".lnEdit","click",function(){
                let id = $(this).attr("data-ar_id");
                showForm("edit",id);
            });

            //---button delete
            $ar_list.delegate(".lnDel","click",function(){
                let id = $(this).attr("data-ar_id");
                delAr(id);
            });


            $get_tmp.on("change",function(){
                let opt = $(this).find("option:selected");
               let id = opt.val(); 
                getTemplate(id);
            });

            btnSave.on("click",()=>{
                arSave();
            });

            //---pagination
            $ar_pagin.delegate(".pagination a","click",function(e){
            e.preventDefault();
            let page = $(this).attr("data-ci-pagination-page");
            //alert(page);
            getList(page);
            });
        }
        return{getEvent:getEvent}
    })();
    ar.getEvent();
});
</script>
