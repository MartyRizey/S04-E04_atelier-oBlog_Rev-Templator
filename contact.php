<?php

require __DIR__.'/vendor/autoload.php';

// 1- Chargement des fichiers définissants les classes
// TODO
require __DIR__.'/inc/classes/Article.php';
require __DIR__.'/inc/classes/Templator.php';

// 2- Chargement des données
// __DIR__ = constante "magique" contenant le chemin absolu jusqu'au dossier du fichier dans lequel il est écrit
require __DIR__.'/inc/data.php';

// 3- Instanciation de classe de Templating
// l'argument transmit à l'appel de la classe Templator sera récupéré dans les paramètre de la méthode __construct de cette classe
$oTemplator = new Templator(__DIR__.'/inc/views');

// 4- Transmission des données au système de Templates
// setVar est une méthode de l'objet oTemplator qui à été instancié à partir de la classe Templator
// la méthode prends 2 arguments qui devront être passés à la méthode via ces paramètres
// $oTemplator->setVar('articles', $articlesList);
/**
 *  Ici nous avons seulement besoin des données de $catégoriesList dans le fichier data.php
 *  Car le template nav.tpl.php en a besoin via la méthode getVar('catégories') pour l'afficher avec le header. 
 *  Nous n'affichons pas les articles ni les auteurs sur cette page.  
 */
$oTemplator->setVar('categories', $categoriesList);

// $oTemplator->setVar('authors', $authorsList);

// dump($oTemplator);
// die();

// 5- Afficher la template de contact
$oTemplator->display('contact');