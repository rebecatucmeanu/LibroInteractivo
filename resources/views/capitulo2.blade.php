<body>
    <h1>Chapter 2</h1>
    <p>You have {{ Session::get('talent') }} talent.</p>
    <p>The first two servants wisely invest and trade with the talents they received, doubling their amounts. The servant with five talents gains five more, and the one with two talents gains two more. Both are praised by their master upon his return, and they are rewarded with greater responsibilities and joy.</p>
    <img src="{{asset('img/capitulo2.jpg')}}" alt="The giving of the talents">
    <h3>What will you do?</h3>
    <a href="{{url('choice1')}}"><button>Bury the talent in the ground</button></a>
    <a href="{{url('TheEnd_goodChoice')}}"><button>Do as your colleagues do</button></a>
</body>
</html>
