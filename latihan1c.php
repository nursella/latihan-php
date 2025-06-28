<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1c</title>
    <style>
        .container{
            display:grid;
            grid-template-colums: repeat(3,50px);
            grid-auto-rows: 50px;
            gap: 5px;
            width: max-content;
            border: 1px solid #000;
            padding: 10px;
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }
        .empty{
            visibility: hidden;
        }
    </style>
</head>
<body>
    <?php
    $a ="A";
    $b ="B";
    $c ="C";
    ?>
<div class="container">
    <div class="box"><?php echo $a;?></div>
         <div class="box empty"></div>
        <div class="box empty"></div>
    <div class="box"><?php echo $a;?></div>
    <div class="box"><?php echo $b;?></div>
        <div class="box empty"></div>
    <div class="box"><?php echo $b;?></div>
    <div class="box"><?php echo $c;?></div>
    </div>
</body>
</html>