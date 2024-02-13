<body>
    <!-- Título del capítulo -->
    <h1>Chapter 2</h1>
    <!-- Muestra la cantidad de talentos que tiene el usuario, recuperada de la sesión -->
    <p>You have {{ Session::get('talent') }} talent.</p>
    <!-- Descripción del capítulo -->
    <p>The first two servants wisely invest and trade with the talents they received, doubling their amounts. The servant with five talents gains five more, and the one with two talents gains two more. Both are praised by their master upon his return, and they are rewarded with greater responsibilities and joy.</p>
    <!-- Imagen que ilustra el capítulo -->
    <img src="{{asset('img/capitulo2.jpg')}}" alt="The giving of the talents">
    <!-- Título secundario -->
    <h3>What will you do?</h3>
    <!-- Botón para elegir una opción -->
    <a href="{{url('choice1')}}"><button>Bury the talent in the ground</button></a>
    <!-- Botón para elegir otra opción -->
    <a href="{{url('TheEnd_goodChoice')}}"><button>Do as your colleagues do</button></a>
</body>
</html>
