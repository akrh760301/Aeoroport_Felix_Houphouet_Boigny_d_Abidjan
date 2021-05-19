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
?>
