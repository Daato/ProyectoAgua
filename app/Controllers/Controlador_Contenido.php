<?php

namespace App\Controllers;

use App\Models\Modelo_Login;
use App\Models\Modelo_Usuarios;
use App\Models\Modelo_Productos;
use App\Models\Modelo_Proveedores;

class Controlador_Contenido extends BaseController
{

    public function index()
    {
        return view('Contenido/Index');
    }
    public function contacto()
    {
        return view('Contenido/contacto');
    }
    public function perfil()
    {
        return view('Contenido/perfil');
    }

    public function tablasDOM()
    {
        $modelo = new Modelo_Usuarios();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM',$data);
    }
    public function tablasDOM2()
    {
        $modelo = new Modelo_Productos();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM2',$data);
    }
    public function tablasDOM3()
    {
        $modelo = new Modelo_Proveedores();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM3',$data);
    }
    public function crear_usuario()
    {
        return view('Contenido/usuarios_crear');
    }
    public function editar_usuario($id)
    {
        $data = ['id' => $id];

        $crud = new Modelo_Usuarios();
        $respuesta = $crud->obtenerusuario($data);

        $datos = ['datos' => $respuesta];

        return view('Contenido/usuarios_editar',$datos);
    }
    public function crear_producto()
    {
        return view('Contenido/productos_crear');
    }
    public function editar_producto($id)
    {
        $data = ['id' => $id];

        $crud = new Modelo_Productos();
        $respuesta = $crud->obtenerproducto($data);

        $datos = ['datos' => $respuesta];

        return view('Contenido/productos_editar',$datos);
    }
    public function crear_proveedor()
    {
        return view('Contenido/proveedores_crear');
    }
    public function editar_proveedor($id)
    {
        $data = ['id' => $id];

        $crud = new Modelo_Proveedores();
        $respuesta = $crud->obtenerproveedor($data);

        $datos = ['datos' => $respuesta];

        return view('Contenido/proveedores_editar',$datos);
    }
    public function actualizar_usuario()
    {
        $id = $this->request->getVar('id');

        if($id != null)
        {   
            $modelo = new Modelo_Usuarios();

            $data = [
                'id' => $this->request->getPost('id'),
                'nombre' => $this->request->getPost('nombre'),
                'correo' => $this->request->getPost('correo'),
                'contraseña' => $this->request->getPost('contraseña'),
                ];

            $modelo->update($id, $data);
            $modelo = new Modelo_Usuarios();
            $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM',$data);
        }
        else
        {
            return redirect()->back();
                
        } 
    }
    public function actualizar_producto()
    {
        $id = $this->request->getVar('id');

        if($id != null)
        {   
            $modelo = new Modelo_Productos();

            $data = [
                'id' => $this->request->getPost('id'),
                'nombre' => $this->request->getPost('nombre'),
                'tipo' => $this->request->getPost('tipo'),
                'descripcion' => $this->request->getPost('descripcion'),
                'precio' => $this->request->getPost('precio'),
                ];

            $modelo->update($id, $data);
            $modelo = new Modelo_Productos();
            $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM2',$data);
        }
        else
        {
            return redirect()->back();
                
        } 
    }
    public function actualizar_proveedor()
    {
        $id = $this->request->getVar('id');

        if($id != null)
        {   
            $modelo = new Modelo_Proveedores();

            $data = [
                'id' => $this->request->getPost('id'),
                'nombre' => $this->request->getPost('nombre'),
                'telefono' => $this->request->getPost('telefono'),
                'rfc' => $this->request->getPost('rfc'),
                ];

            $modelo->update($id, $data);
            $modelo = new Modelo_Proveedores();
            $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM3',$data);
        }
        else
        {
            return redirect()->back();
                
        } 
    }
    public function eliminar_usuario($id)
    {
        $data = ['id' => $id];

        $modelo = new Modelo_Usuarios();
        $respuesta = $modelo->eliminarusuario($data);

        $datos = ['datos' => $respuesta];

        $modelo = new Modelo_Usuarios();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM',$data);
    }
    public function eliminar_producto($id)
    {
        $data = ['id' => $id];

        $modelo = new Modelo_Productos();
        $respuesta = $modelo->eliminarproducto($data);

        $datos = ['datos' => $respuesta];

        $modelo = new Modelo_Productos();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM2',$data);
    }
    public function eliminar_proveedor($id)
    {
        $data = ['id' => $id];

        $modelo = new Modelo_Proveedores();
        $respuesta = $modelo->eliminarproveedor($data);

        $datos = ['datos' => $respuesta];

        $modelo = new Modelo_Proveedores();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM3',$data);
    }

    public function Registro_producto()
    {

        $Modelo_Productos = new Modelo_Productos();

        $Modelo_Productos->insert(
            [
                'nombre' => $this->request->getPost('nombre'),
                'tipo' => $this->request->getPost('tipo'),
                'descripcion' => $this->request->getPost('descripcion'),
                'precio' => $this->request->getPost('precio'),
            ]
        );

        $img = $this->request->getFile('imagenproducto');
        $img->move('imagenes', $this->request->getPost('nombre').'.png' );

        
        $modelo = new Modelo_Productos();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM2',$data);
    }
    public function Registro_proveedor()
    {

        $Modelo_Productos = new Modelo_Proveedores();

        $Modelo_Productos->insert(
            [
                'nombre' => $this->request->getPost('nombre'),
                'tipo' => $this->request->getPost('correo'),
                'telefono' => $this->request->getPost('telefono'),
                'rfc' => $this->request->getPost('rfc'),
            ]
        );

        $modelo = new Modelo_Proveedores();
        $data['productos'] = $modelo->orderBy('id', 'DESC')->findAll(); 

        return view('Contenido/TablasDOM3',$data);
    }
}




    
    