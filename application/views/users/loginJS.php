<script>


    $(function(){
        var $el = $("#member");
        var $page_status = $(".status");

        var Login = (function(){
            var $f = $el.find("#loginForm");
            var user = $el.find("#user_name");
            var pass = $el.find("#user_pass");
            var btnLogin = $el.find("#btnLogin");
            var fResult = $el.find(".loginRes");
            function chkUser(){
                var name = user.val();
                //alert(`name is ${name}`);
            }


            //-------------
            //------getLogin
            function getLogin(){
                btnLogin.unbind();
                $f.submit(function(e){
                    e.preventDefault();
                    var url = $(this).attr("action");
                    var data = $(this).serialize();
                    $.post(url,data,function(o){
                        var rs = $.parseJSON(o);
                        var rd_url = rs.url;
                        if(parseInt(rs.error) !== 0){
                            alert(rs.msg);
                            $f.trigger("reset");
                            user.focus();
                        }else{
                            $page_status.html(rs.msg).show();
                            setTimeout(function(){
                                $page_status.html("Loading...").fadeOut("slow");
                                location.href = rd_url; 
                            },2000);
                        }
                        
                    });
                });
            }


            //----------
            function getEvent(){
                user.on("blur",function(){
                    chkUser();
                });

                //---submit button
                btnLogin.on("click",function(){
                    getLogin();
                });
            }
            return{getEvent : getEvent}
        })();
        Login.getEvent();
    });
</script>