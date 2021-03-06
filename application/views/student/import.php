<!DOCTYPE html>
<html lang="th">
<head>
    <title>CU Graduation</title>
    <!-- <link href="<?=base_url();?>css/calendar.css" rel="stylesheet"> -->
    <script>
        $( "#document" ).ready(function() {
            event.preventDefault();
              var g = $("#GroupInput").val() ;
              var formData = { opt : "group_change_on_import" , group_id : g  };
              //BRING AJAX REQUEST ON!
              $.ajax({
                    type: "POST",
                    url: '<?php echo base_url();?>student/update_form/>',
                    dataType: 'json',
                    data: formData,
                    success: function(res){
                      $("#OrderInput").attr("readonly", false);
                      $('#OrderInput').val(res.order);
                      $("#OrderInput").attr("readonly", true);

                      $("#DegreeInput").attr("readonly", false);
                      $('#DegreeInput').val(res.degree);
                      $("#DegreeInput").attr("readonly", true); 
                      //alert(res.message);
                      //window.location.href = res.redirect;
                      // $('#123 td:nth-child(2)').html('<i class="fa fa-pencil"></i>');
                    }
                });
        });
        function changeENPrefixValue(){
          console.log('TH change');
          var tp = $("#THPrefixInput").val() ;
          if(tp =='นาย') $("#ENPrefixInput").val('Mr.') ;
          else if (tp =='นาง') $("#ENPrefixInput").val('Mrs.') ;
          else if (tp =='นางสาว') $("#ENPrefixInput").val('Miss') ;
            
        }
        function changeTHPrefixValue(){
          console.log('EN change');
          var ep = $("#ENPrefixInput").val() ;
          if(ep =='Mr.') $("#THPrefixInput").val('นาย') ;
          else if (ep =='Mrs.') $("#THPrefixInput").val('นาง') ;
          else if (ep =='Miss') $("#THPrefixInput").val('นางสาว') ;
            
        }
        function reloadLastOrder(){
              //PREPARE FORM DATA
              event.preventDefault();
              var g = $("#GroupInput").val() ;
              var formData = { opt : "group_change_on_import" , group_id : g  };
              //BRING AJAX REQUEST ON!
              $.ajax({
                    type: "POST",
                    url: '<?php echo base_url();?>student/update_form/>',
                    dataType: 'json',
                    data: formData,
                    success: function(res){
                      $("#OrderInput").attr("readonly", false);
                      $('#OrderInput').val(res.order);
                      $("#OrderInput").attr("readonly", true);

                      $("#DegreeInput").attr("readonly", false);
                      $('#DegreeInput').val(res.degree);
                      $("#DegreeInput").attr("readonly", true); 
                      //alert(res.message);
                      //window.location.href = res.redirect;
                      // $('#123 td:nth-child(2)').html('<i class="fa fa-pencil"></i>');
                    }
                });
            }
    </script>
</head>

<body>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
			เพิ่มรายชื่อ
            <small>Import Graduate</small>
        </h1>

<form class="form-horizontal" action="<?=base_url();?>student/import" method="POST">
<fieldset>

<!-- Form Name -->
<legend>เพิ่มข้อมูลบัณฑิต</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IDInput">ID</label>  
  <div class="col-md-2">
  <input id="IDInput" name="IDInput" type="text" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="THPrefixInput">คำนำหน้าชื่อ </label>
  <div class="col-md-2">
    <input id="THPrefixInput" name="THPrefixInput" type="text" class="form-control input_md" required="true"></input>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THNameInput">ชื่อ</label>  
  <div class="col-md-4">
  <input id="THNameInput" name="THFirstnameInput" type="text" placeholder="" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THLastnameInput">นามสกุล</label>  
  <div class="col-md-4">
  <input id="THLastnameInput" name="THLastnameInput" type="text" placeholder="" class="form-control input-md" required="true">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="THPrefixInput">Prefix</label>
  <div class="col-md-2">
    <input id="ENPrefixInput" name="ENPrefixInput" type="text" class="form-control input_md" required="true"></input>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THNameInput">Firstname</label>  
  <div class="col-md-4">
  <input id="THNameInput" name="ENFirstnameInput" type="text" placeholder="" class="form-control input-md" required="true">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THLastnameInput">Lastname</label>  
  <div class="col-md-4">
  <input id="THLastnameInput" name="ENLastnameInput" type="text" placeholder="" class="form-control input-md" required="true">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="GenderInput" required="true">เพศ</label>
  <div class="col-md-2">
    <select id="GenderInput" name="GenderInput" class="form-control">
      <option value="M" >ชาย</option>
      <option value="F" >หญิง</option>
    </select>
  </div>
</div> 
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="BarcodeInput">บาร์โค้ด</label>  
  <div class="col-md-2">
  <input id="BarcodeInput" name="BarcodeInput" type="text" placeholder="" class="form-control input-md" required="true">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="OrderInput">ลำดับ</label>  
  <div class="col-md-1">
  <input id="OrderInput" name="OrderInput" type="text" placeholder="" class="form-control input-md" readonly="true">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="FacultyInput">คณะ</label>
  <div class="col-md-3">
    <select id="FacultyInput" name="FacultyInput" class="form-control" required="true">
      <?php 
        foreach ($facultyList as $fl){
          $fid =  $fl['faculty_id'] ; 
          $ftname = $fl['th_faculty_name'] ;
          $fename = $fl['en_faculty_name'] ;
          echo "<option value='$fid'>$ftname $fename</option> "; 
        }
      ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="DegreeInput">ปริญญา</label>
  <div class="col-md-2">
    <input id="DegreeInput" name="DegreeInput" type="text" placeholder="" class="form-control input-md" readonly="true">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="GroupInput">กลุ่ม</label>
  <div class="col-md-3">
    <select id="GroupInput" name="GroupInput" class="form-control" onchange="reloadLastOrder()" required="true" >
      <?php 
        foreach ($groupList as $gl){
          $gid =  $gl['group_id'] ; 
          $gtname = $gl['th_group_name'] ;
          $gename = $gl['en_group_name'] ;
          echo "<option value='$gid'>$gtname $gename</option> "; 
        }
      ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="HonorInput">เกียรตินิยม</label>
  <div class="col-md-2">
    <select id="HonorInput" name="HonorInput" class="form-control" required="true">
      <option value="0">-</option>
      <option value="1">อันดับ 1</option>
      <option value="2">อันดับ 2</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="SaveButton"></label>
  <div class="col-md-8">
    <input type="submit" id="SaveButton" name="SaveButton" class="btn btn-info " value="เก็บ"></button>
    <input type="reset" id="ResetButton" name="ResetButton" class="btn btn-danger" value="ล้าง"></button>
  </div> 
</div>
</fieldset>
</form>

</div>
<!-- /.row -->
</body>
</html>