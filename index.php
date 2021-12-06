<?php include("assets/PHP/template/header.php");
if (isset($_SESSION['Is_logged']) && $_SESSION['Is_logged'] == true) { ?>
    <div class="login">
        <div class="title">
            <h2>test </h2>
        </div>
        <form action="assets\PHP\Admin\index.php" method="post">
            <input type="text" name="nom" maxlength="30" minlenth="3"><br>
            <input type="text" name="prenom"><br>
            <input type="date" name="birthday" max="<?php echo date('Ymd') ?>">

            <input type="submit" class="button">



        </form>
    </div>

    <script scr="assets\JavaScript\maps.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAh8Tr40ICnDuOM5NLJRzBJ-OOO6BIa01o&v=weekly" async defer>
    </script>
    </form>
    </div>

<?php }
include("assets/PHP/template/footer.php");
?>