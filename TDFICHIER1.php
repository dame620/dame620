<?php
    if(isset($_POST['submit']))
    { 
$matricule = trim($_POST['matricule']);
$nom = trim($_POST['nom']); 
$prenom = trim($_POST['prenom']); 
$date = trim($_POST['date']); 
$salaire = trim((int)$_POST['salaire']); 
$telephone = trim($_POST['telephone']); 
$email = trim($_POST['email']); 


if(preg_match ("/^[a-zA-Z\s]+$/", $nom)){
 echo "le nom est valide </br>";

    if(preg_match ("/^[a-zA-Z\s]+$/", $prenom)){
    echo "le prenom est valide </br>";
        if(isset($date)){$vdate = explode("/",$date);
        if(checkdate($vdate[1], $vdate[0], $vdate[2])){echo "date de naissance valide</br>"; 
        
            if(isset($salaire) AND !empty($salaire)){if($salaire >= 25000 AND $salaire <= 2000000)
            echo 'le montant du salaire est valide'.$salaire.'</br>';
                 if(isset($telephone)){if(preg_match('/^(77|78|70|76)[0-9]{7}$/',$telephone)){
                 echo "telephone valide </br>";
    
                       if(isset($email) AND !empty($email)){
                        if(filter_var($email,FILTER_VALIDATE_EMAIL))
                        echo "email est correcte</br>";

$matricule = trim($_POST['matricule']);
$nom = trim($_POST['nom']); 
$prenom = trim($_POST['prenom']); 
$date = trim($_POST['date']); 
$salaire = trim((int)$_POST['salaire']); 
$telephone = trim($_POST['telephone']); 
$email = trim($_POST['email']); 
    $serveur = "localhost";
    $login = "dame";
    $pass = "da4930NDY!";
    try{
        $connexion = new PDO("mysql:host=$serveur;dbname=TDFICHIER;charset=utf8",$login,$pass);
        $connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "la connexion a bien reussi <br>";
    $requete=$connexion->prepare("SELECT COUNT(*) FROM employes");//selectionner le nombre de colonne
    $requete->execute();//execute la requette
    $execut=$requete->fetchColumn();//retourner le nombre de ligne de la table
    $mat=$execut+1;//incrementer
    $matricule=sprintf("%04d",$mat);//definir le format
    $insertion = "INSERT INTO employes(matricule,nom,prenom,date,salaire,telephone,email)
              VALUES('EM-$matricule', '$nom', '$prenom', '$date', '$salaire', '$telephone', '$email')";

$connexion->exec($insertion);
echo 'valeur bien inserer dans la table employes <br>';
}
    catch(PDOException $e){
        echo 'Echec de la connexion:'.$e->getMessage();
    }
        }
        else  {echo "email est invalide reessayer svp echec de l'insertion</br>";}
    }
        
        else{ echo "le telephone non valide echec de l'insertion </br>";}
         
        }
}
    else {echo "ce montant n'est pas valide comme salaire echec de l'insertion</br>";}
        }
        else{ echo " date de naissance non correcte echec de l'insertion</br>";}
        }
}
    else{
        echo "prenom incorect entrez un prenom composé uniquement de lettre echec de l'insertion</br>";}
}
    else{
        echo "nom incorect entrez un nom composé uniquement de lettre echec de l'insertion</br>";}
 }



?>

 <!doctype>
<html>
    <head>
        <title> TDFICHIER1.php </title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="formulairelinkfile.css">
    </head>
     <body>
     <h2> formulaire emploiyés </h2>
     <form action="TDFICHIER1.php" method="POST">
     <P>
    <label> matricule:</label>
    <input type="text" name="matricule" placeholder="matricule" readonly="true" value="EM-<?php echo $matricule?>">
    </P>
    <P>
    <label> nom:</label>
    <input type="text" name="nom" placeholder="nom">Entrez votre nom*<br>
    </P>
    <P>
    <label> prenom: </label>
    <input type="text" name="prenom" placeholder="prenom">Entrez votre prenom*<br>
    </P>
    <P>
    <label> date_naissance:</label>
    <input type="text" name="date" placeholder="jj/mw/annee">Entrez votre date de naissance*<br>
    </P>
    <P>
    <label> salaire:</label>
    <input type="text" name="salaire" placeholder="salaire">Entrez votre salaire*<br>
    </P>
    <P>
    <label> telephone:</label>
    <input type="text" name="telephone" placeholder="telephone">Entrez votre telephone*<br>
    </P>
    <P>
    <label> email:</label>
    <input type="text" name="email" placeholder="email">Entrez votre email*<br>
    </P>
    <input type = "submit" name="submit" value = "submit">
    </form>
    </body>
    </html>





