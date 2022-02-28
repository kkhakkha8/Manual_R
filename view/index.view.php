<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>My Todos</h1>
      <?php foreach($tasksTableDatas as $data) : ?>
            <ul>
            <?php if ($data->complete) : ?>
                <li><strike><h2><?=$data->description?></h2></strike></li>
            <?php else : ?>
                <li><h2><?= $data->description?> </h2></li>
            <?php endif ;?>        
            </ul>
      <?php endforeach ; ?>

</body>
</html>