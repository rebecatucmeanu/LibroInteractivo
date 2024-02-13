<body>
    <!--Mostrar portada, con la imagen de la portada y la imagen inicial-->
    <h1>{{ $title }}</h1>
    <p>Author: {{ $author }}</p>
    <img src="{{asset('img/portada.jpg')}}" alt="portada">
    <a href="{{url('capitulo1')}}"><button>Start</button></a>
</body>
</html>
