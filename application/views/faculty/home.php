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
            รายชื่อคณะ
        </h1>
        <a href="<?=base_url();?>faculty/load_add_faculty_page" class="btn btn-primary">
            add faculty <i class="fa fa-plus"></i>
        </a>
        <table class="table table-striped">
        	<thead>
        		<tr>
                    <th>รหัสคณะ</th>
                    <th>ชื่อคณะ</th>
                    <th>Faculty Name</th>
                    <th>Manage</th>
                <tr>
        	</thead>
        	<tbody>
            <form action="<?=base_url();?>faculty/search_faculty" method="POST">
                <fieldset>
                <tr>
                    <td>
                        <input class="form-control" name="faculty_id"  placeholder="รหัสคณะ">         
                    </td>
                    <td>
                        <input class="form-control" name="th_faculty_name" placeholder="ชื่อคณะ">  
                    </td>
                    <td>
                        <input class="form-control" name="en_faculty_name" placeholder="Faculty Name">
                    </td>
                    <td>
                        <input type="submit" class="btn btn-info" value="Search">
                            <!-- <i class="fa fa-search"></i> -->
                        </input>
                    </td>
                </tr>
                </fieldset>
            </form>
        		<?php

	            if(count($allfaculty)>0){
	            	foreach($allfaculty as $faculty){
	            ?>
                <form action="<?=base_url();?>faculty/load_edit_faculty_page" method="POST">
                    <fieldset>
	            		<tr>
	            			<td>
                                <input class="form-control" name="faculty_id"  value=<?=$faculty->faculty_id;?> readonly>
                            </td>
                            <td>
                                <input class="form-control" name="th_faculty_name"  value=<?=$faculty->th_faculty_name;?> readonly>
                            </td>
                            <td>
                                <input class="form-control" name="en_faculty_name"  value=<?=$faculty->en_faculty_name;?> readonly>
                            </td>
                            <td>
                                <input type="submit" class="btn btn-primary" value="Edit">
                                </input>
                                <!-- <a href="<?=base_url();?>faculty/load_edit_faculty_page" class="btn btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a> -->
                                <a href="<?=base_url();?>faculty/delete_faculty/<?=$faculty->faculty_id;?>" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
	            		</tr>
                    </fieldset>
                </form>
	            <?php
	            	}
	            }else{
	            ?>
            		<tr>
            			<td colspan="5">ไม่มีข้อมูล</td>
            		</tr>
	            <?php
	            }
	            ?>
        	</tbody>
        </table>
            
    </div>
</div>
<!-- /.row -->
</body>
</html>