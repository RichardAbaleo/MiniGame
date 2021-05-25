<?php

session_start();
$username = htmlspecialchars($_POST["user"]);
$pass = htmlspecialchars($_POST['pass']);
$inscrit = @$_POST['inscrit'];

try 
{
    require "connexion_bdd.php";
    $req = $db->query("SELECT username FROM `data` WHERE username='$username'") or die(print_r($db->erroInfo()));
    $data = $req->fetch();
    $req->closeCursor();
    $reqPass = $db->query("SELECT * FROM `data` WHERE username='$username' AND pass='$pass'") or die(print_r($db->erroInfo()));
    $dataPass = $reqPass->fetch();
    $reqPass->closeCursor();
    if ($inscrit == "YES")
    {
        if ($data){
            $_SESSION['username'] = "";
            $_SESSION['message'] = "Pseudonyme déjà utilisé.";
            header("Location: index.php");
        } else {
            $rq = "INSERT INTO data(username,pass)
            VALUES (:username,:pass)";
            $requete = $db->prepare($rq);
            $requete->bindValue(':username', $username, PDO::PARAM_STR);
            $requete->bindValue(':pass', $pass, PDO::PARAM_STR);
            $requete->execute();
            $requete->closeCursor();
            $_SESSION['username'] = $username;
            $_SESSION['message'] = NULL;
            header("Location: index.php");
        }
    }
    else 
    {
        if ($dataPass) {
            $_SESSION['username'] = $username;
            $_SESSION['message'] = NULL;
            header("Location: index.php");        
        } else {
            $_SESSION['username'] = "";
            $_SESSION['message'] = "Identifiants incorrects.";
            header("Location: index.php");
        }
    }
    
}  

catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}

?>