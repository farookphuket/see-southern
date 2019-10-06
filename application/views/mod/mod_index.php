<section id="newNotification">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="alert alert-warning">
                    <h1 class="text-center newPost">0</h1>
                </div>
                <p class="text-center">new post</p>
            </div>
            <div class="col-lg-4">
                <div class="alert alert-warning">
                    <h1 class="text-center">1</h1>
                </div>
                <p class="text-center newArticle">new article</p>
            </div>
            <div class="col-lg-4">
                <div class="alert alert-warning">
                    <h1 class="text-center newUser">0</h1>
                </div>
                <p class="text-center">All users</p>
            </div>


            <div class="line">
                
            </div>

        </div>
    </div>
</section>
<script charset="utf-8">
$(function(){
    const $NOTE = $("#newNotification");

    const note = (function(){

        let $post = getEl(".newPost");
        let $user = getEl(".newUser");
        let newPost,newArticle,newUser = 0;


        function getUser(){
            let url = "<?php echo site_url("users/modList/"); ?>";
            $.ajax({
                url : url,
                    success : (e)=>{
                    //console.log(e);
                    let rs = $.parseJSON(e);
                    $newUser = rs.num;
                    $user.html($newUser);
            }
            });
        }

        function getSummary(){
           getUser(); 
        }
        function getEl(el){
            return $NOTE.find(el);
        }
        function getEvent(){
            getSummary();
        }
        return{getEvent:getEvent}
    })();
    note.getEvent();
}); 
</script>


<!-- Share status Start -->
<section id="share_status">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">what's going on</h1>
                <p class="text-center">date : <?php echo $today; ?></p>
                <p>&nbsp;</p>
            </div>
            <div class="col-lg-12">
               <textarea class="form-control lnWhatNew" rows="6"></textarea> 
                <p class="">&nbsp;</p>
            </div>
            <div class="col-lg-12">
                <p>&nbsp;</p>
                <div class="st_list">
                    
                </div>
                <div class="st_pagin">
                    
                </div>
            </div>

        </div>
        <p>&nbsp;</p>
        <div class="line">
            
        </div>
    </div>

    <!-- form modal start -->
    <div class="modal fade md">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Title</h1>
                </div>
                <div class="modal-body">
<?php 
$frm = "mod/share_status/_form_status";
$this->load->view($frm);
        
?> 
                <div class="modal_status">
                    
                </div>
                </div>
                <div class="modal-footer">
                   <button class="btn btn-primary btnSave" form="frmStatus" type="submit">Save</button> 
                </div>
            </div>
        </div>
    </div>
    <!-- end modal form -->
