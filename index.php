<?php include("assets/PHP/template/header.php");?>
    <div class="login">
        <div class="title" >
            <h1>Se connnecter</h1>
        </div>
        <form action="assets\PHP\Admin\index.php" method="post">
            <div class="form_style"><br>
                <input type="text" name="nom" maxlength="30
                "    minlenth ="3"><br>
                <input type="text" name="prenom" ><br>
                <input type="date" name="birthday" max="<?php echo date('Ymd')?>">
                <input type="passworld">
                    <input type="submit" class="button">
                </div>                                
            </div>
<<<<<<< HEAD
        </form>
        </div>
        <?php include("assets/JavaScript/maps.js")?>
        
=======
        </form>         
    </div>        
>>>>>>> a22cea655e5453c892bf0fb8530e455a68425072
<?php include("assets/PHP/template/footer.php");?>