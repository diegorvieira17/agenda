<?php

include 'libs/bibliotecas/bd.php';
include 'libs/bibliotecas/agenda.php';

$bd = new Bd('localhost','root','123456789','php_agenda');
$bd->connect();

$agenda = new Agenda($bd);
print_r($agenda->listar());
$agenda->remover(6);

?>