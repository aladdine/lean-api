<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>lean API</title>
        <meta name="description" content="The platform for testing and rating APIs">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">

       
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }

            .hp-message {
              text-align: center;
            }

            .hp-vertical-line {
               border-left: 2px #269B8F solid;
               height: 400px;
            }

            .hp-header-message {
              height: 500px;
              background-color: #FFF;
            }

            .hp-icon {
              margin-top: 40px;
              margin-bottom: 20px;
              height: 120px;
            }

            .hp-steps {
              margin-top: 20px;
              text-align: left;
              padding-left: 40px;
              font-size: 24px;
            }

            .hp-browse-apis {
              margin-left: 20px;
              font-size: 24px;
            }

            .hp-browse-apis-row {
              margin-bottom: 40px;
            }

            #api-provider-btn, #tester-btn, #search-btn {
              cursor: pointer;
            }

            #become-tester-steps {
              margin: auto;
              margin-top: 50px;
            }

            #form-become-a-tester {
              border: 2px #269B8F solid;
              width: 100%;
              margin-top: 50px;
              padding: 20px;
            }

            /* styling inputs */

            input[type=checkbox] {
              margin-right: 10px;
            }

            .input-group, .form-group {
              margin-bottom: 20px;
            }
            
            form {
              margin-top: 40px;
            }

            #tester-next-step1-btn {
              margin-top: 20px;
              float: right;
            }

        </style>
       
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Lean API</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
      
          <ul class="nav navbar-nav navbar-right">
              <li>
                <form class="navbar-form" role="form">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search APIs">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div><!-- /input-group -->
                </form>
              </li>
              <li><a href="#">Login / Signup</a></li>

          </ul>
        </li>
      </ul>

        </div><!--/.navbar-collapse -->
      </div>
    </nav>
 <div class="container">    