<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Scripts -->
        @vite(['resources/js/app.js', 'resources/scss/style.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="container-fluid">
            <div class="row ">
                
                <div class="sidebars ">
                    <h1 class="text-white">Boolpress</h1>
                    <hr>
                    <ul class=" padding-left-0 ">
                        <li ><h4><a  class="text-white" href="#">Dashboard</a></h4></li>
                        <li ><h4><a  class="text-white" href="#">Posts</a></h4></li>
                        <li ><h4><a  class="text-white" href="#">Users</a></h4></li>
                    </ul>
                </div>
                <nav class="d-flex justify-center width-100">
                    <form>
                        <input type="text" name="" id="">
                    </form>
                </nav>
            </div>
        </div>
    </body>
</html>