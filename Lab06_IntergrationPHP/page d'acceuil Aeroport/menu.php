<menu>
        <ul>
            <?php

            $servername = "localhost";
            $username = "cegepjon_2030636";
            $password = "DICJ2030636";

            try
            {
                $conn = new PDO ("mysql:host=$servername;dbname=cegepjon_2030636", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connexion réussie";

                $reponse = $conn->query("SELECT nomUtilisateur, prenomUtilisateur FROM TblUsager");

                while ($donnees = $reponse->fetch())
                {
                    echo$donnees['nomUtilisateur'] . '<br />';
                    echo$donnees['prenomUtilisateur'] . '<br />';
                    echo$donnees['nomUsager'].'<br />';
                    echo$donnees['pwdUsager'].'<br />';
                }
                $reponse->closeCursor();

                $sql = "INSERT INTO TblUsager VALUES ('AKRE H', 'dfgh', 'Henoc','AKRE', CURDATE())";
                $conn->exec($sql);
                echo "Bienvenue" . $donnees['prenomUtilisateur'AND 'nomUtilisateur'];
            }
            catch (PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
                die('Connexion échouée. Erreur : ' . $e->getMessage());
            }

            $conn = null;


            $xmlMenu = simplexml_load_file("menu.xml") or die ();
            foreach($xmlMenu->liens->children() as $lien)
            {
                echo "<li> <a href=".$lien->link.">Lien".$lien->nomFR."</a></li>";
            }
            ?>
        </ul>
</menu>

<article>
    <p><h2>CONTENU</h2></p>
    <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
    <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
    <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
    <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
    <p><div>ffvghijlkdsfjsfnkndfkl,sf,dklf,s,ls jksfjsfjkjksf sfjkfsjsfjkjksf sfnksf,sfjjksf sfnsfnksfksfnksf sfnsfnkksfnkfnksf gquyuqdyuqduiqdijjjiqdiqdjiqdiuqdgi</div></p>
</article>

