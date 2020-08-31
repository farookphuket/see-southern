<!-- business THEME 11-Apr-2020 -->
<?php
    $home = site_url();
    $blog = site_url("blog");
    $article = site_url("article");
    $login_url = site_url("login");
    $login_status = "Login";
    if($is_login):
        $login_status = "Logout";
        $home = site_url("users/u");
    endif;
?>
    <div class="container">
    <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"><?php echo $sysName; ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo $home; ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo $blog; ?>">Blog</a>
          </li>
          <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo $article; ?>">Article</a>
          </li>
          <li class="nav-item px-lg-4">
          <a class="nav-link text-uppercase text-expanded" href="<?php echo $login_url; ?>"><?php echo $login_status; ?></a>
          </li>
        </ul>
      </div>
    </div>

<script type="text/javascript">
        $(function(){
            $('#mainNav a').filter(function(){
                            return this.href==location.href
        }).parent().addClass('active').siblings().removeClass('active');

            $('.nav a').click(function(){
                                        $(this).parent().addClass('active').siblings().removeClass('active');
                                                                          
                                            
            });
                    
                
        });
                    </script>
