<?php

/*
Créer une partie de site protégée par mot de passe

- Vous allez créer une page php permettant de restreindre l'accès à la page
si l'utilisateur n'entre pas le bon mot de passe.
- Sur une page html, vous allez créer un formulaire permettant à l'utilisateur d'entrer le mot de passe,
pointez le formulaire vers la page php protégée.
- La page php va vérifier que le mot de passe entré par l'utilisateur corresponde
au mot que vous avez défini avec php pour protéger la page.
- Si le mot de passe est bon, afficher le contenu protégé, sinon afficher un message d'erreur.
- Ajoutez un css à vos pages.
*/

if (isset($_POST['password']))
{
    if ($_POST['password'] ==  "coucou")
    {
        echo "Bravo, vous avez entré le bon mot de passe.";
        echo "<br>";
        echo "<a href = 'http://www.google.com'>Google</a>";
    }
    else
    {
        echo "Erreur";
    }
}
