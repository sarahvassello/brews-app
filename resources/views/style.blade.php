<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,200i,300,400,700|Oswald:600" rel="stylesheet">
        <title>Style</title>
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
                   <a href="/"><i class="glyphicon glyphicon-arrow-left"></i> Back to App</a>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <!-- bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  </head>
  <body>
    <div class="container">
      <h1>Style Guide</h1>
      <div class="row">
        <div class="col-md-3">
          <h2>Colors</h2>
        </div>
        <div class="col-md-9">
          <div class="box blue"></div>
          <div class="box orange"></div>
          <div class="box cream"></div>
          <div class="box gold"></div>
          <div class="box red"></div>
        </div>
      </div>
        <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="box white1"></div>
              <div class="box white2"></div>
              <div class="box white3"></div>
              <div class="box white4"></div>
              <div class="box white5"></div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-3">
            <h2>Type</h2>
        </div>
        <div class="row col-md-6 ">
          <h1> h1. Oswald, 3.5em </h1>
          <h2> h2. Montserrat, 2em </h2>
          <h3> h3. Montserrat, orange </h3>
          <h4> h4. Montserrat </h4>
          <h5> h5. Montserrat, bold </h5>
          <h6> h6. Montserrat</h6>
          <p><p class="lead">This is paragraph text. It's the lead paragraph text, to be specific. </p>
          <b>This is bold. </b>It is used to create paragraphs. Everyone likes paragraphs
            because they are the best. They are so full of information. Please use paragraphs to communicate
            in your everyday life and on web communications. This is Montserrat.</p> <p id="light">This is light.</p>
          <ul>
            <b>This is an unordered list.</b>
              <li>Here's a point.</li>
              <li>Here's another.</li>
              <li>Good things always come in threes.</li>
          </ul>
            <ol>
              <b>This is an ordered list.</b>
                <li>Here's a point.</li>
                <li>Here's another.</li>
                <li>I think we get it by now.</li>
            </ol>
          </div>
        </div>
      <div class="row">
        <div class="col-md-3">
        <h2>Buttons</h2>
      </div>
      <div class="col-md-8">
        <button class="smallb">small button</button>
        <button class="mediumb">medium button</button>
        <button class="largeb">large button</button>
        <button class="outline1">outline 1</button>
        <button class="outline2">outline 2</button>
      </div>
    </div>
      <div class="row">
        <div class="col-md-3">
          <h2>Forms</h2>
        </div>
      <div class="col-md-6">
        <div class="col-lg-6">
          <div class="form-group">
            <label for="smaller_form">Smaller Form</label>
            <input class="form-control" type="text" name="last" value="" placeholder="col-6" />
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
          <div class="form-group">
            <label for="contact_title">Large Form</label>
            <input class="form-control" type="text" name="title" value="" placeholder="col-12" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="text_imput">Text Input</label>
            <form action="#">
              <input type="text" name="text"><input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
      <label for="select_form">Select Form</label>
        <select>
          <option value="one">One</option>
          <option value="two">Two</option>
          <option value="three">Three</option>
          <option value="four">Four</option>
        </select>
      </div>
    </div>
    </div>
    </div>
    </div>
      </body>
      <footer>
        <center>
        Created by <a href="http://www.sarahmvassello.com/">Sarah Vassello </a> | <a href="https://github.com/sarahvassello">
          <img src="img/github.png" alt="github logo" style="width:30px;height:30px">
        </a> | Credit to <a href="http://www.ncbeer.org"> NC Craft Brewers Guild </a>
      </center>
      </footer>
<style>

    body {
      font-family: 'Montserrat', sans-serif;
    }

    h1 {
      font-size: 3.5em;
      color: #017EA9;
      font-family: 'Oswald', sans-serif;
    }

    h2 {
      font-size: 2em;
    }

    h3 {
      color: #DF7F1C;
    }

    h5 {
      font-weight: bold;
    }

    .box {
      float: left;
      width: 100px;
      height: 100px;
      margin: 13px;
      border: 1px solid rgba(0, 0, 0, .2);
    }

    .blue {
      background: #017EA9;
    }

    .gold {
      background: #A48F16;
    }

    .cream {
      background: #F1E7CD;
    }

    .orange {
      background: #F16303;
    }

    .red {
      background: #712200;
    }

    .white1 {
      background: #FFFFFF;
    }

    .white2 {
      background: #F4F5F8;
    }

    .white3 {
      background: #dfdfdf;
    }

    .white4{
      background: #cccccc;
    }

    .white5 {
      background: #000000;
    }

    .center {
      text-align: center;
    }

    .light {
      font-weight: 100;
    }
    /* buttons */

    .smallb {
      background-color: #017EA9;
      border-radius: 0;
      padding:5px;
      margin-left: 5px;
      border: white;
      color: white;
    }

    .smallb:hover {
      background-color: #F1E7CD;
      border-color: white;
    }

    .mediumb {
      border-radius: 0;
      padding:10px;
      color: white;
      background-color: #712200;
      border: white;
    }

    .mediumb:hover {
      background-color: #F1E7CD;
      border-color: white;
    }

    .largeb {
      border-radius: 0;
      padding:15px;
      background-color: #DF7F1C;
      border-color: white;
    }

    .largeb:hover {
      background-color: #F1E7CD;
      border-color: white;
    }

    .outline1 {
      border-color: #017EA9;
      background-color: white;
      padding: 20px;
      margin: 5px;
    }

    .outline1:hover {
      background-color: #017EA9;
      border-color: white;
    }

    .outline2 {
      border-color: #F16303;
      background-color: white;
      padding: 20px;
      margin: 5px;
    }

    .outline2:hover {
      background-color: #F16303;
      border-color: white;
    }


</style>
