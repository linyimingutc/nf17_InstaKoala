 <!DOCTYPE html>
<html>
<head>
        <title>mon profil</title>
        <meta charset="utf-8">
</head>
<body>

<?php

   $pseudo = $_POST['pseudo'];
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];
   $ddn = $_POST['ddn'];
   $sexe = $_POST['sexe'];
   $pays = $_POST['pays'];
   $titprofil = $_POST['titprofil'];
   $typprofil = $_POST['typprofil'];





   include('db.php');

   $req = $db->prepare('INSERT INTO USERS VALUES (login_resp_groupe,taille) VALUES ("' . $pseudo . '","' .$name . '","' .$prenom . '","' .$email . '","' .$ddn . '","' .$sexe . '","' .$pays . '","' .$titprofil . '","' .$typprofil . '")');
   if ($req->execute()){
       echo "on ajoute ~ dans la BDD $pseudo , $name , $prenom , $email , $ddn , $sexe , $pays , $titprofil et il est $typprofil";
   }
   else{
   echo "il a des érreur";
   };

?>


</body>
</html>
