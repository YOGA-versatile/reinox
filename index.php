<!-- loading templates -->
<?php
include "___libs/loads.php";
?>


<!-- Main document -->

<!doctype html>
<html>

<!-- head -->

<?php load_temp("___head.php"); ?>

<!-- body -->

<body>
    <header>

        <?php load_temp("___header.php"); ?>
    </header>

    <main>
        <?php load_temp("___renoxtitle.php"); ?>
        <?php load_temp("___workshop.php"); ?>
        <?php load_temp("___register.php"); ?>
        <?php load_temp("___contact.php"); ?>
    </main>

    <?php load_temp("___footer.php"); ?>

    <script src="../boots/assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>