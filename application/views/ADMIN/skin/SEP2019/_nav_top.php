<!-- last edit 30 sep 2019 -->


<?php

    $home = "";
    $page = site_url("page");

    $tmp = site_url("tmp");
    $cat = site_url("category");
    if($is_login):
        if($moderate != 0):
            $home = site_url("moderate");
            $page = site_url("page/mod");
        elseif($is_admin != 0):
            
            $home = site_url("admin");
            
        else:
                    
            $home = site_url("users/u");
        endif;
    else:
        $home = site_url();
    endif;
    //echo"your moderate is {$moderate}";
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                            <a class="nav-link" href="<?php echo $home; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo $tmp; ?>">Template</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="<?php echo $cat; ?>">Category</a>
                            </li>
                            <li class="nav-item">
<?php 
    if(!$is_login):
?>
        <a class="nav-link" href="<?php echo site_url("home/#member"); ?>">Login</a>

<?php
    else:
?>
    <a class="nav-link" href="<?php echo site_url("users/logout"); ?>">Logout</a>
<?php endif; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



