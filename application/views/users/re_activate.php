<section id="re_activate">
    <div class="container tm-container-2">
        <div class="row">
            <div class="col-lg-12">
<?php
    echo"<div style='text-align:center;'>{$msg}</div>";
?>
            </div>
        </div>
    </div>
</section>
<script charset="utf-8">
    $(()=>{
        const url = "<?php echo $url; ?>";
        const $page_status = $(".status");

        //alert(`the url is ${url}`);
        setTimeout(()=>{
        location.href = url;
        },4000);
    });
</script>
