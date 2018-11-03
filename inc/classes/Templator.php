<?php

class Templator
{
    // nouvelle propriété dans ma classe, qui stockera à l'intérieur le chemin absolu de mon dossier de templates
    // ici on peut utiliser private au lieu de public
    public $path;
    
    // nouvelle propriété dans ma classe, qui stockera à l'intèrieur mes clés & valeurs fournies . On peut aussi la mettre en private puisque cette propriété n'est appelée que dans la classe.
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
    public function setVar($key_name, $value)
    {
        // debug : qu'est-ce que j'ai comme valeur dans $param1 et $param2
        // $param1 contient une chaîne de caractère = 'clé'
        // $param2 contient un tableau indexé et chaque index contient un objet de la classe 'Article' = valeur
        // dump($param1);
        // dump($param2);
        // die;

        // on cible la propriété $varList
        // $varList[] est un tableau associatif dont $param1 est la [clé] et $param2 = la valeur
        // cette variable va stocker tous les tableaux dont on a besoin
        $this->varList[$key_name] = $value; 

    }

    // Je créé une méthode getVar
    // Celle-ci prend en paramètre le nom de la clé à chercher
    // si la clé existe dans mon tableau de variable, je renvoi la valeur
    public function getVar($key_name)
    {
        // si la clé existe dans mon tableau $this->varList, 
        // autrement dit si la clé 'articles' passée en argument de l'appel de getVar() dans home.tpl.php existe dans le tableau 
        if (isset($this->varList[$key_name])) {

            // Alors je lui renvoi la valeur associée
            return $this->varList[$key_name];

        } else {

            // Sinon je lui renvoi une chaîne vide
            return '';
        }
    }

    // Méthode qui affiche une page compléte (header + nav + contenu + footer)
    // ici le paramètre de la méthode prend comme valeur l'argument de l'appel à la méthode, donc le nom du template à afficher
    public function display($display_tpl)
    {
        // ici on appel la méthode include sur l'objet($this) pour afficher les pages
        $this->include('header');
        $this->include($display_tpl);
        $this->include('footer');
    }

    // on peut rendre privée la méthode car elle n'est appelée que dans la classe Templator et pas en dehors dans un autre fichier via l'objet oTemplator->include()
    // include() sera appelée indirectement par la méthode display() à l'intérieur de ma classe
    private function include($tpl_name)
    {   
        // Méthode qui sert à inclure des fichiers de template
        require $this->path . '/' . $tpl_name . '.tpl.php';
    }
    


}