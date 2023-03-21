<?php 
require('../class/verification.php');
$verif = new Verification();
// Verifier le nom 
$verif->Texte($_POST['nom'], 'nom');
// Verifier le prenom 
$verif->Texte($_POST['prenom'], 'prenom');
// Verifier l'email et vérifier en base de donnée si il l'existe
$verif->Email($_POST['email']); 
// Verifier le téléphone
$verif->Phone($_POST['telephone']);
// Verifier le mot de passe
// Verifier le mot de passe et que le confirme mot de passe soit identique
$verif->Password($_POST['password'], $_POST['password2']);

echo $verif->getIndexError(0);