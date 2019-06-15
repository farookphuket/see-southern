<section id="seo">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">SEO Managing..</h1>
            </div>
            
            <div class="col-lg-12">
                <div class="float-left">
                    <a class="btn btn-warning" href="<?php echo site_url("admin");?>">Back</a>
                </div>
                <div class="float-right">
                    <a class="btn btn-primary lnCreate">Create</a>
                </div>
            </div>
            <div class="col-lg-12">
                <h1 class="text-center">Seo List</h1>
                <div class="seo_list">
                    
                </div>
                <div class="seo_pagin"></div>
            </div>
        </div>

    </div>
    <div class="modal fade mdSeo">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title keyHead">Create New Key</h1>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <?php 
                        $f = "admin/seo/_frm_seo.php";
                        $this->load->view($f);
                ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btnSave" type="submit" form="frmSEO">Save</button>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    $(function(){
        var $el = $("#seo");
        var seo = (function(){
            var $keylist = $el.find(".seo_list");
            var $keypagin = $el.find(".seo_pagin");
            function getKeyList(page=1){
                var url = "<?php echo site_url("seo/modListKey/");?>"+page;
                $.ajax({
                    url : url,
                    success : function(e){
                        var rs = $.parseJSON(e);
                        $.each(rs.get_key,function(i,v){
                            var tmp = `
                            <div class="card">
                            <div class="card-header">
                                <h2>${v.kw_page_keyword}</h2>
                            </div>
                            <div class="card-body">
                            <p>${v.kw_page_des}</p>
                            <div class="table-responsive">
                            <table class="table table-bordered">
                            <tr>
                            <th>ID</th>
                            <td>
                                ${v.kw_id}
                            </td>
                            </tr>
                            <tr>
                            <th>Date</th>
                            <td>
                                ${v.kw_date_add}
                            </td>
                            </tr>
                            <tr>
                            <th>Url</th>
                            <td>
                                ${v.og_url}
                            </td>
                            </tr>
                            <tr>
                            <th>Create By</th>
                            <td>
                                ${v.article_publisher }
                            </td>
                            </tr>
                            </table>
                            </div>
                            <div class="card-footer">
                            <button class="btn btn-primary lnEdit" data-key_id="${v.kw_id}">Edit
                            </button>
                            </div>
                            </div>
                            </div>
                            <p>&nbsp;</p>
                            `;
                            $keylist.append(tmp);
                        });
                    }
                });
            }
            function getSummary(){
                getKeyList();
            }
            function getEvent(){
                getSummary();
            }
            return{getEvent:getEvent}
        })();
        seo.getEvent();
    });
</script>