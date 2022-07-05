<?php

namespace App\Controllers;

use App\Models\Modelo_Login;
use App\Models\Modelo_Usuarios;

class Controlador_Login extends BaseController
{

    public function index()
    {
        return view('Contenido/Index');
    }

    public function registrar()
    {
        return view('Login/Registrar_usuario');
    }

    public function olvidemicontraseña()
    {
        return view('Login/Olvide_mi_contraseña');
    }

    public function pregunta()
    {
        return view('Login/Pregunta_de_seguridad');
    }

    public function cambiarcontraseña()
    {
        return view('Login/Cambiar_contraseña');
    }

    public function Registro_usuario()
    {
        $Modelo_Login = new Modelo_Login();

        $Modelo_Login->insert(
            [
                'nombre' => $this->request->getPost('nombre'),
                'correo' => $this->request->getPost('correo'),
                'contraseña' => $this->request->getPost('contraseña'),
            ]
        );

        $img = $this->request->getFile('imagenproducto');
        $img->move('usuarios', $this->request->getPost('nombre').'.png' );

        
        return view('Inicio_de_sesion');
    }
    public function Registro_producto()
    {
        $Modelo_Login = new Modelo_Login();

        $Modelo_Login->insert(
            [
                'nombre' => $this->request->getPost('nombre'),
                'correo' => $this->request->getPost('correo'),
                'contraseña' => $this->request->getPost('contraseña'),
            ]
        );
         return redirect()->back();
    }
    public function Registro_proveedor()
    {
        $Modelo_Login = new Modelo_Login();

        $Modelo_Login->insert(
            [
                'nombre' => $this->request->getPost('nombre'),
                'correo' => $this->request->getPost('correo'),
                'contraseña' => $this->request->getPost('contraseña'),
            ]
        );
         return redirect()->back();
    }
    public function Iniciar_sesion()
    {
        $modelo = new Modelo_Usuarios();

        $result = $modelo->where('correo',$this->request->getVar('correo'))->where('contraseña',$this->request->getVar('contraseña'))->first();

        if($result !=null)
        {
            $modelo = new Modelo_Usuarios();

            $datos = $modelo->where('correo',$this->request->getVar('correo'))->first();

            $session = session();

            $session->set($datos);

            return view('Contenido/Index');
        }
        else
        {
            return view('Inicio_de_sesion');
                
        }
        
    }
}
