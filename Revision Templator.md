# Atelier oBlog - class Templator S04E04
VIDEO correction : S04E05 Christophe -> https://drive.google.com/drive/folders/1AIvyoN57ku72GNzuJ7ls5ls9RIoZWbFd
Correction       : S04E05 Christophe S04E05
---

## Objectif

*video 1 : Blue -1-Matin correction.mp4*
---------------------------------------

Créer la classe PHP qui va permettre de gérer le système de _templates_ du site oBlog

1°/ Au vu du fichier index.php, nous devons créer une class Templator dans le dossier 'inc' -> 'classes'

    Ligne 13 du fichier index.php on instancie un objet de la classe Templator.

    - Quand on instancie un objet d'une classe avec le mot-clé 'new' on construit indirectement une méthode.
      Cette méthode est appelée par PHP, c'est une méthode magique. C'est la méthode "__construct()".

    Récupérer le chemin dans l'argument qui génére le constructeur avec une méthode __construct.
    

2°/ video -> 00:20:35
    4- Transmission des données au système de Templates
    

3°/ video -> 00:46:00
    appel méthode _getvar()_ dans fichier `views/home.tpl.php` ligne 10
    appel méthode _display()_ dans fichier `index.php` ligne 29
    5- Afficher la template de la home _display()_ et créer la méthode _getVar()_
    

4°/ video -> 01:12:00
    Gérer l'appel à la méthode _include()_ dans `views/home.tpl.php` ligne 34

5°/ video -> 01:28:30
    les auteurs ne s'affichent pas dans les articles
    Correction faute d'orthographe dans le fichier `Article.php` ligne 13 'auhtor au lieu de author'

6°/ video -> 01:34:45
    nouvelle page 'contact' sur le site 
