<!--
TP BLOG v1

Coté BDD : créer la table

Coté App :
    - (/?page=home)                 Accueil : liste les titres des articles avec un lien pour les lire
    - (/?page=read-article&id=XX)   Une page pour lire un article de blog complet
    - (/?page=list-articles)        Une page pour lister les articles en version "admin" (avec un lien pour créer, éditer, effacer)
    - (/?page=create-article)       Une page pour créer un article via un formulaire
    - (/?page=update-article&id=XX) Une page pour modifier un article via un formulaire
    - (/?page=delete-article&id=XX) Une page qui efface un article spécifié
  -->
<?php

$query = $database->query('SELECT * FROM `article`');

while (($data = $query->fetch())){

        echo $data['customerName'];
        echo $data['contactLastName'];

        }
?>
