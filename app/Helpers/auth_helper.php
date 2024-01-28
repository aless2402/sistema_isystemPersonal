<?php 
if (!function_exists('usuario_autenticado')) {
    function usuario_autenticado() {
        // Aquí, implementa la lógica para verificar si el usuario está autenticado.
        // Puedes usar la sesión, una base de datos, etc.

        // Ejemplo básico usando la sesión de CodeIgniter:
        $session = \Config\Services::session();
        return $session->get('id_usuario') !== null;
    }
}

