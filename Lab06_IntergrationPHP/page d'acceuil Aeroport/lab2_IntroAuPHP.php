
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Felix Houphouet Boigny</title>
    <h1>BIENVENUE SUR LE SITE DE L'AEROPORT FELIX HOUPHOUET BOIGNY</h1>
</head>
<body style="display:flex; flex-direction:column; height:100%; align-content: center; align-items:center">
  <div id="Body" style="display:flex; flex-direction:row; flex-grow: 1">
      <div style="flex-grow: 1">
         <form action="./lab2_IntroAuPHP_Part2.php" method="post" class="middle">
             <p><div><label for="Nom">Nom: </label><input type="text" id="Nom" name="user"></div></p>
             <p><div><label for="email">Adresse courriel: </label><input type="email" id="email" size="30" name="email" required></div></p>
             <p><div><label>Mot de passe: </label><input type="password" name="mdp"></div></p>
             <p><div><button>S'inscrire</button> <button type="submit">Se connecter</button></div></p>
         </form>
     </div>
  </div>
  <footer class="bottom">
      <p> <div>Fait par Henoc AKRE</div> <div>Contactez nous via l'adresse suivante : 2030501@etu.cegepjonquiere.ca</div></p>
  </footer>
</body>
</html>