</section>
<script>
$(function(){
    
    var $ST = $("#share_status");
    var $page_status = $(".status");

    var st = (function(){

        var lnWhatNew = getEl(".lnWhatNew");
        var st_list = getEl(".st_list");
        var st_pagin = getEl(".st_pagin");

        //---the modal
        var $md = getEl(".md");
        var $mdTitle = getEl(".modal-title");
        var $modal_status = getEl(".modal_status");
        var btnSave = getEl(".btnSave");


        //-- the form
        var $frm = getEl("#frmStatus");
        var st_id = getEl(".st_id");
        var st_user_id = getEl(".st_user_id");
        var st_title = getEl(".st_title");
        var st_body = getEl(".st_body");

        var uniq_id = getEl(".uniq_id");
        var u_name = "<?php echo $user_name; ?>";
        //-- checkbox
        let show = getEl(".pub");
        let friend_only = getEl(".friend_only");
        let private_only = getEl(".private_only");

        function getList(page=1){
            st_list.html("");
            var url = "<?php echo site_url("ustd/modGet/"); ?>"+page;
            $.ajax({
            url : url,
                success : function(e){
                   // console.log(e);
                    var rs = $.parseJSON(e);
                    if(rs.get_st.length){
                        if(rs.pagination){
                            st_pagin.html(rs.pagination);
                        } 
                        $page_status.html("showing page...").show();
                        $.each(rs.get_st,(i,v)=>{
                        let tmp = `<div class="container">
                            
                            ${v.st_body}
                            <div class="float-right">
                            <a class="btn btn-primary lnEdit" data-st_id="${v.st_id}" style="font-weight:bold;color:white;">Edit</a>
                            <a class="btn btn-danger lnDel" data-st_id="${v.st_id}" style="font-weight:bold;color:white;">Delete</a>
                     
                            </div>
                            <p>&nbsp;</p>
                            </div>
                            `;
                            st_list.append(tmp);
                        });


                    }else{
                        $page_status.html("NO DATA").show();
                    }
                    setTimeout(()=>{$page_status.html("loading...").fadeOut("slow");},400);
                }
            });
        }

        function showForm(cmd,id){
            $frm.trigger("reset");

            tinymce.get('st_body').setContent("");
            switch(cmd){

            case"edit":
                var url = "<?php echo site_url("ustd/modEdit/"); ?>"+id;
                $.ajax({
                url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        console.log(rs);
                        $.each(rs.get,function(i,v){
                       
                            if(parseInt(v.show_public) !== 0){
                                show.prop("checked",true);
                            }
                            if(parseInt(v.private_only) !== 0){
                                private_only.prop("checked",true);
                            }
                             if(parseInt(v.friend_only) !== 0){
                                friend_only.prop("checked",true);
                            }

                            st_title.val(v.st_title);
                           tinymce.activeEditor.setContent(v.st_body); 
                           st_id.val(v.st_id);
                           st_user_id.val(v.st_user_id);
                           uniq_id.val(v.uniq_id);
                        });
                    }
                });
            break;
            default:

                $mdTitle.html("What is going on?");
                //tinymce.get('st_body').setContent("this is the content");
                st_id.val(0);
                setTemplate();
            break;
            }
            $($md).modal("show");
        }

        function setTemplate(){
            //-- only if no id set
            if(parseInt(st_id.val()) === 0){
                var today = new Date().toLocaleString();
                var title = `${u_name}'s event on ${today}`;

                var tiny = `<div class="tm-timeline-item">
                    <div class="tm-timeline-item-inner"><img class="tm-img-timeline rounded-circle responsive" src="" />
                    <div class="tm-timeline-connector">
                    <p class="mb-0">&nbsp;</p>
                    </div>
                    <div class="tm-timeline-description-wrap">
                    <div class="tm-bg-dark tm-timeline-description">
                    <h3 class="tm-text-green tm-font-400">Love super car</h3>
                    <p>the content in here should be not too long in length<br />I love super car</p>
                    <p class="tm-text-green float-left mb-0">new event tee2018 on 10/3/2019, 9:30:11 AM</p>
                    <div class="float-right"><a class="btn btn-primary" style="font-weight;color: white;" href="#" target="_blank" rel="noopener">Read More</a></div>
                    </div>
                    </div>
                    </div>
                    <div class="tm-timeline-connector-vertical">&nbsp;</div>
                    </div>

`;

                st_title.val(title);
                tinymce.get('st_body').setContent(tiny); 
            }
        }

        function stSave(){
            btnSave.unbind();
            $frm.submit(function(e){
                e.preventDefault();
                var url = $(this).attr("action");
                var data = $(this).serialize();
                $.post(url,data,function(e){
                    var rs = $.parseJSON(e);
                    $modal_status.html(rs.msg).show();
                    setTimeout(()=>{
                    $modal_status.html("loading...").fadeOut("slow");
                    showForm("edit",rs.st_id);
                    getSummary();
                    },400);

                });
            });
        }

        function stDel(id){
            var url = "<?php echo site_url("ustd/modDel/"); ?>"+id;
            $.ajax({
            url : url,
                success : function(e){
                    var rs = $.parseJSON(e);
                    $page_status.html(rs.msg).show();
                    setTimeout(()=>{
                        $page_status.html("loadin...").fadeOut("slow");
                        getSummary();
                    },900);
                }
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
            lnWhatNew.on("click",function(){
                showForm();
            });


            //--save button
            btnSave.on("click",function(){
                stSave();
            });

            //---edit button
            st_list.delegate(".lnEdit","click",function(){
                var id = $(this).attr("data-st_id");
                showForm("edit",id);
            });

            //---delete button
            st_list.delegate(".lnDel","click",function(){
                var id = $(this).attr("data-st_id");
                stDel(id);
            });

            //--- pagination
            st_pagin.delegate("a","click",function(e){
                e.preventDefault();
                let page = $(this).attr("data-ci-pagination-page");
                //alert(page);
                getList(page);
            });

        }
        return{getEvent:getEvent}
    })();
    st.getEvent();
});
</script>

<!-- End of status content  -->



            <h2>หน้าหลัก Moderate</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center">My content 1</h1>
            <p>&nbsp;</p>
        </div>
    </div>
</div>

<div class="line">
    
</div>
<section class="">
    <div class=container"">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">div in section</h1>
            </div>
        </div>
    </div>
</section>
<div class="line">
    
</div>
            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h2>Lorem Ipsum Dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <div class="line"></div>

            <h3>Lorem Ipsum Dolor</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



