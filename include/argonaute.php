<?php 
require_once 'database.php';


// On récupère les informations du formulaire grace à la méthode POST : 
    if(!empty($_POST['name']))
    {
        $name =  htmlspecialchars($_POST['name']); 
    
    // Ajout en BDD
    $insert = $db->prepare('INSERT INTO  argonaute (praenomen) VALUES ( ? )');
    $insert->execute([$name]);
    }
    


// Recupération des argonautes dans la bdd 
$request = $db->query('SELECT praenomen FROM argonaute');
if($request ===false){
    die('Erreur SQL');
}
$result = $request->fetchAll(PDO::FETCH_ASSOC);




