<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <title>Felix Houphouet Boigny</title>
</head>
<body>
<header>
    <h1>FELIX HOUPHOUET BOIGNY</h1>
    <?php
    $Nom="";
    $Prenom="";
    $email="";

    if(isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["email"]))
    {
        $Nom = $_POST["Nom"];
        $Prenom = $_POST["Prenom"];

        echo "Bonjour ". $Nom ." ". $Prenom;
    }
    else {

    }
    ?>
    <p><div style="flex-grow:1"><a href="lab2_IntroAuPHP.html">Se deconecter</a></div></p>
</header>
<div id="Body" style="display:flex; flex-direction:row; align-content: center; align-content: start">
    <div style="flex-grow: 1">
        <form action="/action.php" method="post">
            <p><h2>MENU</h2></p>
            <div style="flex-grow:1"><a href="https://www.cegepjonquiere.ca/">Hyperlien 1</a></div>
            <div style="flex-grow:1"><a href="https://www.cegepjonquiere.ca/">Hyperlien 2</a></div>
            <div style="flex-grow:1"><a href="https://www.cegepjonquiere.ca/">Hyperlien 3</a></div>
        </form>
    </div>
    <div style="flex-grow: 2">
        <p><h2>CONTENU</h2></p>
        <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
        <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
        <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
        <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
        <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
    </div>
</div>
<div id="Footer">
    <p>Fait par AKRE Henoc Alain Sylvestre</p>
    <p>Contacter nous: 20501@etu.cegepjonquiere.ca</p>
</div>
</body>
</html>



