<html>
<body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Inicio</a>
        @else
            <a href="{{ route('login') }}">Entrar</a>
            <a href="{{ route('register') }}">Registrar</a>
        @endauth
    </div>
@endif

<div class="container">
    <div class="page-header">
        <h1>Agenda</h1>
    </div>
<?php
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                    ?>

    <div id='calendar'></div>
</div>
</div>
</body>
</html>