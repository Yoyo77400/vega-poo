<?php

use App\Kernel;

/**
 * ----------------------------------------------------------------------------------------------------
 *                                              Bienvenue sur VEGA
 * 
 * Ce fichier représente le contrôleur frontal
 * 
 * Ses rôles: 
 *  - Recevoir la requête du client
 *  - Amorcer l'application
 *  - Créer une nouvelle instance du noyau de l'application
 *  - Soumettre la requête du client  au noyau pour traitement
 *  - Récupérer de la part du noyau: 
 *              -La réponse correspondante à la requête 
 *  - Envoyer cette réponse au serveurafin que celui ci l'envoi au navigateur du client
 *  - La navigateur l'affiche en tant que page Web en répons au client
 * 
 * ----------------------------------------------------------------------------------------------------
 */

require __DIR__ . "/../config/bootstrap.php";

// Création d'une nouvelle instance du noyau de l'application 
$kernel = new Kernel($container);

$response = $kernel->handleRequest();
$response->send();
dd($response);