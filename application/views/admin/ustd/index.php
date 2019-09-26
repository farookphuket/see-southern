<section id="ustd">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="text-center">Admin manage user status </h1>
      </div>

      <div class="col-lg-3">
        <div class="alert alert-success">
          <h1>0</h1>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="alert alert-warning">
          <h1>0</h1>
        </div>
      </div>
       <div class="col-lg-3">
        <div class="alert alert-danger">
          <h1>0</h1>
        </div>
        <p class="text-right">Private</p>
      </div>

      <div class="col-lg-12">
        <p>&nbsp;</p>
      </div>

      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h1 class="text-center">Share your status</h1>
          </div>
          <div class="card-body">
        
          <textarea class="form-control lnShowForm" rows="6"></textarea>
         </div>
          <div class="card-footer">
            
          </div>
        </div>
        <p>&nbsp;</p>
      </div>


    <div class="col-lg-12">
      <p>&nbsp;</p>
      <div class="frmPreview"></div>
      <div class="st_list"></div>
      <div class="st_pagin"></div>
    </div>


<!-- end of page container -->
    <p>&nbsp;</p>
    </div>

  </div>

<!-- Modal form -->
<div class="modal fade md">
  <div class="modal-dialog modal-lg">
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h1 class="modal-title"> Title </h1>
        <button class="close" data-dismiss="modal">&times;</button>
      </div>      
      <div class="modal-body">
        <?php 
            $frm = "admin/ustd/_form_msg_status";
            $this->load->view($frm);
  
        ?>          
        <div class="modal_status"></div>
     </div>
      <div class="modal-footer">
        <div class="float-right">
          <button class="btn btn-primary btnSave" type="submit" form="usr_status">
            Save
          </button>
        </div>
      </div>
    </div>
  </div>


</div>
<!-- End of modal form -->



</section>

<script>

$(function(){ 

  var $ST = $("#ustd");
  var st = (function(){ 


    var $fPreview = getEl(".frmPreview");
    var $st_list = getEl(".st_list");
    var $st_pagin = getEl(".st_pagin");

    var lnShowForm = getEl(".lnShowForm");

    var $md = getEl(".md");
    var $mdTitle = getEl(".modal-title");
    var $modal_status = getEl(".modal_status");

    //-- the form
    var $frm = getEl("#usr_status");
    var st_id = getEl(".st_id");
    var uniq_id = getEl(".uniq_id");
    var st_user_id = getEl(".st_user_id");
    var usr_name = "<?php echo $user_name; ?>";
    var img_url = getEl(".img_url");
    var st_body = getEl(".st_body");
    var show_pub = getEl(".show_pub");
    var private_only = getEl(".private_only");
    var friend_only = getEl(".friend_only");
    var btnSave = getEl(".btnSave");


    function getList(page=1){
      $st_list.html("");
      var url = "<?php echo site_url("ustd/adminGet/") ?>"+page;
      $.ajax({ 
      url :url,
        success : function(e){
          var rs = $.parseJSON(e);
          $.each(rs.get_st,function(i,v){ 
            var tmp = `
              <div class="card">
                <div class="card-header">
                  <h1>${ v.st_title }</h1>
                  </div>
                  <div class="card-body"> ${ v.st_body } </div>
                  <div class="card-footer"> 
                    <div class="float-right"> 
                      <a class="btn btn-primary lnEdit" data-st_id="${ v.st_id }"> edit </a>
                      <a class="btn btn-danger lnDel" data-st_id="${ v.st_id }"> Delete </a>

                    </div>
                  </div>
              </div>
<p>&nbsp;</p>`;
            $st_list.append(tmp);

          });

        }
      });
    }

    function getTmp(){

      if(parseInt(st_id.val()) === 0){  
      var img = img_url.val();
      var today = new Date().toLocaleString();
      var tmp = `<div class="tm-timeline-item">
          <div class="tm-timeline-item-inner">

            <img src="${img}" alt="Image" class="rounded-circle tm-img-timeline">

                            <div class="tm-timeline-connector">

                                <p class="mb-0">&nbsp;</p>

                            </div>

                            <div class="tm-timeline-description-wrap">

              <div class="tm-bg-dark tm-timeline-description">

                  <h3 class="tm-text-orange tm-font-400">Test h3</h3>

                  <p>Place here content</p>

                  <p class="tm-text-orange float-left mb-0">
                  ${ usr_name } on ${ today }
                  </p>
                  <div class="float-right">
                  <a style="color:white;font-weight:bold;" class="btn btn-primary" href="" target="_blank">Read More</a>
                  </div>

                                </div>
                            </div>
                        </div>
                    </div>
<p>&nbsp;</p>


`;

        st_body.val(tmp);
      }else{
        //alert(`The edit id ${st_id.val()}`);
        //do nothing
      }


    }


    function showForm(cmd,id){

      $frm.trigger("reset");
      switch(cmd){
      case"edit":
          //alert(`will edit ${ id }`);
          var url = "<?php echo site_url("ustd/adminEdit/"); ?>"+id;
          $.ajax({ 
          url : url,
            success : function(e){
              //alert(e);
              var rs = $.parseJSON(e);
              $.each(rs.get_st,function(i,v){ 
                $mdTitle.html(`Editing ${v.st_title}`);
                img_url.val(v.img_url);
                st_user_id.val(v.st_user_id);
                st_id.val(v.st_id);
                uniq_id.val(v.uniq_id);
                st_body.val(v.st_body);
                //--- the checkbox
                if(parseInt(v.show_public) !== 0){
                  show_pub.prop("checked",true);
                }

                if(parseInt(v.friend_only) !== 0){
                  friend_only.prop("checked",true);
                }

                if(parseInt(v.private_only) !== 0){
                  private_only.prop("checked",true);
                }


              });
            }
          });
        break;
        default:
          
          img_url.val("https://images.livemint.com/img/2019/04/16/600x338/Kerala_1555430371601.jpg");
         $mdTitle.html(`Share your status`);
          st_id.val(0);
          //getTmp();
        break;
      }

      $($md).modal("show");
    }


    function stSave(){
      btnSave.unbind();

      $frm.submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr("action");
        $.post(url,data,function(e){ 
          var rs = $.parseJSON(e);
          var msg = `<div class="alert alert-success">
            <h2>${rs.msg}</h2>  
            </div>`;
          $modal_status.html(msg); 
          setTimeout(function(){ 
            $modal_status.html("");
            showForm("edit",rs.st_id);
          },4000);
        });

      });
    }

    function getSummary(){
      getList();
    }
    function getEl(el){
      return $ST.find(el);
    }
    function getEvent(){
      getSummary();
      lnShowForm.on("click",function(){ 
        showForm();
      });
      //--- admin edit the status
      $st_list.delegate(".lnEdit","click",function(){ 
        var id = $(this).attr("data-st_id");
        showForm("edit",id);
      });

      //--- img_url
      img_url.on("blur",function(){ 
        getTmp();
      });

      //--- btnSave
      btnSave.on("click",function(){ 
        stSave();
      });

    }
    return{ getEvent:getEvent }
  })();
  st.getEvent();
});

</script>


