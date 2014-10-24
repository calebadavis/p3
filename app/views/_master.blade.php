<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title','Developer\'s Best Friend')</title>
    <meta charset='utf-8'>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='/css/developers_best_friend.css' type='text/css'>

    @yield('head')

  </head>

  <body>
    <h1>@yield('h1','Developer\'s Best Friend')</h1>
    <section id='description'><p>@yield('description')</p></section>
    <a href='/'><img class='logo' src='/images/muscle.png' alt='Muscular Penguin Logo'></a>

    <a href='https://github.com/calebadavis/p3'>View on Github</a>

    <nav>
      <ul>
        <li><a href='/lorem'>Lorem Ipsum Generator</a></li>
        <li><a href='/userGen'>User Generator</a></li>
      </ul>
    </nav>

    @yield('content')

    @yield('body')

  </body>
</html>





