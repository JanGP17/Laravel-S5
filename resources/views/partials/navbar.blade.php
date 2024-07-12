<style>
    .navbar {
        background-color: #ddd;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        font-family: "Comic Sans MS", cursive, sans-serif;
    }

    .empresa {
        font-size: 1.5em;
    }

    .nav-option {
        display: flex;
    }

    .nav-option a {
        margin: 0 10px;
        padding: 8px 12px;
        border-radius: 5px;
        background-color: #ddd; /* Color plomo claro */
        color: #333; /* Texto oscuro para contraste */
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .nav-option a:hover,
    .nav-option a.active {
        background-color: #dc3545; /* Rojo al pasar el mouse o activo */
        color: #fff; /* Texto blanco para contraste */
    }
</style>

<body>
    <div class="navbar">
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('servicios') }}"><a href="{{ route('servicios') }}">Servicios</a></div>
        <div class="{{ setActivo('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></div>
    </div>
</body>
