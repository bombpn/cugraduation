<!DOCTYPE html>
<html lang="th">
<head>
    <title>CU Graduation</title>
    <link href="<?=base_url();?>css/calendar.css" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function(){
          $(".cal-cell1").click(function(){
            $('.selected').removeClass("selected");
            $(this).addClass("selected");
            if($('.selected .date_content').text() !=''){
              console.log($('.selected .date_content').text());
              var month = "<?php echo $month; ?>";
              var day = $('.selected .date_content').text();
              var year = "<?php echo $year; ?>";
              console.log(day+"/"+month+"/"+year);
              window.location.replace('<?=base_url()?>schedule/showDate/'+year+"/"+month+"/"+day);
            }
          });
        });
    </script>
</head>

<body>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            ตารางการซ้อม
            <small>Schedule Manager</small>
        </h1>
      </div>

        <div class="col-md-6"><center>
            <a class="btn btn-info" href="<?=base_url();?>schedule">กำหนดการทั้งหมด</a>
            <a href ="<?=base_url();?>schedule/addSchedule"  class="btn btn-primary" >เพิ่มกำหนดการใหม่</a>
            <?php
                echo $calendars;
              ?>
            <hr>
        </center></div>
<!-- /.row -->
</body>
</html>
