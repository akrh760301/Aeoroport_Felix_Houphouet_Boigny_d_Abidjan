<menu>
        <ul>
            <?php
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

