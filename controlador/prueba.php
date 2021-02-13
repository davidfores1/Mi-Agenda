<?php

require '../modelo/modelo.agenda.php';

if(isset($_GET['editar'])){

$id = $_GET['editar'];
$agenda = Agenda::soloId($id);
$array = $agenda->selectId();

echo json_encode($array);
} 

