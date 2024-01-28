<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISystems Personal::Acess</title>
    <link rel="icon" href="<?=base_url('isystem_gmb/isystems_gmbh_logo.ico')?>" type="image/ico">
    <link rel="stylesheet" href="<?=base_url('css/login.css')?>">
    <!--links to cdn css and js to script-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <!-- Font Awesome Icons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/fontawesome.min.js"></script>






    <!-- SweetAlert2  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

</head>
<body>
    <section class="side">
        <img src="<?=base_url('isystem_gmb/Outsource-IT-Help-Desk-Services.png')?>" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title" data-translate="title">Bienvenido Acceso Asistencias Personal</p>
            <div class="separator"></div>
            <p class="welcome-message" data-translate="welcome_message">Proporcione su credencial de inicio de sesión para proceder todos nuestros servicios.</p>

            <!-- Create to form login and button for helpdesk admin  -->
            <form action="/admin/dashboard" method="POST"  class="login-form" id="myForm" onsubmit="return validateForm()" >
                <div class="form-control">
                    <input type="text" placeholder="Usuario" data-translate="login_username" name="login_username" id="login_username">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Contraseña" data-translate="login_password" name="login_password" id="login_password">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <input type="hidden" name="enviar" class="form-control" value="si">
                <button type="submit" class="submit" data-translate="login_button">Iniciar sesion</button>
            </form>
            <div class="lang-menu">
                <div class="selected-lang">
                    <img onclick="changeLanguage('en')" src="https://flagsapi.com/US/flat/32.png" alt="English Flag" class="flag-us">
                    <img onclick="changeLanguage('es')" src="https://flagsapi.com/ES/flat/32.png" alt="Spanish Flag" class="flag-es">
                </div>
            </div>
        </div>

    </section>
    <script src="<?=base_url('js/login_alert.js')?>"></script>
</body>

</html>