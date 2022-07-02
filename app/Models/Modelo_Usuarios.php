<?php namespace App\Models;
use CodeIgniter\Model;

class Modelo_Usuarios extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nombre', 'correo', 'contraseña', 'rol'];

public function obtenerdatos($datos){
    $Usuario = $this->db->table("usuarios");
    $Usuario->where($datos);
    return $Usuario->getResultArray();
}

public function obtenerusuario($data)
    {
        $producto = $this->db->table('usuarios');
        $producto->where($data);
        return $producto->get()->getResultArray();
    }

    public function eliminarusuario($data)
    {
        $producto = $this->db->table('usuarios');
        $producto->where($data);
        return $producto->delete();
    }

}