<?php

$task_list = $_POST['tasklist'];
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    .header{
        padding-bottom: 1em;
        border-bottom: 2px solid black;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header"><h3>Task List Manager</h3></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="content-show">
                        <h4>Task</h4><br>
                        <?php if(count($task_list) == 0 ) : ?>
                        <p>there are no task in the task list</p>
                        <?php else: ?>
                            <ul>
                                <?php foreach ($task_list as $id => $task)  :     ?>
                                    <li><?php echo $id  . '.'. htmlspecialchars($task); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <br>
                    </div>
                    <!--add task-->
                    <form action="master.php" method="post">
                        <div class="add_task">
                            <?php  foreach ($task_list as $task) :?>
                            <input type="hidden" name ="tasklist[]" value="<?php echo htmlspecialchars($task); ?>">
                            <?php  endforeach; ?>
                            <label for="">
                                Task
                            </label>
                            <input type="text" name="addtask"><br>
                            <input type="submit" value="Add Task"><br>
                        </div>
                    </form>
                    <!--end add task-->
                    <form action="index.php" method="post">
                        <div class="delete_task">
                            <label for="">
                                Task
                            </label>
                            <select name="taskid" id="">
                                <option value=""></option>
                            </select><br>
                            <input type="submit" value="DeleteTask"><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>