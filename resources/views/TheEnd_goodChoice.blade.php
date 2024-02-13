<body>
    <!-- Título que indica el resultado de la elección del usuario -->
    <h1>Congratulations!</h1>
    <!-- Muestra la cantidad de talentos que tiene el usuario, recuperada de la sesión -->
    <p>You have {{ Session::get('talent') }} talent.</p>
    <!-- Descripción del resultado de la elección del usuario -->
    <p>You did the right thing. You are commended by your master.</p>
    <!-- Imagen que ilustra el resultado de la elección del usuario -->
    <img src="{{asset('img/TheEnd_goodChoice.jpg')}}" alt="Master commends the servant">
    <!-- Cita bíblica que refleja el resultado de la elección -->
    <h3>"For everyone who has will be given more, and he will have an abundance. Be good stewards of the gifts and opportunities you are given, and bear faithful and fruitful service."</h3>
    <!-- Enlace para reiniciar la historia desde el principio -->
    <a href="{{url('portada')}}"><button>Start again</button></a>
</body>
</html>
