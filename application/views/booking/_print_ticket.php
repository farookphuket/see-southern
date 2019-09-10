
<?php 
    $style = site_url("public/css/print.css");
?>
<link rel="stylesheet" href="<?php echo $style;?>" />

<?php 

foreach($get_booking as $row):

?>
<section id="print">
<div class="row">
    <div class="container">
        <h1>Dear customer <?php echo $row->bk_user_name;?> </h1>
        <p>
        please print out this page as your confirmed ticket.
        </p>
        <p>
        show to our staff when you are on the customer check point.
        </p>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>
                        Name / Email
                    </th>
                    <td>
                        <?php echo $row->bk_user_name." / ".$row->bk_user_email;?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Tour Name
                    </th>
                    <td>
                        <?php echo $row->tour_name;?>
                    </td>
                </tr>

                

                <tr>
                    <th>
                        Departure / วันเดินทาง
                    </th>
                    <td>
                        <?php echo $row->going_date;?>
                    </td>
                </tr>

                <tr>
                    <th>
                        Booking for
                    </th>
                    <td>
                        <?php echo $row->bk_num_people;?>&nbsp; pax(s).
                    </td>
                </tr>

                <tr>
                    <th>
                        Full Price / ราคาเต็ม
                    </th>
                    <td>
                        <?php echo $row->pay_full_price;?>&nbsp; THAI BATH.
                    </td>
                </tr>


                <tr>
                    <th>
                        Pay as / ประเภทการจ่าย
                    </th>
                    <td>
                        <?php echo $row->user_pay_as;?>
                    </td>
                </tr>
                <tr>
                    <th>
                        Out standing / ต้องเก็บเงินเพิ่ม
                    </th>
                    <td>
                        <?php echo $row->must_collect_more;?>&nbsp; THAI BATH. &nbsp;<span class="alert alert-warning">
                        Will be collect on tour.
                        </span>
                    </td>
                </tr>


                <tr>
                    <th>
                        Confirm by
                    </th>
                    <td>
                        <?php echo $row->conf_name;?>.
                    </td>
                </tr>
            </table>
        </div>
    </div>

    </div>
</section>

<?php
endforeach;
?>
