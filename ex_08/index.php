<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >
    <?php 
        if(isset($_GET["name"])){
            echo "bonjour ".$_GET["name"];
        }else{
            ?>
            <form method="get" action="/ex_08/index.php" style="display: flex; flex-direction:column; justify-content:center;margin-left: 40%; margin-right:40%;">
            <input type="text" name="name" placeholder="Your Name here...">
            <input type="submit" value="Submit">
            </form>
            <?php
        }
 
    ?>
        
    
</body>
</html>