 <!DOCTYPE html>
<html>
<head>
        <title>mon profil</title>
        <meta charset="utf-8">
</head>
<body>

<p>Ici un page pour saisir votre profil</p>

<FORM   ACTION="t_profil.php" METHOD="POST">
pseudo
<INPUT TYPE="text" NAME="pseudo" >
<br>nom
<INPUT TYPE="text" NAME="nom" >
<br>prenom
<INPUT TYPE="text" NAME="prenom">
<br>email
<INPUT TYPE="checkbox" NAME="email">
<br>date de naissance
<INPUT TYPE="date" NAME="ddn">
<br>sexe
  <input type="radio" name="sexe" value="m" checked> Male<br>
  <input type="radio" name="sexe" value="f"> Female<br>
  <input type="radio" name="sexe" value="o"> Other
<br>titre de profil
<INPUT TYPE="text" NAME="titprofil">
<br>votre profil?
  <input type="radio" name="typprofil" value="public" checked> Public<br>
  <input type="radio" name="typprofil" value="private"> Private<br>

<br><INPUT TYPE="SUBMIT" VALUE="ENVOYER">
</FORM>




</body>
</html>
