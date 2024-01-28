<?= view('./admin_header.php') ?>

<?= view('./admin_sidebar.php') ?>
<?= view('./admin_nav.php') ?>

<?= $this->renderSection('header') ?>

<?= $this->renderSection('content') ?>

<?= view('./admin_footer') ?>