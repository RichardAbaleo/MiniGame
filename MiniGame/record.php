<?php
session_start();
$record = $_POST['score-input'];
$username = @$_SESSION['username'];
require "connexion_bdd.php";
try 
{
    if(isset($username)) 
    {
        $username = "NoName";
        $rq = "INSERT INTO data(username,record) VALUES (:username,:record)";
        $requete = $db->prepare($rq);
        $requete->bindValue(':username', $username, PDO::PARAM_STR);
        $requete->bindValue(':record', $record, PDO::PARAM_INT);
        $requete->execute();
        $requete->closeCursor();
        $_SESSION['message'] = NULL;
        header("Location: index.php");
    }
    else 
    {
        $rq = "UPDATE data SET record=:record WHERE username='$username'";
        $requete = $db->prepare($rq);
        $requete->bindValue(':record', $record, PDO::PARAM_INT);
        $requete->execute();
        $requete->closeCursor();
        $_SESSION['message'] = NULL;
    header("Location: index.php");
    }
}

catch (Exception $e) 
{
    header("Location: index.php");    
    $_SESSION['message'] = "ERROR: connection failed.";
}

?>