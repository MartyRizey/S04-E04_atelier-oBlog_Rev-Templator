# Atelier

## Objectif

Créer la classe PHP qui va permettre de gérer le système de _templates_ du site oBlog

## Rappels

- pour ne pas répéter le code HTML d'un site, on factorise et on le place dans un fichier
- ensuite, on  inclut les différents fichiers dans le bon ordre et au final, on a un code HTML correct envoyé au navigateur
- ces fichiers contenant le code HTML "découpés" s'appellent des *templates*
- une classe contient des propriétés et des méthodes
- chaque propriété et méthode peut être publique (open bar) ou privée (uniquement pour la classe) selon son utilisation/but

## Code actuel

- lire les fichiers fournis
- les classes se situent dans le dossier `inc/classes`
- les templates se situent dans le dossier `inc/views`

## Exercice

- écrire la classe permettant d'inclure les fichiers de templates
- la méthode `display` permet de définir quelle page "centrale" est à afficher, le contenu autour étant toujours le même (quelque soit la page)
- à cause de la portée des variables, les variables _globales_ créés dans `index.php` ne sont pas disponibles dans le contexte _local_ des méthodes et des fonctions
- les variables nécessaires à l'affichage doivent donc être stockées et gérées par le système de _templates_
- pour fonctionner, le système de _templates_ doit savoir dans quel répertoire sont stockés les fichiers de templates

### En cas de blocages

Voici une liste de plusieurs aides/spoilers permettant de vous débloquer.

:warning: Cependant, le but de cet atelier est d'arriver à se débrouiller avec le code existant.  
Donc essayez tant bien que mal de comprendre ce qui doit être fait, de le noter dans des commentaires, et d'essayer de le coder, avant de regarder les aides.

<details><summary>Aide sur le répertoire des fichiers de templates</summary>

- la classe a besoin de stocker en interne le chemin jusqu'au dossier de template
- mais cette information peut changer d'un projet à un autre
- il faut donc spécifier ce répertoire à l'instanciation de la classe

</details>

<details><summary>Aide sur les variables gérées par le système de templates</summary>

- déclarer la méthode `setVar` dans la classe
    - permet d'ajouter une variable au système
    - elle prendra 2 arguments obligatoires :
        - le nom de la variable
        - la valeur de la variable
- déclarer la méthode `getVar` dans la classe
    - permet de retourner la valeur d'une variable
    - elle prendra 1 argument obligatoire
        - le nom de la variable
- Où stocker les variables ajoutées ?
    - il faut que ces variables soient disponibles dans toutes les méthodes de la classe
    - il faut pouvoir stocker un nombre illimité de variables
    - il faut pouvoir retrouver la valeur d'une variable grâce à son nom

</details>

<details><summary>Aide sur l'affichage des templates</summary>

- déclarer la méthode `display` dans la classe
    - permet d'afficher le code HTML complet pour une page donnée
    - elle prendra 1 argument obligatoire
        - le nom de la template
- pour afficher une page complète, il ne faut pas oublier d'inclure `header` et `footer` :wink:
- le nom de la template permet de connaitre le nom du fichier à inclure au sein du répertoire (fourni à l'instanciation de la classe)

</details>

<details><summary>Spoiler structure de la classe</summary>

```php
<?php

class Templator {
    // TODO créer les propriétés

    public function __construct($directory) {
        // TODO
    }

    public function setVar($varName, $varValue) {
        // TODO
    }

    public function getVar($varName) {
        // TODO
    }

    public function include($tplName) {
        // TODO include le fichier de template demandé
    }

    public function display($tplName) {
        // TODO inclure les fichiers de template (header, templateCourante, footer)
    }
}
```

</details>

<details><summary>Spoiler récupération du répertoire</summary>

```php
<?php

class Templator {
    // Propriété stockant le répertoire des fichiers de templates
    public $directory;
    // [...]

    public function __construct($directory) {
        $this->directory = $directory;
    }

    // [...]
}
```

</details>

## Bonus

- ajouter le code suivant à la fin du fichier `index.php`
- il ne doit générer aucune erreur
- à vous donc d'ajouter les vérifications nécessaires dans votre code afin d'éviter les erreurs

<details><summary>Code à placer dans index.php</summary>

```php

// Accès à une variable inexistante dans le système de templates
echo $this->getVar('404notfound');

// Demande au système de templates d'afficher une template inexistante
$oTemplator->display('templateToto');

```

</details>

## Super Bonus

- s'assurer de ne répéter aucun bout de code (ne pas hésiter à créer des méthodes utilisables uniquement par la classe)
- s'assurer que seules les propriétés et méthodes nécessaires sont publiques, les autres sont privées (:warning: tout a volontairement été mis en `public` dans les spoilers)
