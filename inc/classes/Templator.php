<?php

class Templator
{
    // nouvelle propriété dans ma classe, qui stockera à l'intérieur le chemin absolu de mon dossier de templates
    public $path;

    // on récupére la valeur de l'argument de l'appelle de la fonction du fichier index.php dans le paramètre du constructeur
    // la méthode __construct est appelée dés l'utilisation du mot-clé 'new'
    public function __construct($path_directory)
    {
        // debug : permet de connaître le contenu de la variable passée en paramètre de __construct
        // contient le chemin absolu jusqu'à un dossier contenant les vues ou templates 
        // dump($path_directory); die;

        // Je viens stocker la valeur de $path_directory dans 'path'
        $this->path = $path_directory;

    }
}