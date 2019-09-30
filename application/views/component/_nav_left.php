<!-- Last edit 30 sep 2019 -->


 <nav id="sidebar">
            <div class="sidebar-header">
                <h3>
<?php echo $user_name; ?>
                </h3>
            </div>

            <ul class="list-unstyled components">
                <p>
<?php 
    $text = "";
    if($is_login):
        if($is_admin):
            $text = "Admin";
            elseif($moderate):
                $text = "Moderate";
            else:
            $text = "Member";
        endif;
    else:
        $text = "No login";
    endif;
    echo $text;
?>
                </p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Home 1</a>
                        </li>
                        <li>
                            <a href="#">Home 2</a>
                        </li>
                        <li>
                            <a href="#">Home 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Portfolio</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>


                <li>
                    <a href="" class="article">article</a>
                </li>
            </ul>
        </nav>


