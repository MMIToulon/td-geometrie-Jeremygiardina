<?php
// !!!!!!!! INSTANCIATION    //
// !!!!!!!  OBJETS



	// C'est un fichier de tests "unitaires" il sert a tester toutes les méthodes de la classe une par une

	// pour afficher les erreurs pour ce script 
	ini_set('display_errors','1');

	// inclure le fichier contenant la 
	// définition de la classe
	require_once("src/Produit.php");
	require_once("src/ProduitKilo.php");
	require_once("src/ProduitUnit.php");

	// instanciation
	$PK = new ProduitKilo(10, 50);
 	$PU = new ProduitUnit(16, 70);
	// instanciation
	$PK2 = new ProduitKilo(10, 50);
 	$PU2 = new ProduitUnit(16, 70);
	// instanciation
	$PK3 = new ProduitKilo(10, 50);
 	$PU4 = new ProduitUnit(16, 70);

    // var_dump($P1);
    // var_dump($P2);

    echo $PK;
    echo $PU;

    $PK->setPrix(6);

    echo $PK->Calculer()."€";
    echo $PU->Calculer()."€";
    

    $PK->setPrix(6);
    $PK->setKilo(50);
    $PU->setPrix(9);
    $PU->setNombre(45);


    echo $PK;
    echo $PU;

    echo $PK->Calculer()."€";
    echo $PU->Calculer()."€";


    echo Produit::nbInstance()." Produit ont été créés";
    echo "<br>Dont <br>".ProduitKilo::nbInstance()." Produit au kilo";
    echo "<br>Et<br>".ProduitUnit::nbInstance()." Produit à l'unité";

?>