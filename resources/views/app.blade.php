<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
    </body>
</html>
