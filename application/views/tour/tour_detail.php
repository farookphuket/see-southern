<?php 

foreach($get as $row):
    ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
                <div class="container">
                    <div class="float-right">
                        <a href="#" class="btn btn-danger close">Close</a>
                    </div>
                    <h1 class="section-heading text-center">
                        <?php echo $row->t_name;?>
                    </h1>
                    <hr class="my-4" />
                    <br />
                    <p class="text-body">
                    <?php echo $row->t_summary;?>
                    </p>
                </div>
        </div>
        
        
        <h1>&nbsp;</h1>
        <div class="col-lg-12">
            <div class="container">
                <?php echo $row->t_program;?>
            </div>
            <div class="float-right">
                <a href="#" class="btn btn-danger btn-sm close">Close this window</a>
            </div>
        </div>
        <script>
            $(function(){
                var $el = $(".container");
                var cls = $el.find(".close");
                cls.on("click",function(){
                    var msg = "Do you want to close this window?";
                    if(confirm(msg) === true){
                        window.close();
                    }else{
                        return false;
                    }
                });
            });
        </script>
    </div>
    <hr class="my-4" />
    <!--call the booking form--> 
    <div class="row">
        <h1>&nbsp;</h1>
        <br />
        <div class="col-md-12">
        <?php
            $this->load->view("booking/book_index.php");
        ?>
        </div>
    </div>
    


    <!--comment and pay module call by ajax-->
    <?php 
        $this->load->view("payment_method/pay_index.php");

        $this->load->view("comment/comment_index.php");
    ?>
    <!--end of comment module-->

</div>

<?php
        endforeach;




