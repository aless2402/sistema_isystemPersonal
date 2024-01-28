<nav>
    <div class="usuario-info">
        <p>Bienvenido,
            <?php echo $usuario_nombre; ?>
        </p>
        <p>Rol:
            <?php echo ($usuario_rol == 1) ? 'Admin' : 'Usuario'; ?>
        </p>
    </div>
</nav>