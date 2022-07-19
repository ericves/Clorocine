<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
    echo "\ntabela filmes apagada\n";


$sql = "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
    ";

if ($bd->exec($sql))
    echo "\ntabela filmes criada\n";
else
    echo "\nerro ao criar tabela filmes\n";

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    'Vingadores',
    'https://www.themoviedb.org/t/p/original/89QTZmn34iwXYeCpVxhC9UrT8sX.jpg',
    'I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.',
    9,7
    )";

if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else
    echo "\nerro ao inserir filmes\n";

?>