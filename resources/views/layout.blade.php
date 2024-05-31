<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        a{
            text-decoration: none;
        }
        .activo a{
            color:red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <table class="table">
            <thead>
                <tr>
                    <td>
                        <!-- Incluye la navegación -->
                        @include('partials.nav')
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4">
                        @yield('content')
                    </td>
                </tr>
            </tbody>
        </table>
        
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>