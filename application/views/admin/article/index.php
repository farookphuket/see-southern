<section id="article_admin">
<div class="container tm-container-2">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-center">Article Admin Page</h1>
    </div>
    <div class="col-lg-12">
      <div class="float-left">
      <a class="btn btn-primary lnHome" href="<?php echo site_url("admin"); ?>" style="color:red;font-weight:bold;">Home</a>
      </div>
      <div class="float-right">
        <a class="btn btn-primary lnCreate" style="color:white;font-weight:bold;">Create</a>
      </div>
    </div>

      <div class="row">
        <div class="col-lg-12">
          <h2  style="color:white;" class="tm-welcome-text">Article List</h2>
        </div>
      </div>
      <!-- show list of the article -->
      <div class="row tm-section-mb">
        <div class="col-lg-12">
          <div class="ar_list"></div>
          <div class="ar_pagin"></div>

        </div>
      </div>
      <!-- End of show list -->



  </div> <!-- End of div.row -->
</div> <!-- End of div.container -->


<!-- modal area -->
  <div class="modal fade md">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title">This is the title</h1>
          <button class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
<?php
  $frm = "admin/article/_frm_ar";
  $this->load->view($frm);
?>
          <div class="modal_status"></div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary btnSave" type="submit" form="frmAr">Save</button>
          <button class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<!-- end of modal area -->
</section>
<script>

