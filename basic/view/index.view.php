<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $greeting ?>
    <h1 style="background-color: grey;text-align:center;"><?= "Hello ". $greeting ?></h1>
    <ul>
        <li>Task title is <?= $tasks['title'];?></li>
        <li>Due date is <?= $tasks['due'];?></li>
        <strike><li>
        <?php 

            echo $tasks['complete'] ?  "complete"  : "incomplete" ;        

        ?>
        </li></strike>
        
        
    </ul>
</body>
</html>