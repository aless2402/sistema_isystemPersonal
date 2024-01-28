<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use App\Controllers\BaseController;


class LoginController extends BaseController
{
    public function index()
    {
        return view('login_view');
    }
    public function doLogin()
    {
        $validationRules = [
            'nombre_usuario' => [
                'rules' => 'required|validateUsuarioLogin',
                'errors' => [
                    'validateUsuarioLogin' => 'Credenciales de inicio de sesión no válidas.',
                ],
            ],
            'password' => 'required',
            // Otros campos y reglas de validación...
        ];

        $validation = \Config\Services::validation();

        // Aplicar las reglas de validación
        if (!$this->validate($validationRules)) {
            // Manejar errores de validación
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Lógica de inicio de sesión si la validación es exitosa
        // ...

        return redirect()->to('/admin/dashboard');
    }

    public function doAdminLogin()
    {
        // Recuperar datos del formulario
        $nombre_usuario = $this->request->getPost('nombre_usuario');
        $password = $this->request->getPost('login_password');

        // Validar credenciales en el modelo
        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->verifyCredentials($nombre_usuario, $password);

        if ($usuario) {
            // Credenciales válidas, crear sesión y redirigir
            $session = session();
            $session->set('usuario_id', $usuario['id_usuario']);
            $session->set('nombre_usuario', $usuario['nombre_usuario']);
            $session->set('rol', $usuario['rol']);

            // Redirigir según el rol
            switch ($usuario['rol']) {
                case 1:
                    return redirect()->to(base_url('/admin/dashboard'));
                // No es necesario el break después de un return
                // ... otros casos ...
                default:
                    return redirect()->to(base_url('/admin/dashboard'));
            }
        } else {
            // Credenciales no válidas, manejar según sea necesario
            // Por ejemplo, puedes establecer un mensaje de error y redirigir de nuevo al formulario de inicio de sesión
        }
    }

}