$(function(){

  var $el = $("#article_admin");
  const $page_status = $(".status");
  var ar = (function(){

    //---the create link
    var lnCreate = getEl(".lnCreate");
    
    //---the list
    var $ar_list = getEl(".ar_list");
    var $ar_pagin = getEl(".ar_pagin");

    //--- the modal 
    var $md = getEl(".md");
    var $mdTitle = getEl(".modal-title");
    var $modal_status = getEl(".modal_status");


    //--- the form
    var $frm = getEl("#frmAr");
    var btnSave = getEl(".btnSave");

    let $get_tmp = getEl(".get_tmp");
    //-- the input hidden
    var ar_id = getEl(".ar_id");
    var kw_id = getEl(".key_id");
    var ar_user_id = getEl(".ar_user_id");
    var uniq_id = getEl(".uniq_id");
    
    //--- seo filed 
    var og_url = getEl(".og_url");
    var og_title = getEl(".og_title");
    var og_des = getEl(".og_des");

    //-- checkbox for tmp
    var chSumTmp = getEl(".need_tmp");
    var $sumResult = getEl(".sum_result");
    var chBodyTmp = getEl(".body_tmp");

    //-- article from field 
    var ar_title = getEl('.ar_title');
    var ar_sum = getEl('.ar_sum');
    var ar_body = getEl(".ar_body");
    var chPub = getEl(".ar_pub");
    var chApprove = getEl(".ar_approve");
    var chIndex = getEl(".show_index");
    var $fResult = getEl(".fResult");

    const u_name = "<?php echo $user_name; ?>"

    //------ getArList
    function getArList(page=1){

      var url = "<?php echo site_url("article/adminGetAllPost/"); ?>"+page;
      $.ajax({
        url : url,
          success : function(e){
            var rs = $.parseJSON(e);
            //console.log(rs);
            $ar_list.html("");
            //--- pagination page
            if(rs.pagination){
              $ar_pagin.html(rs.pagination);

            }

            $.each(rs.get_ar,function(i,v){

              var lnEdit = `<a  style="color:white;font-weight:bold;" class="btn btn-primary lnEdit" data-ar_id="${v.ar_id}">Edit</a>`;
              var lnDel = `<a  style="color:white;font-weight:bold;" class="btn btn-danger lnDel" data-ar_id="${v.ar_id}">Delete</a>`;
              var tmp = `<div class="card">
                  <div class="card-header bg-primary">
                    <h1 style="color:white;">${v.ar_title}</h1>
                  </div>
                  <div class="card-body">
                    ${v.ar_summary}
                    <p>&nbsp;</p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tr>
                          <th>Post By</th>
                          <td>${v.ar_post_by}</td> 
                        </tr>

                        <tr>
                          <th>Post User IP</th>
                          <td>${v.ar_post_ip}</td> 
                        </tr>
                        <tr>
                          <th>Date</th>
                          <td>
                            <p>
                              <strong>Create : </strong>&nbsp;  
                              ${v.date_add}&nbsp;
                              <strong>Update :</strong>&nbsp;  
                              ${v.date_edit}&nbsp;

                            </p>

                          </td> 
                        </tr>

                      </table>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="float-right">
                      ${lnEdit} ${lnDel}
                    </div>
                  </div>
              </div><p>&nbsp;</p>`;

              $ar_list.append(tmp);
            });


          }
      });

    }
    //-------------------------
    function showForm(cmd,id){
      formSetZero();

      switch(cmd){
      case"edit":
        var url = "<?php echo site_url("article/adminEditAr/"); ?>"+id;
        $.ajax({
          url : url,
            success : function(e){
              var rs = $.parseJSON(e);
              $.each(rs.get_ar,function(i,v){
                ar_id.val(v.ar_id);
                kw_id.val(v.kw_id);
                ar_user_id.val(v.ar_user_id);
                uniq_id.val(v.uniq_id);
                og_url.val(v.og_url);
                og_title.val(v.og_title);
                og_des.val(v.og_description);
                ar_title.val(v.ar_title);
                ar_sum.val(v.ar_summary);
                tinymce.activeEditor.setContent(v.ar_body);
                $mdTitle.html(`Editing ${v.ar_title} ....`);


                //---the checkbox
                if(parseInt(v.ar_is_approve) !== 0){
                  chApprove.prop("checked",true);
                }

                if(parseInt(v.ar_show_public) !== 0){
                  chPub.prop("checked",true);
                }

               if(parseInt(v.ar_show_index) !== 0){
                  chIndex.prop("checked",true);
                }

                var showMsg = `<p class="alert alert-warning">
                  you are editing "${ v.ar_title }" now.
                  </p><p class="alert alert-danger">Please note : you have to click "Save" button to save your change.</p>`;
                $modal_status.html(showMsg);

              });
            }
        }); 

        $get_tmp.prop("disabled",true);
        break;
      default:
        $mdTitle.html("Create New Post");  
        $get_tmp.prop("disabled",false);
      break;
      }
      $($md).modal("show");
    }
    //-------------------
    //------- getDefaultTmp
    function getAppend(){ 
      if(parseInt(ar_id.val()) === 0){
        //--- only if the none id paste
        og_title.val(`edit the keyword for [${ ar_title.val() }]`);
        og_des.val(`edit the description for [${ ar_title.val() }] `);
        var today = new Date().toLocaleString();
        let abody = `${ar_sum.val()}<p class="float-right">post by ${u_name} create on ${today}</p>`;

        ar_sum.val(abody);
        }

    }

    function getTemplate(id){
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

    //--- showSumResult
    function showSumResult(){
      $sumResult.html(""); 
      var sum = ar_sum.val();
      var tmp = `<div class="container">
            ${sum}
          </div>
          `;
        $sumResult.html(tmp);
    }

    //-------- formSetZero
    function formSetZero(){
      $frm.trigger("reset");
      ar_title.attr("placeholder","New Post");
      og_url.attr("placeholder","This field will be shown after you click save button!");
      og_title.attr("placeholder","Enter new meta keyword");
      og_des.attr("placeholder","Enter new meta key description");
      ar_sum.attr("placeholder","You can tik on 'I want HTML' to create default template fo you");

      ar_id.val(0);
      kw_id.val(0);
      uniq_id.val(0);
      $sumResult.html("");
      $modal_status.html("");
    }
    //----------------
    //----------------------
    //------saveArticle 
    function saveArticle(){
      btnSave.unbind();
      $frm.submit(function(o){ 
        o.preventDefault();
        var url = $(this).attr("action");
        var data = $(this).serialize();
        $.post(url,data,function(e){ 
          var rs = $.parseJSON(e);

          var showMsg = `<p class="alert alert-success">${ rs.msg }</p>`;
          $modal_status.html(showMsg).show();
          setTimeout(function(){ 
            $modal_status.html("");
            showForm("edit",rs.ar_id);
            getSummary();
          },3000);
        });

      });
    }
    //----------------
    function arDel(id){
        let url = "<?php echo site_url("article/adminDel/"); ?>"+id;
        $.ajax({
        url : url,
            success :(e)=>{
            let rs = $.parseJSON(e);
            $page_status.html(rs.msg).show();
            setTimeout(()=>{

                $page_status.html("loading...").fadeOut("slow");
                getSummary();
            },2000);
        }
        });
    }
    //------ getSummary 
    function getSummary(){
      getArList();

    }
    //------- getEl ----//
    function getEl(el){
      return $el.find(el);
    }
    //----- getEvent -->
    function getEvent(){
     //$($md).modal("show"); 
      getSummary();
      //--- click create new button
      lnCreate.on("click",function(){
        showForm();
      });
      og_url.on("click",function(){
        $(this).select();
      });

      //--- edit button click
      $ar_list.delegate(".lnEdit","click",function(){
        var id = $(this).attr("data-ar_id");
        showForm("edit",id);
      });

       //--- delete button click
      $ar_list.delegate(".lnDel","click",function(){
        var id = $(this).attr("data-ar_id");
        arDel(id);
      });


      //---- will trigger if title is blur
      ar_title.on("blur",function(){ 
        getAppend();
      });
      //---- ar_sum on blur will show the result
      ar_sum.on("blur",function(){
        showSumResult();
      });

      //--- save button click
      btnSave.on("click",function(){ 
        saveArticle();
      });

      //--- get_template
      $get_tmp.on("change",function(){
        let opt = $(this).find("option:selected");
        let id = opt.val();
        getTemplate(id); 
      });

    }
    return{getEvent:getEvent};
  })();
  ar.getEvent();
});

</script>


