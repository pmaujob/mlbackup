<<<<<<< HEAD
<?php
session_start();
require_once '../Libraries/SessionVars.php';
$sess = new SessionVars();
$sess->init();
if ($sess->exist()) {
    ?>


    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title></title>
            <?php include_once 'header.php'; ?>
        </head>
        <body>

            <?php include '../Views/menu.php'; ?>
            <div class="container-fluid">
                <div class="col s12 m8 l10">

                    <div class="row">
                        <div class="col s12 m8 l12 center-align bajarimagen">
    <!--                        <div><img src="images/logoUser.png" width="300"></div>-->
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="col s12 m8 l9">

        </div>
    </body>
    </html>
    <?php
} else {
    $ruta = $_SESSION['raiz'];
    //$ruta='https://www.google.com.co';
    $ruta = '../index.php';
    header("location: $ruta");

    echo $ruta;
}
?>
=======
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include_once 'header.php'; ?>
        <style type="text/css">
            #imgindex{
                height: 700px;
                display: -webkit-flex;
                display:         flex;
                -webkit-align-items: center;
                align-items: center;
                -webkit-justify-content: center;
                justify-content: center;
                text-align: center;
            }
        </style>

    </head>
    <body>

        <?php include '../Views/menu.php'; ?>
        <div class="container-fluid">
            <div class="col s12 m8 l10">

                <div class="row">
                    <div class="col s12 m8 l12 center-align bajarimagen">
<!--                        <div><img src="images/logoUser.png" width="300"></div>-->
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="col s12 m8 l9">

    </div>
</body>
</html>
>>>>>>> origin/master
