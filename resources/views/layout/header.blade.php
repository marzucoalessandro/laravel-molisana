<nav>
  @foreach ($link as $item)
  <a href="{{$item['link']}}" class"">{{$item['nome']}}</a>
  @endforeach
</nav>
