<?php
    //variables
    //variables berekening
    /*$totBroodGezond = $broodjeGezond * 1.50;
    $totSmosKaas = $smosKaas * 2.50;
    $totSmosHesp = $smosHesp * 2.50;
    $totKipCurry = $kipCurry * 2.50;
    $totPrepare = $prepare * 2.50;
    $totVleesSla = $vleesSla * 3.00;
    $totPitaSla = $pitaSla * 3.00;
    $totMartino = $martino * 3.20;
    $totMartinoPikant = $martinoPikant * 3.50;
    $totKip = $kip * 4.00;
    $totMexicano = $mexicano * 4.00;
    $totCarrero = $carrero * 4.00;*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Broodjes Zaak</title>
</head>
<body>
    <header>
        <div class="header">
            <h1 class="title">Broodjes Zaak</h1>
        </div>
    </header>
    <table class="prijslijstBroodjes">
        <ul>
            <h4 class="titlebroodjes">Broodjes</h4>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="broodjegezond inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['broodjegezond'])){
                            $broodjeGezond = $_GET['broodjegezond'];
                            $totBroodGezond = $broodjeGezond * 1.50;
                        };    
                    ?>
                </td>
                <td>Broodje Gezond </td>
                <td>(1,50€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="smoskaas inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['smoskaas'])){
                            $smosKaas = $_GET['smoskaas'];
                            $totSmosKaas = $smosKaas * 2.50;
                        };
                    ?>
                </td>
                <td>Smos kaas </td>
                <td>(2,50€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="smoshesp inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['smoshesp'])){
                            $smosHesp = $_GET['smoshesp'];
                            $totKipCurry = $kipCurry * 2.50;
                        };
                    ?>
                </td>
                <td>smos hesp </td>
                <td>(2,50€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="kipcurry inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['kipcurry'])){
                            $kipCurry = $_GET['kipcurry'];
                            $totKipCurry = $kipCurry * 2.50;
                        };
                    ?>
                </td>
                <td>Broodje Kipcurry </td>
                <td>(2,50€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="prepare inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['prepare'])){
                            $prepare = $_GET['prepare'];
                            $totPrepare = $prepare * 2.50;
                        };
                    ?>
                </td>
                <td>Broodje Preparé </td>
                <td>(2,50€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="vleessla inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['vleessla'])){
                            $vleesSla = $_GET['vleessla'];
                            $totVleesSla = $vleesSla * 3.00;
                        };
                    ?>
                </td>
                <td>Broodje Vleessla </td>
                <td>(3,00€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="pitasla inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['pitasla'])){
                            $pitaSla = $_GET['pitasla'];
                            $totPitaSla = $pitaSla * 3.00;
                        };
                    ?>
                </td>
                <td>Broodje Pitasla </td>
                <td>(3,00€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="martino inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['martino'])){
                            $martino = $_GET['martino'];
                            $totMartino = $martino * 3.20;
                        };
                    ?>
                </td>
                <td>Broodje Martino </td>
                <td>(3,20€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="martinopikant inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['martinopikant'])){
                            $martinoPikant = $_GET['martinopikant'];
                            $totMartinoPikant = $martinoPikant * 3.50;
                        };
                    ?>
                </td>
                <td>Broodje Martino Pikant </td>
                <td>(3,50€)</td>
            </tr>

            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="kip inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['kip'])){
                            $kip = $_GET['kip'];
                            $totKip = $kip * 4.00;
                        };
                    ?>
                </td>
                <td>Broodje Kip</td>
                <td> (4,00€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="mexicano inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['mexicano'])){
                            $mexicano = $_GET['mexicano'];
                            $totMexicano = $mexicano * 4.00;
                        };
                    ?>
                </td>
                <td>Broodje Mexicano </td>
                <td>(4,00€)</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="get">
                        <input class="carrero inputbroodje" type="number">
                    </form>
                    <?php
                        if (isset($_GET['carrero'])){
                            $carrero = $_GET['carrero'];
                            $totCarrero = $carrero * 4.00;
                        };
                    ?>
                </td>
                <td>Broodje Carréro </td>
                <td>(4,00€)</td>
            </tr>
        </ul>
    </table>
</body>
</html>