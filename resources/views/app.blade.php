<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,400,700|Oswald:600" rel="stylesheet">
        <title>NC Beer</title>
        <!-- navbar -->
          <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              </button>
              <a class="navbar-brand" target="_ " href="https://ncbeer.org/">
                <img src="/img/guild_logo.png" height="30" alt="guild logo">
              </a>

            <!-- <a class="navbar-brand" target="_ " href="https://ncbeer.org/">North Carolina Craft Brewers Guild</a> -->
            </div>
              <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="/style"><i class="glyphicon glyphicon-eye-open"></i> Style</a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </head>
    <body>
      <div id="app"></div>


      <script>
           window.Laravel = {!! json_encode([
               'csrfToken' => csrf_token(),
           ]) !!};
       </script>
       <link rel="stylesheet" href="{{ mix('css/app.css') }}">
       <script src="{{ mix('js/app.js') }}"></script>

       <footer>
         Created by Sarah Vassello. Photo credit to NC Craft Brewers Guild.
       </footer>
    </body>
</html>

<style>

  body {
    font-family: 'Montserrat', sans-serif;
    background-image: url(img/ontap.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color: #dfdfdf;
  }

  h1 {
    font-size: 3.5em;
    color: #017EA9;
    font-family: 'Oswald', sans-serif;
    text-shadow: 2px 2px black;
  }

  h3 {
    color: #F16303;
  }

  a:hover {
    color: #F16303;
    text-decoration: none;
  }

  footer {
    text-align: center;
    margin: 5px;
    font-size: .75em;
  }





</style>
