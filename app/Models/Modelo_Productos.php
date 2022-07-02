<?php namespace App\Models;
use CodeIgniter\Model;

class Modelo_Productos extends Model
{
    protected $table = "productos";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nombre', 'tipo', 'estado','precio'];

public function obtenerdatos($datos){
    $Usuario = $this->db->table("productos");
    $Usuario->where($datos);
    return $Usuario->getResultArray();
}

public function obtenerproducto($data)
    {
        $producto = $this->db->table('productos');
        $producto->where($data);
        return $producto->get()->getResultArray();
    }

    public function eliminarproducto($data)
    {
        $producto = $this->db->table('productos');
        $producto->where($data);
        return $producto->delete();
    }

}