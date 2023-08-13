<?php
$loader = new Twig\Loader\FilesystemLoader('views');
$twig = new Twig\Environment($loader);
echo $twig->render('book.twig', ['books' => $rows]);
?>
