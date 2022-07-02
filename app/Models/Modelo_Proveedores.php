<?php namespace App\Models;
use CodeIgniter\Model;

class Modelo_Proveedores extends Model
{
    protected $table = "proveedor";
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','nombre', 'correo', 'telefono','rfc'];

public function obtener($datos){
    $Usuario = $this->db->table("proveedor");
    $Usuario->where($datos);
    return $Usuario->getResultArray();
}
public function obtenerproveedor($data)
    {
        $proveedor = $this->db->table('proveedor');
        $proveedor->where($data);
        return $proveedor->get()->getResultArray();
    }

    public function eliminarproveedor($data)
    {
        $proveedor = $this->db->table('proveedor');
        $proveedor->where($data);
        return $proveedor->delete();
    }

}