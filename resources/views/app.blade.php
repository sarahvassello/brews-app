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
         Created by <a href="http://www.sarahmvassello.com/">Sarah Vassello </a> | <a href="https://github.com/sarahvassello">
           <img src="img/github.png" alt="github logo" style="width:30px;height:30px">
         </a> | Credit to <a href="http://www.ncbeer.org"> NC Craft Brewers Guild </a>
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
    color: #DF7F1C;
  }

  a:hover {
    color: #DF7F1C;
    text-decoration: none;
  }

  footer {
    text-align: center;
    margin: 5px;
    font-size: .75em;
  }

  #abv {
    font-style: italic;
  }

  .thumbnail {
    border: 3px solid #DF7F1C;
  }

  .btn-primary {
    background-color: #017EA9;
    border-radius: 0;
    padding:15px;
  }

  .btn-primary:hover {
    background-color: #DF7F1C;
    border-color: white;
  }

  .btn-danger {
    border-radius: 0;
    padding:15px;
    float: right;
  }

  .btn-success {
    border-radius: 0;
    padding:15px;
    background-color: #DF7F1C;
    border-color: white;
  }

  .btn-success:hover {
    background-color: #F1E7CD;
    border-color: white;
  }

  .btn-default {
    border-radius: 0;
    padding:15px;
    float: right;
  }




</style>
