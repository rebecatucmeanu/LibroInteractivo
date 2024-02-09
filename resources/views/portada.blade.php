<body>
    <h1>{{ $title }}</h1>
    <p>Author: {{ $author }}</p>
    <p>Nombre: {{Session::get('nombreUsuario')}}</p>
    <img src="{{asset('img/portada.jpg')}}" alt="portada">
    <a href="{{url('capitulo1')}}"><button>Start</button></a>
</body>
</html>
