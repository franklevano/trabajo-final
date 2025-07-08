<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            background: url('https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Peru.svg/1280px-Flag_of_Peru.svg.png') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 2em;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 1em;
        }
        .login-header img {
            width: 100px;
        }
        .login-header h2 {
            margin: 0;
            font-size: 1.5em;
            color: #d32f2f;
        }
        .login-header p {
            font-weight: bold;  
            color: #333; 
        }
        .login-form {
            display: flex;
            flex-direction: column;
        }
        .login-form input {
            padding: 0.8em;
            margin: 0.5em 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-form button {
            padding: 0.8em;
            background: #d32f2f; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }
        .login-form button:hover {
            background: #b71c1c; 
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Escudo_del_Peru.png/521px-Escudo_del_Peru.png" alt="Escudo de Perú"> 
            <h2>Login Administrador</h2>
            <p>Felices fiestas patrias</p>
        </div>
        <form class="login-form" action="TiendaControl.php?opcion=login-procesar" method="POST">
            <input type="text" name="usuarioA" placeholder="Usuario" required>
            <input type="password" name="contraseñaA" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
