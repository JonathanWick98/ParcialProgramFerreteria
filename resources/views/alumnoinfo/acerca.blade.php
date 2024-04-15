<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        .logo img {
            height: 40px;
        }

        .menu {
            list-style: none;
            display: flex;
        }

        .menu li {
            margin-right: 20px;
        }

        .menu li:last-child {
            margin-right: 0;
        }

        .menu li a {
            color: #fff;
            text-decoration: none;
        }

        .productos-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .producto {
            width: 300px;
            margin-bottom: 30px;
            background-color: #f9f9f9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .foto-producto img {
            width: 100%;
            height: auto;
        }

        .informacion {
            padding: 20px;
        }

        .btn-agregar-carrito,
        .btn-ver-mas {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-agregar-carrito:hover,
        .btn-ver-mas:hover {
            background-color: #555;
        }

        /* Nuevo estilo para el cuarto producto */
        .productos-container .producto:nth-child(4) {
            order: 9999; /* Asegura que el cuarto producto se muestre al final */
        }

        /* Estilo para el contenedor gradiente */
        .gradiente-container {
            background: linear-gradient(to bottom, #f9f9f9, #ddd); /* Cambia los colores según tu preferencia */
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav>
        <div class="logo">
            <img src="{{ asset('css/ferrete.png') }}" alt="Logo de la ferretería">
        </div>
        <ul class="menu">
            <li><a href="{{ route('alumnos.start') }}">Productos</a></li>
            <li><a href="{{ route('alumnoinfo.acerca') }}">Contáctenos</a></li>
            <li><a href="#">Carrito</a></li>
        </ul>
    </nav>

    <!-- Contenedor gradiente -->
    <div class="gradiente-container">
        <h1>Bienvenido a nuestra ferretería: Don Fierro</h1>
        <p>Direccion: Km 16 1/2 Carretera al Puerto de La Libertad
        Departamento de La Libertad
        El Salvador <br>
        Telefono: 2123-2322
    
    
    </p>
    </div>
    </div>
</body>
</html>
