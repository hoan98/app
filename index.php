<!DOCTYPE html>
<html>
<head>
	<title>doc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="row d-flex justify-content-center container">
    <div class="col-md-8">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="fa fa-tasks"></i>&nbsp;Task Lists</div>
            </div>
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                    <div style="position: static;" class="ps ps--active-y">
                        <div class="ps-content">
                            <ul class=" list-group list-group-flush">

                            	<?php
                            		require 'connect.php' ;
                            		$sql = "SELECT * FROM task ORDER BY task_id ASC";
                            		$query = $conn->query($sql);
                            		while ($fetch = $query->fetch_array()) {
                            			
                            		


                            	?>

                                <li class="list-group-item">
                                    <div class="todo-indicator bg-warning"></div>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-2">
                                                <div class="custom-checkbox custom-control"> <input  id="exampleCustomCheckbox12" type="checkbox" <?php if ($fetch['status'] == 'Done') {
                                                	echo "checked";
                                                } 
                                                 ?> ><label for="exampleCustomCheckbox12">&nbsp;</label> </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">
                                                	<?php
                                                		echo $fetch['task'];
                                                	?>
                                                	<!-- <div class="badge badge-danger ml-2">Rejected</div> -->
                                                </div>
                                                <div class="widget-subheading"><i>By <?php echo $fetch['implementer']; ?></i></div>
                                            </div>

                                            <?php
                                            	if ($fetch['status'] != 'Done') {
                                            		# code...
                                            		echo 
                                            			'<div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <a href="update.php?task_id='.$fetch['task_id'].'"><i class="fa fa-check">hoàn thành</i></a></button>';
                                            	}else{
                                            		echo 
                                            			'<div class="widget-content-right"> <button class="border-0 btn-transition btn btn-outline-success"> <a href="refesh.php?task_id='.$fetch['task_id'].'"><i class="fa fa-check">Làm lại</i></a></button>';
                                            	}
                                            	
                                            ?>
                                            

                                             <button class="border-0 btn-transition btn btn-outline-danger"><a href="delete.php?task_id=<?php echo $fetch['task_id']?>"> <i class="fa fa-trash">xóa</i> </a></button> </div>
                                        </div>
                                    </div>
                                </li>
                               <?php
                               	}
                               ?>	
                            </ul>
                        </div>
                    </div>
                </perfect-scrollbar>
            </div>
            <div class="d-block text-right card-footer add"><button class="btn btn-primary"><a href="add.php" class="add">Add Task</a></button></div>
        </div>
    </div>
</div>
</body>
</html>