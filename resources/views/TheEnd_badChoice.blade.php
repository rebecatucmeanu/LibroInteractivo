<body>
    <h1>Too bad!</h1>
    <p>You now have {{ Session::get('talent') }} talents.</p>
    <p>You chose to keep the talent buried. You lost. Your master rebukes you for your fear and lack of initiative.</p>
    <img src="{{asset('img/TheEnd_badChoice.jpg')}}" alt="Master rebuking the servant">
    <h3>"For everyone who has, will be given more, and he will have an abundance. Whoever does not have, even what he has will be taken from him."</h3>
    <a href="{{url('portada')}}"><button>Start again</button></a>
</body>
</html>
