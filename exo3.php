<h1>Exercice 3</h1>


<p>Soit la phrase "notre formation DL commence aujourd'hui".<br>
ecrire l'instruction qui permet de remplacer le mot aujourd'hui par demain.

</p>

<h2>Résultat</h2>


<?php

$str = "notre formation DL commence aujourd'hui";
  echo str_replace("aujourd'hui", "demain", $str);

