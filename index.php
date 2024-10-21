<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamo de Libros</title>
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Enlace a Font Awesome para el icono -->
</head>
<body>

    <!-- Contenedor Principal -->
    <div class="container">

        <!-- Barra de Navegación -->
        <div class="nav-container">

            <!-- Logo -->
            <div class="logo-container">
                <img src="imagenes/logo.webp" alt="Logo de la Biblioteca" class="logo"> <!-- Cambia 'logo.png' por la ruta de tu logo -->
            </div>

            <!-- Título -->
            <header class="header-title">
                <h1>Préstamo de Libros</h1>
            </header>

        </div> <!-- Fin de la barra de navegación -->

        <!-- Menú de Navegación -->
        <nav class="navbar">
            <ul class="nav-list">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#catalogo">Catalogo</a>
                    <ul class="dropdown">
                        <li><a href="#ciencias">Ciencias Básicas</a></li>
                        <li><a href="#asp">ASP</a></li>
                        <li><a href="#mmto">MMTO</a></li>
                        <li><a href="#merc">MERC</a></li>
                        <li><a href="#tics">TICS</a></li>
                        <li><a href="#ingles">INGLES</a></li>
                        <li><a href="#lacds">LACDS</a></li>
                        <li><a href="#pa">PA</a></li>
                        <li><a href="#ociacada">OCIACADA</a></li>
                        <li><a href="#sa">SA</a></li>
                    </ul>
                </li>
                <li><a href="#reservas">Reservas</a></li>
                <li><a href="#historial-prestamos">Historial de Préstamos</a></li>
                <li><a href="#mi-cuenta">Mi Cuenta</a>
                    <ul class="dropdown">
                        <li><a href="#iniciar-sesion" id="login-button">Iniciar Sesión</a></li>
                        <li><a href="#registrarse" id="register-button">Crear Cuenta</a></li>
                        
                    </ul>
                </li>

                <!-- Icono de búsqueda -->
                <li class="search-container">
                    <input type="text" placeholder="Buscar..." class="search-input">
                    <button class="search-button"><i class="fas fa-search"></i></button> <!-- Icono de lupa -->
                </li>

                <!-- Botón de Cerrar Sesión -->
                <li id="logout-button" style="display: none;"><button>Cerrar Sesión</button></li>

            </ul>
        </nav>

    </div> <!-- Fin del contenedor principal -->

    <!-- Sección de Inicio -->
    <section id="inicio">
        <h2>Bienvenido a nuestro Servicio de Préstamo de Libros</h2>
        <p>Descubre una amplia variedad de libros disponibles para préstamo.</p>
    </section>

    <!-- Otras secciones aquí... -->

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2024 Biblioteca. Todos los derechos reservados.</p>
    </footer>

    <!-- JavaScript para animación y lógica de sesión -->
    <script>
        const searchButton = document.querySelector('.search-button');
        const searchInput = document.querySelector('.search-input');

        searchButton.addEventListener('click', () => {
            searchInput.classList.toggle('active');
            searchInput.focus();
        });

        // Variables para manejar el estado del usuario
        let isLoggedIn = false;

        // Funciones para manejar inicio y cierre de sesión
        function login() {
            isLoggedIn = true;
            updateUI();
        }

        function logout() {
            isLoggedIn = false;
            updateUI();
        }

        function updateUI() {
            const loginButton = document.getElementById('login-button');
            const registerButton = document.getElementById('register-button');
            const logoutButton = document.getElementById('logout-button');

            if (isLoggedIn) {
                loginButton.style.display = 'none';
                registerButton.style.display = 'none';
                logoutButton.style.display = 'inline'; // Muestra el botón de cerrar sesión
            } else {
                loginButton.style.display = 'inline';
                registerButton.style.display = 'inline';
                logoutButton.style.display = 'none'; // Oculta el botón de cerrar sesión
            }
        }

        // Simulación del inicio y cierre de sesión
        document.getElementById('login-button').addEventListener('click', (e) => {
            e.preventDefault(); // Evita la navegación
            login();
        });

        document.getElementById('logout-button').querySelector('button').addEventListener('click', (e) => {
            e.preventDefault(); // Evita la navegación
            logout();
        });

        // Inicializa la interfaz
        updateUI();
    </script>

</body>
</html>