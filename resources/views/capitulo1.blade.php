<body>
    <!-- Título del capítulo -->
    <h1>Chapter 1</h1>
    <!-- Subtítulo del capítulo -->
    <h2>There was, oh, what there was, or there wasn't, in the oldest of days, and ages, and times,</h2>
    <!-- Descripción del capítulo -->
    <p>a wealthy man, before going on a journey, entrusts his property to his servants. To one servant, he gives five talents, to another two talents, and to a third, one talent, each according to their abilities.</p>
    <!-- Imagen que ilustra el capítulo -->
    <img src="{{asset('img/img1.jpg')}}" alt="A wealthy man with his three servants"/>
    <!-- Mensaje personalizado para el usuario -->
    <p>You will be the third servant. You now have {{ Session::get('talent') }} talent.</p>
    <!-- Enlace para avanzar al siguiente capítulo -->
    <a href="{{url('capitulo2')}}"><button>Next page</button></a>
</body>
</html>
