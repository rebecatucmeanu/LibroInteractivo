<body>
    <h1>You chose to bury your talent in the ground.</h1>
    <p>You now have {{ Session::get('talent') }} talents.</p>
    <p>You feared the master's harshness and buried your one talent in the ground to keep it safe.</p>
    <img src="{{asset('img/buryTalent.jpg')}}" alt="Man buried the talent">
    <h3>What will you do now?</h3>
    <a href="{{url('TheEnd_goodChoice')}}"><button>Regret your decision and do as your colleagues did</button></a>
    <a href="{{url('TheEnd_badChoice')}}"><button>Keep it buried and move on with your life</button></a>
</body>
</html>
