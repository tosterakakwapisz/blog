<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog:8001</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/toster.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center text-white mx-0 p-4">
        <a class="navbar-brand pointer">TosterBlog</a>
    </nav>

    <div class="container-fluid">
        <div class="row pt-3" id="maindiv">
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-3 sidebar pb-3">
        <div class="sidebar-sticky">
            <ul class="nav flex-column nav-pills">
                <li class="nav-item"><a id="mainpagenav" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer"> Strona główna</a></li>
                <li class="nav-item nav-item-dark"><a id="allentriesnav" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Wpisy</a></li>
                <li class="nav-item"><a id="createentryinterface" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Utwórz wpis</a></li>
                <li class="nav-item"><a id="createuserinterface" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Stwórz usera</a></li>
                <li class="nav-item"><a id="displayusers" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Użytkownicy</a></li>
                <li class="nav-item"><a id="logout" class="nav-link list-group-item list-group-item-action list-group-item-dark mojemenu pointer">Log out</a></li>
            </ul>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-9 " id="jscontent">
    </div>


    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/ajax.js"></script>

</body>
</html>
