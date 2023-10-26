document.getElementById("registrarseButton").addEventListener("click", function() {
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let email = document.getElementById("email").value;
    let password1 = document.getElementById("contraseña").value;
    let password2 = document.getElementById("confirmarcontraseña").value;

    if (password1==password2){
        alert("Los datos se guardaron correctamente");
        window.location.href="ingresar.html";
    }else{
        alert("las contraseñas no coinciden. Por favor, verificalas.")
    }
});