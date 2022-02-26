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
        <li>His name is <?= $personBio['name'];?></li>
        <li>His age is <?= $personBio['age'];?></li>
        <li>He is 
        <?php  if($personBio['isMarried']) : ?>
            Married
        <?php else :?>
            not Married
        <?php endif ;?>
        </li>
        
        
    </ul>
</body>
</html>