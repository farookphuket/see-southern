

<script>
    function scroll (go,place) {
   
        var el = document.getElementById(place);
        //if (el) el.scrollIntoView({behavior: 'smooth', block: 'start'})
        var url = "<?php echo site_url("/index.php/#");?>"+go;
        el.scrollIntoView(url);

    }
</script>
