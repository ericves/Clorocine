<?php

$bd = new SQLite3 ("filmes.db");

$titulo   = $bd->escapestring($_POST["titulo"]);
$sinopse   = $bd->escapestring($_POST["sinopse"]);
$nota   = $bd->escapestring($_POST["nota"]);
$poster   = $bd->escapestring($_POST["poster"]);



$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) 
         VALUES (:titulo, :poster, :sinopse, :nota)";

$stmt = $bd->prepare($sql);
$stmt->bindValue(':titulo', $titulo, SQLITE3_TEXT);
$stmt->bindValue(':sinopse', $sinopse, SQLITE3_TEXT);
$stmt->bindValue(':nota', $nota, SQLITE3_FLOAT);
$stmt->bindValue(':poster', $poster, SQLITE3_TEXT);


if ($stmt->execute())
   echo "\nfilme inserido com sucesso\n"; 
else
   echo "\nerro a inserir filme. ". $bd->lastErrorMsg();

   header("Location: galeria.php");

?>