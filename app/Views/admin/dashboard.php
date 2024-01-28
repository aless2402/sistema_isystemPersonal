<?= $this->extend('admin/layout/template') ?>

<?= $this->section('header') ?>
    <!-- Contenido específico del header de admin -->
    <h1>Bienvenido al Panel de Administración</h1>
    <p>Nombre de Administración: <?= $usuario_nombre ?></p>
    <p>Rol de Administración: <?= $usuario_rol ?></p>
<?= $this->endSection() ?>

<!-- Contenido específico del dashboard -->
<div class="container">
    <h2>Panel de Administración</h2>
    <h1>Hello, <?= session()->get('nombre') ?></h1>
    <!-- Tu contenido específico aquí -->
</div>

<?= view('admin/layout/admin_footer') ?>