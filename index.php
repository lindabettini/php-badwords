<?php

// Creare una variabile con un paragrafo di testo a vostra scelta.
// Stampare a schermo il paragrafo e la sua lunghezza.
// Una parola da censurare viene passata dall'utente tramite parametro GET.
// Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.

$testo = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo fuga accusamus architecto quis adipisci dolor magni quae perferendis est totam laborum';

$lunghezzaTesto = strlen($testo);

$daCensurare = $_GET['parola']

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?php echo $testo ?></p>
  <div><?php echo 'lunghezza testo: ' . $lunghezzaTesto . ' caratteri' ?></div>
  <input type="text" placeholder="inserisci una parola da censurare">
</body>
</html>