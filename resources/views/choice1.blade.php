<body>
    <!-- Título que indica la elección del usuario -->
    <h1>You chose to bury your talent in the ground.</h1>
    <!-- Muestra la cantidad de talentos que tiene el usuario, recuperada de la sesión -->
    <p>You now have {{ Session::get('talent') }} talents.</p>
    <!-- Descripción de la elección del usuario -->
    <p>You feared the master's harshness and buried your one talent in the ground to keep it safe.</p>
    <!-- Imagen que ilustra la elección del usuario -->
    <img src="{{asset('img/buryTalent.jpg')}}" alt="Man buried the talent">
    <!-- Título secundario -->
    <h3>What will you do now?</h3>
    <!-- Botón para elegir el final bueno -->
    <a href="{{url('TheEnd_goodChoice')}}"><button>Regret your decision and do as your colleagues did</button></a>
    <!-- Botón para elegir el final malo -->
    <a href="{{url('TheEnd_badChoice')}}"><button>Keep it buried and move on with your life</button></a>
</body>
</html>
