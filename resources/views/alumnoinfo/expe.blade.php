<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería - Electricidad</title>
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

        .logo {
            display: flex;
            justify-content: space-between; /* Alinea los elementos al inicio y al final del contenedor */
            align-items: center; /* Centra verticalmente los elementos dentro del contenedor */
        }

        .logo img {
            height: 40px;
        }

        .logo h1 {
            margin: 10px; /* Elimina el margen predeterminado del título */
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
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <nav>
    <div class="logo">
        <img src="{{ asset('css/ferrete.png') }}" alt="Logo de la ferretería">
        <h1>Electricidad</h1> <!-- Título "Electricidad" -->
    </div>
    <ul class="menu">
        <li><a href="{{ route('alumnos.start') }}">Productos</a></li>
        <li><a href="{{ route('alumnoinfo.acerca') }}">Contáctenos</a></li>
        <li><a href="#">Carrito</a></li>
    </ul>
    </nav>


    <!-- Contenedores de productos -->
    <div class="productos-container">
        <!-- Producto 1 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/interruptor.jpg') }}" alt="Producto 1">
            </div>
            <div class="informacion">
                <!-- Información del producto 1 -->
                <h2>Interruptor de Luz</h2>
                <p>Precio: $10.99</p>
                <p>Interruptor de luz estándar para uso en el hogar.</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/foco.jpg') }}" alt="Producto 2">
            </div>
            <div class="informacion">
                <!-- Información del producto 2 -->
                <h2>Bombillo LED</h2>
                <p>Precio: $5.99</p>
                <p>Bombillo de bajo consumo.</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/cable.jpg') }}" alt="Producto 3">
            </div>
            <div class="informacion">
                <!-- Información del producto 3 -->
                <h2>Cable Eléctrico</h2>
                <p>Precio: $2.49</p>
                <p>Cable de 10 metros.</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="producto">
            <div class="foto-producto">
                <img src="{{ asset('css/interruptor_inteligente.jpg') }}" alt="Producto 4">
            </div>
            <div class="informacion">
                <!-- Información del producto 4 -->
                <h2>Enchufe Inteligente</h2>
                <p>Precio: $9.99</p>
                <p>Controla tus dispositivos desde el móvil.</p>
                <button class="btn-agregar-carrito">Agregar a Carrito</button>
                <button class="btn-ver-mas">Ver más información</button>
            </div>
        </div>
    </div>
</body>
</html>