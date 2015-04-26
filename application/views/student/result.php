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
        			<th>รหัสนิสิต</th>
        			<th>คำนำหน้าชื่อ</th>
        			<th>ชือภาษาไทย</th>
        			<th>นามสกุลภาษาไทย</th>
                    <th>คำนำหน้าชื่อ</th>
                    <th>ชื่อภาษาอังกฤษ</th>
                    <th>นามสกุลภาษาอังกฤษ</th>
        			<th>แก้ไข</th>
        		<tr>
        	</thead>
        	<tbody>
        		<?php
	            if(count($result)>0){
                    foreach ($result as $r){
	            	$bu = base_url();
                    $student_id = $r["student_id"]  ;
                    $th_prefix= $r["th_prefix"] ;
                    $th_firstname= $r['th_firstname'] ;
                    $th_lastname= $r['th_lastname'] ;
                    $en_prefix= $r["en_prefix"] ;
                    $en_firstname= $r['en_firstname'] ;
                    $en_lastname= $r['en_lastname'] ;
                    echo "
                    <form action='".$bu."student/edit' method='POST'>
	            		<tr>
	            			<td>".$student_id."</td>
	            			<td>".$th_prefix."</td>
	            			<td>".$th_firstname."</td>
	            			<td>".$th_lastname."</td>
                            <td>".$en_prefix."</td>
                            <td>".$en_firstname."</td>
                            <td>".$en_lastname."</td>
                            <td>";
                        $bu = base_url();
                        echo "<a href='".$bu."student/edit/".$student_id."'  name='SaveButton' class='btn btn-info'><span class='glyphicon glyphicon-edit'></span></a> &nbsp" ;
                        
                        echo "<a href='".$bu."student/del/".$student_id."' name='DeleteButton' class='btn btn-danger'" ;
                        echo "onclick ='"."javascript:return confirm('คุณต้องการลบหรือไม่? $student_id $th_prefix $th_firstname $th_lastname');'" ;
                        echo " ><span class='glyphicon glyphicon-trash'></span></a>" ;

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