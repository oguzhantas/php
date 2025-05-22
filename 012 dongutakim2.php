<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Döngü Takım</title>
    <style>
        #renk1{ background-color: yellow;   color:blue;}
        #renk2{ background-color: blue; color:yellow; }
    </style>
</head>
<body> 
    <?php
        for ($i = 0; $i < 20; $i++) {
            if($i%2== 0) 
                echo "<span id=renk1>Sarı</span>"."<br>";
            else if($i%2==1)
                echo "<span id=renk2>Lacivert</span>"."<br>";
        }
    ?>
</body>
</html>