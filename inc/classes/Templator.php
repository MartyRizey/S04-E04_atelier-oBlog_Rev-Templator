<?php

class Templator
{
    // nouvelle propriété dans ma classe, qui stockera à l'intérieur le chemin absolu de mon dossier de templates
    public $path;
    
    // nouvelle propriété dans ma classe, qui stockera à l'intèrieur mes clés & valeurs fournies  
    // cela permet de faire persister une donnée en dehors de la méthode et dans toute la classe
    // le = array() ici ne sert .... à rien ! c'est pour le développeur qui lira le code comprendra de suite que c'est un tableau
    public $varList = array();

    // on récupére la valeur de l'argument de l'appelle de la fonction du fichier index.php dans le paramètre du constructeur
    // la méthode __construct est appelée dés l'utilisation du mot-clé 'new'
    public function __construct($path_directory)
    {
        // debug : permet de connaître le contenu de la variable passée en paramètre de __construct
        // contient le chemin absolu jusqu'à un dossier contenant les vues ou templates 
        // dump($path_directory); 
        // die;

        // Je viens stocker la valeur de $path_directory dans 'path'
        $this->path = $path_directory;

    }

    // Je créé une nouvelle méthode setVar
    // Cette méthode viens stocker dans mon objet sous la forme d'un tableau associatif, le param1 en clé et le param2 en valeur associée
    // Ainsi les données fournies "persisteront" dans mon objet
    public function setVar($clé, $valeur)
    {
        // debug : qu'est-ce que j'ai comme valeur dans $param1 et $param2
        // $param1 contient une chaîne de caractère = 'clé'
        // $param2 contient un tableau indexé et chaque index contient un objet de la classe 'Article' = valeur
        // dump($param1);
        // dump($param2);
        // die;

        // on cible la propriété $varList
        // $varList[] est un tableau associatif dont $param1 est la [clé] et $param2 = la valeur
        $this->varList[$clé] = $valeur; 

        
        



    }


}