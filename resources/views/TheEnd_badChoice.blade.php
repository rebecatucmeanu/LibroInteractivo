<body>
    <!-- Título que indica el resultado de la elección del usuario -->
    <h1>Too bad!</h1>
    <!-- Muestra la cantidad de talentos que tiene el usuario, recuperada de la sesión -->
    <p>You now have {{ Session::get('talent') }} talents.</p>
    <!-- Descripción del resultado de la elección del usuario -->
    <p>You chose to keep the talent buried. You lost. Your master rebukes you for your fear and lack of initiative.</p>
    <!-- Imagen que ilustra el resultado de la elección del usuario -->
    <img src="{{asset('img/TheEnd_badChoice.jpg')}}" alt="Master rebuking the servant">
    <!-- Cita bíblica que refleja el resultado de la elección -->
    <h3>"For everyone who has, will be given more, and he will have an abundance. Whoever does not have, even what he has will be taken from him."</h3>
    <!-- Enlace para reiniciar la historia desde el principio -->
    <a href="{{url('portada')}}"><button>Start again</button></a>
</body>
</html>
