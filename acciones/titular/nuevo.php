<?php

require_once ''

$json = file_get_contents('php://input', true);
// Convertir el body en un objeto
$req = json_decode($json);

$res = new NuevoResponse();
$res->IsOk = true;

if ($req->titular->Direccion == null) {
    $res->IsOk = false;
    $res->Mensaje = 'La dirección es obligatoria';
}

if ($req->Titular->NroDocumento == null) {
    $res->IsOk = false;
    $res->Mensaje = $res->Mensaje . 'El número de documento es obligatorio';
}

if ($req->Titular->ApellidoNombre == null) {
    $res->IsOk = false;
    $res->Mensaje = $res->Mensaje . 'El nombre y apellido es obligatorio';
}

if ($res->IsOk == true) {
    $res->IsOk = true;
    $res->Mensaje = 'Titular agregado correctamente';
}
