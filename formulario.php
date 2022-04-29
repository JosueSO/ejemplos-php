<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <form action="login.php" method="GET" autocomplete="off">
        <label for="username">Nombre de usuario</label>
        <br>
        <input type="text" name="username" >
        <br>
        <label for="password">Contraseña</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <button id="btn_send">Enviar por AJAX</button>

    <br><br><br>

    <h1>Iniciar Sesión por POST</h1>

    <form action="login.php" method="POST" autocomplete="off">
        <label for="username">Nombre de usuario</label>
        <br>
        <input type="text" name="username" >
        <br>
        <label for="password">Contraseña</label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <button id="btn_post">Enviar por AJAX</button>

    <script>
        let btnSend = document.getElementById("btn_send");

        btnSend.addEventListener("click", function() {
            let xhttp = new XMLHttpRequest();

            xhttp.open("GET", "login.php?username=UsuarioA&password=ABC", true);

            xhttp.onreadystatechange = function() {
                if (this.readyState === 4) {
                    console.log(this.responseText);
                }
            };

            xhttp.send();
        });

        let btnPost = document.getElementById("btn_post");

        btnPost.addEventListener("click", function() {
            let xhttp = new XMLHttpRequest();

            xhttp.open("POST", "login.php", true);

            xhttp.setRequestHeader("Content-type", "application/json");

            xhttp.onreadystatechange = function() {
                if (this.readyState === 4) {
                    console.log(this.responseText);
                }
            };

            let data = {
                username: "Josue",
                password: "1234"
            };

            xhttp.send(JSON.stringify(data));
        });
    </script>
</body>
</html>