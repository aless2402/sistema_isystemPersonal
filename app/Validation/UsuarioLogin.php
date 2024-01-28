<?php

namespace App\Validation;

use App\Models\UsuarioModel;

class UsuarioLogin
{
    public function validateUsuarioLogin(string $str, string $fields, array $data)
    {
        $model = new UsuarioModel();
        $usuario = $model->where('nombre_usuario', $data['nombre_usuario'])
                        ->first();

        if (!$usuario) {
            return false;
        }

        return password_verify($data['login_password'], $usuario['login_password']);
    }
}
