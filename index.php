<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="renderPage"></div>
</body>
</html>

<!-- Esta linea es para poder usar jquery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

    $(function () {

        loadPage(window.location.pathname);

        window.addEventListener("popstate", function () {
            loadPage(window.location.pathname);
        });

    });

    function loadPage(route){

        let page = "";

        switch(route){

            case "/":
                page = "home.php";
                break;

            case "/about":
                page = "about.php";
                break;

            default:
                page = "404.php";
        }

        $.get(page,function(response){

            $("#renderPage").html(response);

        });

    }

    function navigate(route){

        history.pushState({}, "", route);

        loadPage(route);

    }


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