<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/registrarusuario', 'Controlador_Login::registrar');
$routes->get('/olvidemicontraseña', 'Controlador_Login::olvidemicontraseña');
$routes->post('/pregunta', 'Controlador_Login::pregunta');
$routes->post('/cambiarcontraseña', 'Controlador_Login::cambiarcontraseña');
$routes->post('/Iniciar_sesion', 'Controlador_Login::Iniciar_sesion');
$routes->get('/index', 'Controlador_Login::index');
$routes->get('/inicio', 'Controlador_Contenido::index');
$routes->get('/tablasdom', 'Controlador_Contenido::TablasDOM');
$routes->get('/tablasdom2', 'Controlador_Contenido::TablasDOM2');
$routes->get('/tablasdom3', 'Controlador_Contenido::TablasDOM3');

$routes->get('/crear_usuario', 'Controlador_Contenido::crear_usuario');
$routes->get('/editar_usuario/(:num)', 'Controlador_Contenido::editar_usuario/$1');
$routes->post('/Registrar_usuario', 'Controlador_Login::Registro_usuario');
$routes->post('/actualizar_usuario', 'Controlador_Contenido::actualizar_usuario');
$routes->get('/eliminar_usuario/(:num)', 'Controlador_Contenido::eliminar_usuario/$1');

$routes->get('/crear_producto', 'Controlador_Contenido::crear_producto');
$routes->get('/editar_producto/(:num)', 'Controlador_Contenido::editar_producto/$1');
$routes->post('/Registrar_producto', 'Controlador_Contenido::Registro_producto');
$routes->post('/actualizar_producto', 'Controlador_Contenido::actualizar_producto');
$routes->get('/eliminar_producto/(:num)', 'Controlador_Contenido::eliminar_producto/$1');

$routes->get('/crear_proveedor', 'Controlador_Contenido::crear_proveedor');
$routes->get('/editar_proveedor/(:num)', 'Controlador_Contenido::editar_proveedor/$1');
$routes->post('/Registrar_proveedor', 'Controlador_Contenido::Registro_proveedor');
$routes->post('/actualizar_proveedor', 'Controlador_Contenido::actualizar_proveedor');
$routes->get('/eliminar_proveedor/(:num)', 'Controlador_Contenido::eliminar_proveedor/$1');

$routes->get('/contacto', 'Controlador_Contenido::contacto');
$routes->get('/perfil', 'Controlador_Contenido::perfil');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
