<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['nombre', 'puesto', 'correo', 'nombre_usuario', 'login_password', 'rol', 'status'];

    // Agrega otras funciones según sea necesario

    protected function beforeInsert(array $data)
    {
        if (isset($data['data']['login_password'])) {
            $data['data']['login_password'] = password_hash($data['data']['login_password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        // Puedes agregar acciones adicionales antes de actualizar si es necesario
        return $data;
    }

    // Función para verificar las credenciales durante el inicio de sesión
    public function verifyCredentials($nombre_usuario, $password)
    {
        // Obtener el usuario por nombre de usuario
        $usuario = $this->where('nombre_usuario', $nombre_usuario)
            ->where('status', 1) // Asegura que el usuario esté activo
            ->first();

        // Verificar si el usuario existe y las contraseñas coinciden
        if ($usuario && password_verify($password, $usuario['login_password'])) {
            return $usuario;
        }

        return null; // Si no se encuentra el usuario o las contraseñas no coinciden
    }
}