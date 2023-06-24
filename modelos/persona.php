<?php
class Persona
{

public $Id;
public $Nombre;
public $Apellido;
public $FechaNacimiento;
public $ObraScocial;
public $ListDocumentos = array();

public function MostrarDatos()
{
    echo '------------------------------------------------------------------- <br>' ;
    echo 'datos de la persona<br>' ;
    echo '------------------------------------------------------------------- <br>' ;


echo 'Nombre de la persona ' . $this->Nombre  .  '<br>';
echo 'apellido ' . $this->Apellido  .  '<br>';
echo 'fecha de nacimiento ' . $this->FechaNacimiento  .  '<br>';
echo 'razon social' . $this->ObraScocial->RazonSocial  .  '<br>';
echo 'sitio web de la obra social' . $this->ObraScocial->SitioWeb  .  '<br>';




foreach ($this->ListDocumentos as $d) {
echo 'Id' .  $d->Id . '<br>';
echo 'numero' .  $d->Numero . '<br>';
echo 'habilitado' .  $d->Habilitado . '<br>';
echo 'tipo documento' .  $d->TipoDocumento->Descripcion. '<br>';


}
}

}
