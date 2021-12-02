<?php include("assets/PHP/template/header.php");?>
    <div class="login">
        <div class="title" >
            <h2>test </h2>
        </div>
        <form action="assets\PHP\Admin\index.php" method="post">
                <input type="text" name="nom" maxlength="30"    minlenth ="3"><br>
                <input type="text" name="prenom" ><br>
                <input type="date" name="birthday" max="<?php echo date('Ymd')?>">
                <input type="submit" class="button">


        </form>
        </div>
        

        </form>         
    </div>        

<?php include("assets/PHP/template/footer.php");?>