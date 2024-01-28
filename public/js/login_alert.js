// Variable global para almacenar el idioma actual
let currentLanguage = 'es';

const translations = {
    'en': {
        'title': 'Welcome Personal Assistance Access',
        'welcome_message': 'Provide your login credential to proceed all our services',
        'login_username': 'Users',
        'login_password': 'Password',
        'login_button': 'Log in',
    },
    'es': {
        'title': 'Bienvenido Accesso Asistencias Personal',
        'welcome_message': 'Proporcione su credencial de inicio de sesión para proceder todos nuestros servicios',
        'login_username': 'Usuario',
        'login_password': 'Contraseña',
        'login_button': 'Iniciar sesión',
    }
};

function changeLanguage(lang) {
    // Actualiza el idioma actual
    currentLanguage = lang;

    const elements = document.querySelectorAll('[data-translate]');

    elements.forEach((element) => {
        const key = element.getAttribute('data-translate');
        if (translations[lang] && translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });

    const langTitle = lang === 'en' ? 'English' : 'Español';
    Swal.fire({
        icon: 'info',
        title: `Idioma cambiado a ${langTitle}`,
        showConfirmButton: false,
        timer: 1500
    });
}

let successAlertVisible = false;


function showSuccessAlertAndRedirect() {
    if (!successAlertVisible) {
        const username = document.getElementById('login_username').value;
        const password = document.getElementById('login_password').value;

        const translations = {
            en: {
                successTitle: 'Success',
                successMessage: 'You have successfully logged in.',
                confirmButtonText: 'OK'
            },
            es: {
                successTitle: 'Éxito',
                successMessage: 'Has iniciado sesión correctamente.',
                confirmButtonText: 'OK'
            }
        };

        const currentTranslation = translations[currentLanguage] || translations['en'];

        Swal.fire({
            icon: 'success',
            title: currentTranslation.successTitle,
            text: currentTranslation.successMessage,
            confirmButtonText: currentTranslation.confirmButtonText,
            timer: 5000, // 5 segundos en milisegundos (puedes ajustar esto)
            showConfirmButton: false,
            onClose: () => {
                // Vaciar los campos del formulario después de mostrar la alerta de éxito
                document.getElementById('login_username').value = '';
                document.getElementById('login_password').value = '';
            }
        });

        successAlertVisible = true;
    }
}

function validateForm() {
    const username = document.getElementById('login_username').value;
    const password = document.getElementById('login_password').value;

    const translations = {
        en: {
            errorTitle: 'Error',
            errorMessage: 'Please complete all fields.',
            successTitle: 'Success',
            successMessage: 'You have successfully logged in.',
            confirmButtonText: 'OK'
        },
        es: {
            errorTitle: 'Error',
            errorMessage: 'Por favor, complete todos los campos.',
            successTitle: 'Éxito',
            successMessage: 'Has iniciado sesión correctamente.',
            confirmButtonText: 'OK'
        }
    };

    const currentTranslation = translations[currentLanguage] || translations['en'];

    Swal.fire({
        icon: 'error',
        title: currentTranslation.errorTitle,
        text: currentTranslation.errorMessage,
        confirmButtonText: currentTranslation.confirmButtonText
    });

    if (!username || !password) {
        return false;
    }

    showSuccessAlertAndRedirect();

    return true;
}


