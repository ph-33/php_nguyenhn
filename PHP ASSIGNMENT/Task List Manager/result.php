<?php

$task_list = $_POST['tastklist'];
if($task_list ===   null)
{
    $task_list = array();
}
$new_task = $_POST['addtask'];
$task_list[] = $new_task;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="content">
                <div class="content-show">
                    <h4>Task</h4><br>
                        <?php
                         foreach ($task_list as $id => $val) {
                             echo $id . ' '.htmlspecialchars($val);
                         }
                        ?>
                    <br>
                </div>

                <!--end add task-->

            </div>
        </div>
    </div>
</div>
</body>
</html>
