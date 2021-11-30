<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stage\assets\CSS\style.css">
</head>
<body>
    <div class="login">
        <div class="title" >
            <h1>Se connnecter</h1>
        </div>
        <form action="stage\assets\PHP\Admin\index.php" method="post">
            <div class="form_style"><br>
                <input type="text" name="nom" maxlength="30
                "    minlenth ="3"><br>
                <input type="text" name="prenom" ><br>
                <input type="date" name="birthday" max="<?php echo date('Ymd')?>">
                <input type="passworld">
                    <input type="submit" class="button">
                </div>
                
                
            </div>

        </form>
        
        
          
    </div>
        
</body>
</html>