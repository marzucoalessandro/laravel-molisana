<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
    <title>La molisana</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>
  <body>
    <!-- costruisco il sito che verrà poi destrutturato nei vari partials -->
    <header>
      <img src="{{asset ('img/logo.png')}}" alt="">
    </header>
    <nav>
      @foreach ($link as $item)
      <a href="#">{{$item}}</a>
      @endforeach
    </nav>
    <main>
      <section>
        <h1>le lunghe</h1>
        <div class="container">
          @foreach ($data as $item)
          @if ($item["tipo"] === "lunga")

            <img src="{{$item['src']}}" alt="">

          @endif
          @endforeach



        </div>
      </section>
      <section>
        <h1>le corte</h1>
        <div class="container">
          @foreach ($data as $item)
          @if ($item["tipo"] === "corta")


            <img src="{{$item['src']}}" alt="">

          @endif
          @endforeach
        </div>
      </section>
      <section>
        <h1>le cortissime</h1>
        <div class="container">
          @foreach ($data as $item)
          @if ($item["tipo"] === "cortissima")


            <img src="{{$item['src']}}" alt="">
          
          @endif
          @endforeach
        </div>
      </section>
    </main>
  </body>
  </html>
