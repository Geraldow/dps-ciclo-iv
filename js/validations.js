/**
 * FIRST STEP: LISTEN O DETECT THE DATA JOIN
 * IN THE NAVEGATOR
 */

window.addEventListener('DOMContentLoaded', function() {
    /**
     * SECOND STEP: WE CREATE A CONSTANT THAT
     * ENABLE STORE O LINK THAT OUR WRITE ON EACH INPUT
     */

    const NAMES = document.getElementById('nombres');
    const DNI = document.getElementById('dni');
    const ADDRESS = document.getElementById('direc');
    const RESIDENCE = document.getElementById('residencia');
    const CELLPHONE_ATTORNEY = document.getElementById('celAp');
    const CELLPHONE_ALUMN = document.getElementById('celAl');
    // const email = document.getElementById('correo');
    const USERNAME = document.getElementById('nomUsu');
    const PASSWORD = document.getElementById('contrasena')

    /**
     * THIRD STEP: WE SET AN EACH CONSTANT FUNCTION
     */
    NAMES.addEventListener('input', validationNames);
    DNI.addEventListener('input', validationDni);
    ADDRESS.addEventListener('input', validationAddress);
    RESIDENCE.addEventListener('input', validationAddress);
    CELLPHONE_ATTORNEY.addEventListener('input', validationCellphone);
    CELLPHONE_ALUMN.addEventListener('input', validationCellphone);
    // email.addEventListener('input', validationEmail);
    USERNAME.addEventListener('input', validationUsername);
    PASSWORD.addEventListener('input', validationPassword);

    /**
     * QUARTER STEP (FINAL): FINALLY, WE CREATE EACH ONE 
     * OF THE FUNCTIONS
     */
    function validationNames(event) {
        const USER_KEYBOARD_ACTION_ON_INPUT_NAME = event.data;
        const REGEX_NAME = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$/;

        if (!REGEX_NAME.test(USER_KEYBOARD_ACTION_ON_INPUT_NAME)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "!El nombre solo debe contener letras!",
                footer: '<a href="#">Why do I have this issue?</a>'
            });
        }
    }

    function validationDni(event) {
        const USER_KEYBOARD_ACTION_ON_INPUT_DNI = event.data;
        const REGEX_DNI = /^[0-9]+$/;

        if (!REGEX_DNI.test(USER_KEYBOARD_ACTION_ON_INPUT_DNI)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡El DNI solo debe contener números!",
                footer: '<a href="#">¿Por qué sucede esto?</a>'
            });
        }
    }

    function validationAddress(event) {
        const USER_KEYBOARD_ACTION_ON_INPUT_ADDRESS = event.data;
        const REGEX_ADDRESS = /^[a-zA-Z0-9\s\-\#\.]+$/;

        if (!REGEX_ADDRESS.test(USER_KEYBOARD_ACTION_ON_INPUT_ADDRESS)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡La dirección solo debe contener letras y números",
                footer: '<a href="#">¿Por qué sucede esto?</a>'
            });
        }
    }
    function validationUsername(event) {
        const USER_KEYBOARD_ACTION_ON_INPUT_USERNAME = event.data;
        const REGEX_USERNAME = /^[a-zA-Z0-9_-]+$/;

        if (!REGEX_USERNAME.test(USER_KEYBOARD_ACTION_ON_INPUT_USERNAME)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡El nombre de usuario solo debe contener letras y números!",
                footer: '<a href="#">¿Por qué sucede esto?</a>'
            });
        }
    }

    function validationPassword(event) {
        const USER_KEYBOARD_ACTION_ON_INPUT_PASSWORD = event.data;
        const REGEX_PASSWORD = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;

        if (!REGEX_PASSWORD.test(USER_KEYBOARD_ACTION_ON_INPUT_PASSWORD)) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡La contraseña debe ser mayor a 8 y menor a 15 dígitos!",
                footer: '<a href="#">¿Por qué sucede esto?</a>'
            });
        }
    }
})  