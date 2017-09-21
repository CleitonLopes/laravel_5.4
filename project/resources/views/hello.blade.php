<h1> Hello Maker </h1>

<form action="/hello" method="post">

    <!-- Gera um token de sessão valido -->
    {{ csrf_field() }}

    <input type="text" name="name">

    <input type="submit" value="enviar">

</form>