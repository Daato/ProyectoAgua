<?php namespace App\Models;

use CodeIgniter\Model;

class Modelo_Login extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'correo', 'contraseña', 'rol'];


}