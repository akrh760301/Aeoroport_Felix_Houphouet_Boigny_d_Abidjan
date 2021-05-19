
    <?php
    $_email = "";
    $_mdp = "";
    $_user = "";

    $isConnected = false;

    $_urlPHP = $_SERVER['PHP_SELF'];
    $_urlDICJ = "http://www.dicj.info/etu/2030501/Lab03_HenocAKRE/lab2_IntroAuPHP.php";

    if (isset($_POST["email"]) && isset($_POST["password"]))
    {
        $_email = $_POST["email"];
        $_mdp = $_POST["password"];
    }

    $xmlUser = simplexml_load_file("user.xml") or die ();

    foreach($xmlUser->children() as $user)
    {
        if ($_email == $user->mail && $_mdp == $user->mdp)
        {
            $_user = $user->prenom. " " . $user->nom;
            $isConnected = true;
            break;
        }
    }
    if ($isConnected == false &&  $_urlPHP != "lab2_IntroAuPHP.php")
    {
        flush();
        echo "<script type='text/javascript'> document.location = 'lab2_IntroAuPHP.php'; </script>";
        exit();
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Felix Houphouet Boigny</title>
        <h1>BIENVENUE SUR LE SITE DE L'AEROPORT FELIX HOUPHOUET BOIGNY</h1>
    </head>
    <body style="display:flex; flex-direction:column; height:100%; align-content: center; align-items:center" class="php">
        <?php include ("header.php");?>

        <?php include"menu.php"?>

        <footer class="bottom">
            <?php include ("footer.php")?>
        </footer>
    </body>
    </html>

