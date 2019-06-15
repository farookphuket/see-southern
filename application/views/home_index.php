<section id="tour">
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-lg-12 text-center">
              <h2 class="section-heading">Our tour program
              <span class="badge badge-secondary num_tour">0</span> item(s).
              </h2>
              <hr class="my-4">
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!--dynamic content-->
              <div class="tour_list">
                
                </div>
                <div class="tour_pagin">
                
                </div>
              
            <!--end of dynamic content-->

          </div>

        </div>
      </div>
</section>

<section id="article">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Recently Post
              <span class="badge badge-secondary num_post">0</span> item(s).
              </h2>
              <div class="text-center">
                <a class="btn btn-primary" href=" <?php echo site_url("article");?>">See All Post</a>
              </div>
              <hr class="my-4">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-12 ">
                
                <!--dynamic content start-->
                <div class="show-list">
                  <ul class="post_recent">
                  
                  </ul>

                </div>
                
                <div class="post_pagin">
                
                </div>   
                <!--dynamic content end-->

            </div>
          </div>
        </div>
      </section>
      
      <!--member zone login form-->
      <section  id="member">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div id="visiter" class="text-center">
                
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
              <h2 class="text-center ">Member Login</h2>
              
              
              
              <hr class="my-4" />
              
              <form class="form-horizontal" id="loginForm" action="<?php echo site_url("login/getLogin");?>">
                <div class="form-group">
                  <label class="label-control col-sm-4">User Name</label>
                  <div class="col-sm-6">
                    <input type="text" id="user_name" name="user_name" class="form-control user_name" required>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="label-control col-sm-4">Password</label>
                  <div class="col-sm-6">
                    <input type="password" name="user_pass" class="form-control user_pass" id="user_pass" required>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="label-control col-sm-4">&nbsp;</label>
                  <div class="col-sm-6">
                    
                    <span>
                    <button class="btn btn-sm btn-primary btnLogin" id="btnLogin" form="loginForm" type="submit">Login</button>
                    </span>
                    
                    <hr class="my-4"/>
                    <button class="btn btn-sm btn-warning lnForgot" type="button">Forgot Password</button>
                    
                    
 
                    <hr class="my-4"/>
                    <a class="btn btn-sm btn-primary lnRegister" href="<?php echo site_url("register");?>">Register</a>
                  </div>  
                </div>
              </form>
              
              
              
            </div>

            <!--show result--> 
            <div class="col-lg-8 loginRes">
              
            </div>
            <?php 
              $loginJS = "users/loginJS.php";
              $this->load->view($loginJS);
            ?>
          </div>
        </div>

        

      </section>
      <!--end of member 
      //--event handler by homeJS.php
      -->
  <?php 
      $f_visiter = "visiter/visiterJS.php";
      $this->load->view($f_visiter);
  ?>
  
      
      
      
      











<?php 
        require("homeJS.php");