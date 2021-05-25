<?php

try 
{
    $db = new PDO("mysql:host=localhost;charset=utf8;dbname=minigame", "root", ""); 

    $reponse = $db->query("SELECT username,pass,record FROM 'user'");

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} 

catch (Exception $e) 
{
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
    die('Fin du script');
}


?>