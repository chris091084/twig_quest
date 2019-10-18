<?php

require_once  '../vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('../src/View/');



$twig = new Twig_Environment($loader);




$products = ['pomme', 'poire', 'fraise', 'banane', 'kiwi'];






echo $twig->render('Index.html.twig', ['products'=>$products]);

