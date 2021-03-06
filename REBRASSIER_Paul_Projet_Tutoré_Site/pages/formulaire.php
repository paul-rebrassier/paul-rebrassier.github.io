<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="../img/logo_PR_web.svg" class="logo">
        <h1 class="titre"><a href="../index.html">Agence PR Web</a></h1>
        <div class="reseaux">
            <div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="#5f5fc4" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg><a href="https://www.facebook.com/Agence-PR-Web-111712577246249/">Agence PR Web</a></div>
                <div><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="#6ab7ff" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg><a>@agenceprweb</a></div>
            </div>
        </div>
    </header>
    <form method="post">
        Nom : <input type="text" name="nom"><br>
        Prénom : <input type="text" name="prenom"><br>
        Adresse e-mail : <input type="text" name="email">
        Message : <textarea id="resultat" rows="10" cols="50"></textarea><br>
        <input type="submit" name="ok" value="Envoyer">
    </form>

    <?php 
    if (isset($_POST['ok']) && $_POST['nom']!='' && $_POST['prenom']!='' && $_POST['email']!='') {
      $mail = $_POST['email'];
      $profil="#^[a-z0-9]+([-._][a-z0-9]+)*@[a-z0-9]+([-._][a-z0-9]+)*[.][a-z]{2,3}$#";
      if(preg_match($profil,$mail)){
        echo "Formulaire envoyé avec succès";      
      }
      else{
        echo "Adresse invalide";
      }
    }
    else {
        echo "Veuillez compléter les champs nom et prénom.";
    }
    ?>
</body>
</html>