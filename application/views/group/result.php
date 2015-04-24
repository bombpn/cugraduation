<!DOCTYPE html>
<html lang="th">

<head>

    <title>CU Graduation</title>

</head>

<body>
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            ผลลัพธ์การค้นหา <small>Result</small>
        </h1>
        <table class="table">
            <thead>
                <tr>
                    <th>รหัสกลุ่ม</th>
                    <th>ชือภาษาไทย</th>
                    <th>ชือภาษาอังกฤษ</th>
                    <th>International</th>
                    <th>ปริญญา</th>
                    <th>แก้ไข</th>
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
                    $international = $r['international'] ;
                    $degree = $r['degree'] ;
                    echo "
                    <form action='".$bu."student/edit' method='POST'>
                        <tr>
                            <td>".$group_id."</td>
                            <td>".$th_name."</td>
                            <td>".$en_name."</td>
                            <td>".$international."</td>
                            <td>".$degree."</td>
                            <td>";
                        echo anchor("student/edit/".$group_id ,"แก้ไข",array(
                        'name'=>'EditButton', 'class'=>'btn btn-info', 
                        )) ;
                        echo "&nbsp" ;
                        echo anchor("student//".$group_id ,"เพิ่มบัณฑิต",array(
                        'name'=>'ImportButton', 'class'=>'btn btn-primary', 
                        )) ;
                        echo "&nbsp" ;
                        echo anchor("student/del/".$group_id , "ลบ" ,array(
                        "onclick" => "javascript:return confirm('คุณต้องการลบหรือไม่? $group_id $th_name $en_name ');" ,
                        'name'=>'DeleteButton', 'class'=>'btn btn-danger'
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