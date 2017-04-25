<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Style</title>
  </head>
  <body>
    <div class="container">
      <h1>Style Guide</h1>
      <div class="row">
        <div class="col-md-3">
          <h2>Colors</h2>
        </div>
        <div class="col-md-6">
          <div class="box blue"></div>
          <div class="box gold"></div>
          <div class="box cream"></div>
          <div class="box orange"></div>
          <div class="box red"></div>
        </div>
        <div class="row col-md-6">
          <div class="box white1"></div>
          <div class="box white2"></div>
          <div class="box white3"></div>
          <div class="box white4"></div>
          <div class="box white5"></div>
        </div>
        </div>
        </div>
      </div>
    </div>


<script>
     window.Laravel = {!! json_encode([
         'csrfToken' => csrf_token(),
     ]) !!};
 </script>
 <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</body>
</html>
