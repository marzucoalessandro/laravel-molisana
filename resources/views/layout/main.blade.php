<main>
  <section>
    <h1>le lunghe</h1>
    <div class="container">
      @foreach ($data as $item)
      @if ($item["tipo"] === "lunga")
        <div class="overlay">
          <img src="{{$item['src']}}" alt="">
          <div class="white"></div>
          <img class="fork" src="{{asset ('img/icon.svg')}}" alt="">
          <h4> {{$item["titolo"]}} </h4>
        </div>
      @endif
      @endforeach
    </div>
  </section>
  <section>
    <h1>le corte</h1>
    <div class="container">
      @foreach ($data as $item)
      @if ($item["tipo"] === "corta")
        <div class="overlay">
          <img src="{{$item['src']}}" alt="">
          <div class="white"></div>
          <img class="fork" src="{{asset ('img/icon.svg')}}" alt="">
          <h4> {{$item["titolo"]}} </h4>
        </div>
      @endif
      @endforeach
    </div>
  </section>
  <section>
    <h1>le cortissime</h1>
    <div class="container">
      @foreach ($data as $item)
      @if ($item["tipo"] === "cortissima")
        <div class="overlay">
          <img src="{{$item['src']}}" alt="">
          <div class="white"></div>
          <img class="fork" src="{{asset ('img/icon.svg')}}" alt="">
          <h4> {{$item["titolo"]}} </h4>
        </div>
      @endif
      @endforeach
    </div>
  </section>
</main>
