<!DOCTYPE html>
<html lang="th">
<head>
    <title>CU Graduation</title>
    <!-- <link href="<?=base_url();?>css/calendar.css" rel="stylesheet"> -->
</head>

<body>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
			เพิ่มกลุ่ม
            <small>Import Group</small>
        </h1>


<legend>เพิ่มกลุ่มด้วย.CSV</legend>
<fieldset> 
<div class="form-group form-horizontal">
  <label class="col-md-4 control-label" for="ImportFiel">ไฟล์ .csv</label>
  <div class="col-md-4">
        <form  class="form-horizontal" action="<?=base_url();?>group/uploadCSV" method="POST" enctype="multipart/form-data" >
            <input type="file" name="userfile" class="input-file" multiple="multiple"  />
            <input type="submit" id="ImportInput" name="ImportInput" value="อัพโหลด" class="btn btn-success" />
        </form>
    </div>
</div>

<form class="form-horizontal" action="<?=base_url();?>student/import" method="POST">
<fieldset> 

<!-- Form Name -->
<legend>เพิ่มข้อมูลกลุ่ม</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="IDInput">ID</label>  
  <div class="col-md-2">
  <label class=" control-label" for="IDInput"><?php echo ; ?></label>  
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="THPrefixInput">คำนำหน้าชื่อ  (ไทย) </label>
  <div class="col-md-1">
    <select id="THPrefixInput" name="THPrefixInput" class="form-control">
      <option value="นาย">นาย</option>
      <option value="นาง">นาง</option>
      <option value="นางสาว">นางสาว</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THNameInput">ชื่อ (ไทย)</label>  
  <div class="col-md-4">
  <input id="THNameInput" name="THFirstnameInput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THLastnameInput">นามสกุล (ไทย)</label>  
  <div class="col-md-4">
  <input id="THLastnameInput" name="THLastnameInput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="THPrefixInput">คำนำหน้าชื่อ (อังกฤษ) </label>
  <div class="col-md-1">
    <select id="ENPrefixInput" name="ENPrefixInput" class="form-control">
      <option value="Mr.">Mr.</option>
      <option value="Mrs.">Mrs.</option>
      <option value="Miss">Miss</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THNameInput">ชื่อ (อังกฤษ)</label>  
  <div class="col-md-4">
  <input id="THNameInput" name="ENFirstnameInput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="THLastnameInput">นามสกุล (อังกฤษ)</label>  
  <div class="col-md-4">
  <input id="THLastnameInput" name="ENLastnameInput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="OrderInput">ลำดับ</label>  
  <div class="col-md-1">
  <input id="OrderInput" name="OrderInput" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="FacultyInput">คณะ</label>
  <div class="col-md-3">
    <select id="FacultyInput" name="FacultyInput" class="form-control">
      <option value="1">คณะวิศวกรรมศาสตร์</option>
      <option value="2">คณะจิตวิทยา</option>
      <option value="3">คณะวิทยาศาสตร์</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="DegreeInput">ปริญญา</label>
  <div class="col-md-2">
    <select id="DegreeInput" name="DegreeInput" class="form-control">
      <option value="1">ปริญญาตรี</option>
      <option value="2">ปริญญาโท</option>
      <option value="3">ปริญญาเอก</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="GroupInput">กลุ่ม</label>
  <div class="col-md-2">
    <select id="GroupInput" name="GroupInput" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="HonorInput">เกียรตินิยม</label>
  <div class="col-md-1">
    <select id="HonorInput" name="HonorInput" class="form-control">
      <option value="1">อันดับ 1</option>
      <option value="2">อันดับ 2</option>
      <option value="0">-</option>
    </select>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="PicPathInput">ตำแหน่งที่เก็บรูป</label>
  <div class="col-md-4">
    <input id="PicPathInput" name="PicPathInput" class="input-file" type="file">
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SaveButton"></label>
  <div class="col-md-8">
    <input type="submit" id="SaveButton" name="SaveButton" class="btn btn-info" value="เก็บ"></button>
    <input type="reset" id="ResetButton" name="ResetButton" class="btn btn-danger" value="ล้าง"></button>
  </div> 
</div>
</fieldset>
</form>

</div>
<!-- /.row -->
</body>
</html>
