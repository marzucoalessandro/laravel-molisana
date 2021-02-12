<header>
  <img src="{{asset ('img/logo.png')}}" alt="">
</header>
<nav>
  @foreach ($link as $item)
  <a href="{{$item['link']}}">{{$item['nome']}}</a>
  @endforeach
</nav>
