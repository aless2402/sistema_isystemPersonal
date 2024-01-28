<?php

// App\Filters\AuthFilter.php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Verificar si el usuario está autenticado
        $session = session();

        if (!$session->has('usuario_id')) {
            // Redirigir a la página de inicio de sesión si no está autenticado
            return redirect()->to('/');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Puedes realizar acciones después de la ejecución de la acción del controlador
    }
}