<?php
require 'vendor/autoload.php';

$heroShipPoints = 200;
if(isset($_POST['remainingPointsHeroShip'])) {
    if($_POST['remainingPointsHeroShip'] != ''){
        $heroShipPoints = $_POST['remainingPointsHeroShip'];
    }

}

$degatEnemyShip = 10;
if(isset($_POST['ship'])){
    if($_POST['ship'] == 'E'){
        $degatEnemyShip = 10;
    }
    if($_POST['ship'] == 'R'){
        $degatEnemyShip = 20;
    }
    if($_POST['ship'] == 'U'){
        $degatEnemyShip = 30;
    }
    if($_POST['ship'] == 'B'){
        $degatEnemyShip = 40;
    }

    $heroShipPoints = $heroShipPoints - $degatEnemyShip;

}


?>
<html>
    <head>
        <title>ShipWar</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="Choose your ship, E/R/U/B" name="ship" />
            <input type="hidden" name="remainingPointsHeroShip" value="<?php echo $heroShipPoints ?>"/>
            <button type="submit">Envoyer</button>
        </form>
        <p><?php if(isset($_POST['ship'])): ?>
            You've been hit by
            <?php
                if($_POST['ship'] == 'E'){
                    echo 'an enemy ship';
                }
                if($_POST['ship'] == 'R'){
                    echo 'a rocket enemy ship';
                }
                if($_POST['ship'] == 'U'){
                    echo 'a ufo enemy ship';
                }
                if($_POST['ship'] == 'B'){
                    echo 'a big ufo enemy ship';
                }
            ?>
        <?php endif; ?>
        </p>
        <p>
            You still have <?php echo $heroShipPoints ?>
        </p>
    </body>
</html>
