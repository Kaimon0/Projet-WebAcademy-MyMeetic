let connect = document.getElementById('connect');

connect.addEventListener('submit', event => {

    event.preventDefault();

    const mail = connect.email.value;
    const pswd = connect.pwd.value;

    const validated = validation(mail, pswd);

    if (validated) {
        window.location.href = "../vues/mon_compte.php";
    } else {
        alert("E-mail ou mot de passe incorrecte");
    }

    function validation(mail, pswd) {

        if (mail === 'email@email.fr' && pswd === 'pswd') {
            return true;
        } else {
            return false;
        }
    }

});