<script>

$(function(){
    var $el = $("#visiter");
    var Visiter = (function(){

        var ip = "<?php echo $ip;?>";
        var tmp = `<h2 class="bg-success">IP is ${ip}</h2>`;
        function getEvent(){
            $el.append(tmp);
        }
        return{getEvent : getEvent}
    })();
    Visiter.getEvent();

});




</script>