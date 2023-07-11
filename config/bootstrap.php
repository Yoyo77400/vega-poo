<?php

/** 
 * --------------------------------------------------------------------------------------------------
 *                                          Amorceur de l'application
 * 
 * Chargement des fichiers de configuration
 * 
 * Ses rôles:
 *          -Charger l'autoloader de composer
 *          -Charger les variables d'environnement
 *          -Charger le conteneur de dépendances
 * --------------------------------------------------------------------------------------------------
 */


//chargement de l'autoloader de composer
require __DIR__ . "/../vendor/autoload.php";

//chargement des variables d'environement 
require __DIR__ . "/environment/dotenv.php";

//chargement du conteneur de dépendances
$container = require __DIR__ . "/di/container.php";

