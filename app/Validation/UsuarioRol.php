<?php

namespace App\Validation;

use App\Models\UsuarioModel;

class UsuarioRol
{
    public function validateUsuarioRol(string $str, string $fields, array $data)
    {
        $model = new UsuarioModel();
        $usuario = $model->where('nombre_usuario', $data['nombre_usuario'])
            ->first();

        if (!$usuario) {
            return false;
        }

        // Lógica de validación para el rol del usuario según tus necesidades
        // Aquí puedes verificar si el rol del usuario cumple con ciertos criterios.

        // Ejemplo: Solo permitir roles específicos
        $allowedRoles = ['admin', 'usuario'];
        if (!in_array($usuario['rol'], $allowedRoles)) {
            return false;
        }

        return true;
    }
}
