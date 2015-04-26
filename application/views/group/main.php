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
           กลุ่มของบัณฑิต
            <small>Group</small>
        </h1>
	<!-- a href="<?=base_url(); ?>group/import/" class="btn btn-lg btn-info"><span class="glyphicon glyphicon-save"></span> Import Student</a>
	<br></br> -->
	<a href="<?=base_url(); ?>group/create/" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-plus"></span> Create Group</a>
    <br></br>
    <a href="<?=base_url(); ?>group/search/" class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-search"></span> Search Group</a>
    <table class="table table-striped table-hover" >
            <thead>
                <tr>
                    <th>รหัสกลุ่ม</th>
                    <th>ชือภาษาไทย</th>
                    <th>ชือภาษาอังกฤษ</th>
                    <th>หลักสูตร</th>
                    <th>ปริญญา</th>
                    <th></th>
                <tr>
            </thead>
            <tbody>
                <?php
                if(count($result)>0){
                    foreach ($result as $r){
                    $bu = base_url();
                    $group_id = $r["group_id"]  ;
                    $th_name = $r["th_group_name"] ;
                    $en_name = $r["en_group_name"] ;
                    if ($r['international'] =='1')
                    $international = 'International' ;
                    else 
                    $international = 'ปกติ' ;
                    $degree = $r['degree'] ;
                    echo "
                    <form >
                        <tr>
                            <td>".$group_id."</td>
                            <td>".$th_name."</td>
                            <td>".$en_name."</td>
                            <td>".$international."</td>
                            <td>".$degree."</td>
                            <td>";
                        
                        echo anchor("group/addStudent/".$group_id ,"เพิ่มบัณฑิต",array(
                        'name'=>'ImportButton', 'class'=>'btn btn-primary', 
                        )) ;
                        echo "</td>    
                        </tr> 
                    <form>";
                    } 
                }else{
                    echo "<tr><td colspan='5'>ไม่มีข้อมูล</td></tr>" ;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.row -->
</body>
</html>
