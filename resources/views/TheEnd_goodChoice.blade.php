<body>
    <h1>Congratulations!</h1>
    <p>You have {{ Session::get('talent') }} talent.</p>
    <p>You did the right thing. You are commended by your master.</p>
    <img src="{{asset('img/TheEnd_goodChoice.jpg')}}" alt="Master commends the servant">
    <h3>"For everyone who has will be given more, and he will have an abundance. Be good stewards of the gifts and opportunities you are given, and bear faithful and fruitful service."</h3>
    <a href="{{url('portada')}}"><button>Start again</button></a>
</body>
</html>
