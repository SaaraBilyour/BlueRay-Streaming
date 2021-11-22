<?php
    define("SERVEUR","localhost");
    define("USAGER","root");
    define("PASSE","");
    define("BD","a21_299_bdfilms");
    $connexion = new mysqli(SERVEUR,USAGER,PASSE,BD);
    if ($connexion->connect_errno) {
		echo "Probleme de connexion au serveur de bd";
		exit();
	}
?>