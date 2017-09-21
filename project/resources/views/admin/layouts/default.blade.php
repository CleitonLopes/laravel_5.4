<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> {{ $title ?? 'Laravel 5.4' }} </title>

    {{-- Já adiciona o css do Bootstrap --}}
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <nav class="navbar navbar-default navbar-static-top">

        <div class="container-fluid">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/admin">Laravel 5.4</a>
            </div>
        </div>
    </nav>

    <main>

        <section class="container">

            {{-- Retorna o component body.blade.php --}}
            {{ $slot }}

        </section>

    </main>

    {{-- Adciona o js do Bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>