<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function dashboard()
    {
        // Verificar la sesión de usuario
        $session = session();
        $usuario = null;

        // Asegurarse de que la sesión está activa
        if ($session->get('id_usuario')) {
            // Obtener información del usuario desde la sesión
            $data['usuario_nombre'] = $session->get('nombre_usuario');
            $data['usuario_rol'] = $session->get('rol');
            
            // Puedes agregar lógica adicional para obtener más detalles del usuario si es necesario
            
            // Definir $usuario para su uso posterior
            $usuario = [
                'id_usuario' => $session->get('id_usuario'),
                'nombre_usuario' => $data['usuario_nombre'],
                'rol' => $data['usuario_rol'],
                // Agregar más detalles si es necesario
            ];
        }

        // Verificar si $usuario está definido antes de acceder a sus propiedades
        if ($usuario) {
            // Cargar vistas del panel de administración
            return view('admin_dashboard_view');
        }
    }
}