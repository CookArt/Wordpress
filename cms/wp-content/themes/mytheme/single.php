<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=-1" />
    <meta >

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Exo+2:200,300,400,500,600,600italic,700">
    <link rel="shortcut icon" href="/icon.png">

    <title>US Info</title>

    <link href="style.css" rel="stylesheet">

    <script type="text/javascript" src="/assets/DataTables/datatables.min.js"></script>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body class="breadcrumb-white footer-top-dark">

<div id="page">
    <div id="header-wrapper">
        <div id="header">
            <div id="header-inner">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#navbar-main">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="/">
                                <span class="logo-styled">
                                    <span class="logo-title">
                                        <img src="/img/Laravel_files/logo.png" class="logo" alt="">
                                    </span><!-- /.logo-title -->
                                </span><!-- /.logo-styled -->
                            </a>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar-main">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="menuparent hidden-sm">
                                    <a href="{{ url('/') }}">Accueil</a>
                                </li>
                                <li class="menuparent">
                                    <a href="/services">PC</a>
                                </li>
								<li class="menuparent">
                                    <a href="/services">Portables</a>
                                </li>
                            </ul>
                            <!-- /.nav -->
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
            <!-- /#header-inner -->
        </div>
        <!-- /#header -->
    </div>
    <!-- /#header-wrapper -->
    <div id="main-wrapper">
        <div id="main">
            <div id="main-inner">
                <div class="container">
                    <div class="block-content background-white fullwidth">
                        <div class="block-content-inner">
                           <div class="row">
            <div class="col-md-6">
                <div class="well well-sm">
                    <form class="form-horizontal" method="post">
                        <fieldset>
                            <legend class="text-center header">Me Contacter</legend>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="prenom" name="name" type="text" placeholder="Prénom" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="nom" name="name" type="text" placeholder="Nom" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" name="email" type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="phone" name="phone" type="text" placeholder="Téléphone" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-1">
                                    <textarea class="form-control" id="message" name="message" placeholder="Message..." rows="7"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <img class="pull-right" src="/img/sio.png">
                        <h4>IHORAI Ariirau</h4><br/>
                        Lycée Aorai<br/>
                        Pirae<br/>
                        ihoraiariirau25@gmail.com<br/>
                        <hr/>
                        Langages: PHP, HTML, CSS, JavaScript, C#
                    </div>
                </div>
            </div>
        </div>
                        </div>
                        <!-- /.block-content-inner -->
                    </div>
                    <!-- /.block-content -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /#main-inner -->
        </div>
        <!-- /#main -->
    </div>
    <!-- /#main-wrapper -->
    <div id="footer-wrapper">
        <div id="footer">
            <div id="footer-inner">
                <div class="footer-bottom">
                    <div class="container">
                        <nav class="clearfix">
                            Developpé par CookArt
                        </nav>

                        <div class="copyright">
                            BTS SIO SLAM 2016
                        </div>
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.footer-bottom -->
            </div>
            <!-- /#footer-inner -->
        </div>
        <!-- /#footer -->
    </div>
    <!-- /#footer-wrapper -->
</div>
<!-- /#page -->
<script>
    $('div.alert').delay(3000).slideUp(300);
    $('body').css("z-index", "-5");
</script>

{{--<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>--}}

</body>
</html>
