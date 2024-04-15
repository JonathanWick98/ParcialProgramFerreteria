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
        <!-- Contenido del contenedor gradiente, como un mensaje de bienvenida o promoción -->
        <h1>Bienvenido a nuestra ferretería</h1>
        <p>¡Encuentra los mejores productos para tus proyectos!</p>
    </div>

    <!-- Contenedores de productos -->
    <div class="productos-container">
        <!-- Producto 1 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/cable.jpg') }}" alt="Producto 1" style="width: 100%;">
            </div>
            <div class="informacion">
                <!-- Información del producto 1 -->
                <h2>Cables</h2>
                <p>Descripción breve del producto 1</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="producto">
            <div class="foto-producto">
            <img src="{{ asset('css/foco.jpg') }}" alt="Producto 2" style="width: 90%;">
            </div>
            <div class="informacion">
                <!-- Información del producto 2 -->
                <h2>Focos</h2>
                <p>Descripción breve del producto 2</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="producto">
            <div class="foto-producto">
            <img src="{{ asset('css/lija.jpg') }}" alt="Producto 3" style="width: 100%;">
            </div>
            <div class="informacion">
                <!-- Información del producto 3 -->
                <h2>Lijas</h2>
                <p>Descripción breve del producto 3</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="producto">
            <div class="fo to-producto">
            <img src="{{ asset('css/fonta.jpeg') }}" alt="Producto 4" style="width: 100%;">
            </div>
            <div class="informacion">
                <!-- Información del producto 4 -->
                <h2>Fontaneria</h2>
                <p>Descripción breve del producto 4</p>
                <a href="{{ route('alumnoinfo.nota') }}">Ver mas</a>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="producto">
            <div class="foto-producto">
            <img src="{{ asset('css/madera.jpeg') }}" alt="Producto 4" style="width: 100%;">
            </div>
            <div class="informacion">
                <h2>Maderas</h2>
                <p>Descripción breve del producto 4</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/carpinteria.jpg') }}" alt="Producto 4">
            </div>
            <div class="informacion">
                <h2>Carpinteria</h2>
                <p>Descripción breve del producto 4</p>
                <a href="{{ route('alumnoinfo.materia') }}">Ver mas</a>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/electricidad.jpeg') }}" alt="Producto 4">
            </div>
            <div class="informacion">
                <h2>Electricidad</h2>
                <p>Descripción breve del producto 4</p>
                <a href="{{ route('alumnoinfo.expe') }}">Ver mas</a>
            </div>
        </div>
    </div>
</body>
</html>
