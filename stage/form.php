<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .button{
            background-color: deepskyblue;
            width: 100px;
            color: white;
            border-radius: 300px;
            border-width : 0;

        }
        .button:hover{
            background-color: white;
            color: deepskyblue;
            border-width: 10 ;
        }   

        
        
    </style>
</head>
<body>
    <div class="login">
        <div class="title" >
            <h1>Se connnecter</h1>
        </div>
        <form action="dashboard\index.php" method="post">
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