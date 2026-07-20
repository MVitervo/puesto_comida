<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Moderno</title>
    <!-- Tema Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- carga el css de bootstrap -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css"> <!-- carga los diseños de datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css"> <!-- carga los diseños de datatables responsivo -->
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> <!-- carga el jquery -->

    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script> <!-- carga el funcionamiento de datatables -->

    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script> <!-- carga el funcionamiento de datatables responsivo -->

    
    <!-- Bootstrap JS (DESPUÉS de jQuery) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 JS (DESPUÉS de jQuery) -->

    <script src="https://cdn.tailwindcss.com"></script> <!-- Version 3.4.17 de tailwind -->

    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> <!-- animacion del modal -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"> <!-- Tiene el diseño del toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> <!-- Tiene el funcionamiento del toast -->


</head>

<body class="bg-white text-slate-800 dark:bg-gray-900 dark:text-slate-200 transition-colors duration-300">
    <div class="flex h-screen w-full">

        <!-- SIDEBAR -->
        <aside id="sidebar"
            class="w-72 bg-gradient-to-b from-gray-100 to-gray-200
            dark:from-gray-800 dark:to-gray-900
            border-r border-gray-300 flex flex-col shadow-xl
            transition-all duration-500 ease-in-out"
            style="position: sticky; top: 0; height: 100vh;">

            <!-- HEADER -->
            <div class="h-16 flex items-center justify-between px-4 border-b border-slate-700 dark:border-slate-500 cursor-pointer" onclick="navigate('/')">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 rounded-md shadow-md">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/06/Linkin_Park_logo_2024.svg/960px-Linkin_Park_logo_2024.svg.png" alt="">
                    </div>
                    <span class="font-bold text-lg sidebar-text tracking-wide text-slice-1000">Vitervo.inc</span>
                </div>
            </div>

            <!-- NAV -->
            <div class="flex-1 overflow-y-auto p-3 space-y-4">
                <p class="text-xs text-slate-900 dark:text-slate-300 mb-2 sidebar-text uppercase tracking-wider">Opciones</p>
                <div class="space-y-1">
                    <!-- Item Sidebar -->
                    <!-- <a class="menu-item flex items-center gap-3 px-4 py-2 rounded-lg bg-indigo-600 text-white shadow-md"> -->
                    <a onclick="navigate('/users')" class="menu-item group relative flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-indigo-600/80 dark:hover:text-slate hover:scale-[1.03] hover:pl-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        <span class="sidebar-text font-medium transition-all duration-300 opacity-100 translate-x-0">Administrar usuarios</span>
                    </a>

                    <a onclick="navigate('/products')" class="menu-item group relative flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-indigo-600/80 hover:text-white hover:scale-[1.03] hover:pl-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                        </svg>
                        <span class="sidebar-text font-medium">Inventario de productos</span>
                    </a>

                    <a onclick="navigate('/sales')" class="menu-item group relative flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-indigo-600/80 hover:text-white hover:scale-[1.03] hover:pl-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span class="sidebar-text font-medium">Ventas</span>
                    </a>

                    <a onclick="navigate('/salesHistory')" class="menu-item group relative flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-indigo-600/80 hover:text-white hover:scale-[1.03] hover:pl-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span class="sidebar-text font-medium">Historial de ventas</span>
                    </a>

                    <a onclick="navigate('/estimateHistory')" class="menu-item group relative flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 hover:bg-indigo-600/80 hover:text-white hover:scale-[1.03] hover:pl-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                        <span class="sidebar-text font-medium">Historial de presupuesto</span>
                    </a>

                </div>
            </div>

            <!-- FOOTER USER -->
            <div class="border-t border-slate-700 dark:border-slate-500 p-4 flex items-center gap-3 hover:bg-slate-800 dark:hover:bg-slate-700 transition-colors duration-300 rounded-md">
                <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full shadow-sm" />
                <div class="sidebar-text">
                    <p class="text-sm font-medium">Tom Cook</p>
                    <p class="text-xs text-slate-900 dark:text-slate-300">tom@acme.com</p>
                </div>
            </div>

        </aside>

        <!-- Botón
    <button id="toggleBtn"
        class="fixed top-6 left-6 z-50 px-4 py-2 bg-emerald-500 text-white rounded-lg shadow-lg">
        Abrir menú
    </button> -->

        <div class="flex flex-col items-center gap-2" style="position: sticky; top: 0; height: 100vh;">
            <button onclick="toggleSidebar()" id="toggleBtn" class="w-10 h-10 flex items-center justify-center text-slate-1000 transition mt-4 ml-4">

                <!-- icono hamburguesa -->
                <svg id="iconMenu" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6 transition duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                <!-- icono flecha -->
                <svg id="iconArrow" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6 hidden transition duration-300">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>


            </button>

            <!-- BOTÓN CAMBIO DE TEMA -->
            <!-- <button id="toggle-theme" class="absolute top-4 right-4 px-4 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded transition-colors duration-300"> -->
            <button id="toggle-theme" class="px-2 py-2 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded transition-colors duration-300 mt-4 ml-4">
                🌙
            </button>

        </div>


        <!-- MAIN CONTENT -->
        <main class="flex-1 p-6 overflow-y-auto">
            <div id="renderPage"></div>
        </main>

    </div>


    <!-- Esta linea es para poder usar jquery -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script> -->
    <script>
        $(function() {
            debugger;

            loadPage(window.location.pathname);

            // esta funcion se ejecuta cada vez que se presiona el boton para atras del propio navegador
            // al presionarlo la utl cambia no necesita history.pushState y mandamos a llamar a loadPage
            // para que el contenido corresponda a la url
            window.addEventListener("popstate", function() {
                loadPage(window.location.pathname);
            });

            // loadView('listPatients');

            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-bottom-right",
                timeOut: "5000"
            };

        });

        function loadPage(route) {
            let page = "";

            switch (route) {
                case "/":
                    page = "/views/users_view.php";
                    break;
                case "/users":
                    page = "/views/users_view.php";
                    break;
                default:
                    page = "/views/404.php";
            }

            $.get(page, function(response) {
                $("#renderPage").html(response);
            });

        }

        function navigate(route) {
            history.pushState({}, "", route); // esta es la que cambia el url en el navegador
            loadPage(route);
        }

        function sidebarOption(option) {
            $('.globalClass').hide(); // esta clase la deben de tener todos los contenedores principales
            loadView(option);
        }

        function loadView(option) {
            const views = {
                listPatients: '/view/patients/list_patients.php',
                calendar: '/view/calendar/calendar.php',
                graphics: '/view/graphics/graphics.php'
            };

            const url = views[option];

            $.ajax({
                method: 'GET',
                url: url,
                success: function(response) {
                    $('.showContent').html(response);
                },
                error: function(xhr, status, error) {
                    $('.showContent').html(`
                        <div class="error">
                            Ocurrió un error al cargar la información.
                        </div>
                    `);
                }

            });
        }


        // const sidebar = document.getElementById("sidebar");

        function toggleSidebar() {

            const sidebar = document.getElementById("sidebar")
            const texts = document.querySelectorAll(".sidebar-text")
            const options = document.querySelectorAll(".menu-item")

            const iconMenu = document.getElementById("iconMenu")
            const iconArrow = document.getElementById("iconArrow")

            const collapsed = sidebar.classList.toggle("w-20")

            texts.forEach(el => {
                if (collapsed) {
                    el.classList.add("opacity-0", "-translate-x-4")
                    setTimeout(() => el.classList.add("hidden"), 200)
                } else {
                    el.classList.remove("hidden")
                    setTimeout(() => {
                        el.classList.remove("opacity-0", "-translate-x-4")
                    }, 50)
                }
            })

            if (collapsed) {
                iconMenu.classList.add("hidden")
                iconArrow.classList.remove("hidden")
                options.forEach(register => {
                    register.classList.remove("hover:pl-6")
                })
            } else {
                iconMenu.classList.remove("hidden")
                iconArrow.classList.add("hidden")
                options.forEach(register => {
                    register.classList.add("hover:pl-6")
                })
            }



        }

        /*
        // sirve para cuando se redimencione la ventana
        $(window).on('resize', function () {
          if ($.fn.DataTable.isDataTable('#tableList')) {
            $('#tableList').DataTable().columns.adjust();
          }
        });
        */

        const themeButton = document.getElementById('toggle-theme');
        const html = document.documentElement;

        // Aplicar tema guardado al cargar
        if (localStorage.theme === 'dark') {
            html.classList.add('dark');
        }

        themeButton.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }
        });


        /*
        $(document).ready(function() {
            showPage();
        });

        const NAVIGATION_STATE = 'pushstate';
        const onLocationChange = window.location.pathname;
        window.addEventListener(NAVIGATION_STATE, onlanguagechange);
        window.removeEventListener(NAVIGATION_STATE, onlanguagechange);
        
        function showPage() {
            $.ajax({
                url: '/home.php',
                method: 'GET',
                success: function(response) {
                    document.querySelector('#renderPage').innerHTML = response;
                }
            });
        }

        // Esta funcion servira para que se comporte somo una SPA
        function navigate(href) {
            window.history.pushState({}, '', href);
            const navigationEvent = new Event(NAVIGATION_STATE);
            window.dispatchEvent(navigationEvent);
        }

        function navigateToPage(page) {
            navigate(page);
        }
        */
    </script>
    <footer>

        <!-- -->

    </footer>
</body>


</html>