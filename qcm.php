<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" >
   <head>
       <title>QCM</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   </head>
   <body>
    <form method="post" action="qcm.php">
   <p>
       Quel est la couleur du cheval blanc ,  :<br />
       <label><input type="radio" name="cheval" value="blanc" />blanc</label><br />
       <label><input type="radio" name="cheval" value="noir" />noir</label><br />
       <label><input type="radio" name="cheval" value="marons" />marons</label><br />
       <label><input type="radio" name="cheval" value="violet" />violet</label>
    <input type="submit" value="Valider" />
   </p>
   </form>
   </body>
</html>

<?php
//Si la variable $_POST['cheval'] cheval existe
if (isset($_POST['cheval']))
 {
  //On securise les variables
  $cheval=htmlentities($_POST['cheval']);
  //On assigne la valeur 0 a $note
  $note=0;

  //Si la variable cheval est bien egal a blanc
  if ($cheval=='blanc')
   { 
     //On lui ajoute 20
     $note=$note+1;
     //O lui dit que sa reponse est corect
     echo 'Correct';
   }
   else //Sinon
   {
    //On lui dit non
    echo 'Incorrect';
   }
switch ($note) { // on indique sur quelle variable on travaille

case 3: // dans le cas où $note vaut 0
echo "3/3";
echo "<br />";
echo "GREAT !";
break;

case 2:// dans le cas où $note vaut 20
echo "2/3";
echo "<br />";
echo "Well done !";
break;

case 1:// dans le cas où $note vaut 20
echo "1/3";
echo "<br />";
echo "Only one right answer. Watch again the video !";
break;

case 0:// dans le cas où $note vaut 20
echo "0/3";
echo "<br />";
echo "All the answers are wrong. Watch again the video !";
break;

//sinon 
default:
echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
}
else //Si le champ n'est pas remplis !
{
 //C'est une copie blanche
 echo 'Copie blanche ! ';
}
?>