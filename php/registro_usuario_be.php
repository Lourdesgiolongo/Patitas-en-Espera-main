<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //encriptamiento de pw
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, username, contrasena)
               VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    //verificacion de correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
                alert("Este correo ya está en uso, intente otro");
                window.location = "../registrarse.html"
        </script>
        ';

        exit();
    }
    //verificacion de user
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$usuario' ");
    
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
        <script>
                alert("Este usuario ya está en uso, intente otro");
                window.location = "../registrarse.php"
        </script>
        ';

        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario creado exitosamente");
        window.location =  "../login.php";
        </script>
    
    ';
    } else{
     echo '
        <script>
        alert("El usuario no se ha registrado");
        window.location =  "../registrarse.php";
        </script>
    
        ';
    }
    mysqli_close($conexion);
?>