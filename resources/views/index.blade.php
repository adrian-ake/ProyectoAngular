<!doctype html>
<html lang="es" ng-app="principal">
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>One Piece | Mugiwara Fanpage</title>       
        <link rel="stylesheet" href="{{URL::asset('/assets/css/style.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('/assets/external/bootstrap-3.3.7/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('/assets/external/css/normalize.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('/assets/external/css/docs_helpers_boostrap.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('/assets/external/font-awesome-4.6.3/css/font-awesome.min.css')}}" />

        <script type="text/javascript" src="{{URL::asset('/assets/external/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('/assets/external/bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>        
        <link rel="icon" type="image/png" href="{{URL::asset('/assets/image/icons/Luffys_flag.ico')}}" />        
        <script type="text/javascript" src="{{URL::asset('/assets/js/app.js')}}"></script>
    </head>
    <script>

    </script>     
    <body>  
        <div class="col-md-10 col-md-offset-1">
            <div id="thumbnail-preview-indicators" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#thumbnail-preview-indicators" data-slide-to="0" class="active">
                        <div class="thumbnail">
                            <img src="{{URL::asset('/assets/image/carousel/cimg3.jpg')}}">
                        </div>
                    </li>
                    <li data-target="#thumbnail-preview-indicators" data-slide-to="1">
                        <div class="thumbnail">
                            <img src="{{URL::asset('/assets/image/carousel/cimg4.jpg')}}">
                        </div>
                    </li>
                    <li data-target="#thumbnail-preview-indicators" data-slide-to="2">
                        <div class="thumbnail">
                            <img src="{{URL::asset('/assets/image/carousel/cimg5.jpg')}}">
                        </div>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item slides active">
                        <div class="slide-1"></div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Bienvenido a nuestra comunidad</h1>
                                <p>Nosotros podemos compartir informacion de nuestro manga favorito One Piece.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Ingresar</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-2"></div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Registrate con nosotros.</h1>
                                <p>Puedes formar parte de nuestra comunidad.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Registrarse</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item slides">
                        <div class="slide-3"></div>
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Mas de nuestra comunidad.</h1>
                                <p>Puedes leer las reglas de la comunidad y los diversos temas que se tratan.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Mas informacion</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#thumbnail-preview-indicators" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div> 
            <hr>
            <div class="row">
                <div class="col-sm-3">                    
                    <div class="bs-callout bs-callout-info">
                        <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
                        <p class="text-justify">
                        <h4><strong>One Piece</strong></h4><br>
                        Es un manga escrito e ilustrado por Eiichirō Oda. Comenzó a publicarse en la revista japonesa Weekly
                        Shōnen Jump el 22 de julio de 1997. Shueisha publica los capítulos en volúmenes: el primero publicado 
                        el 24 de diciembre de 1997 y el volumen 88 a publicado el 20 de marzo de 2018.
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bs-callout bs-callout-info">
                        <p class="text-justify">
                        <h4><strong>Argumento</strong><br></h4>
                        La serie comienza con la ejecución de Gol D. Roger, un hombre conocido como el Rey de los Piratas. 
                        Poco antes de su muerte, Roger hace mención a su gran tesoro legendario, el "One Piece",
                        y a que puede ser tomado por todo aquél que lo desee. Esto marca el inicio de una era conocida como la Gran Era Pirata.                        
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bs-callout bs-callout-info">
                        <p class="text-justify">
                        <h4><strong>Manga</strong></h4><br>
                        El manga se publica semanalmente en la revista semanal Shōnen Jump desde la edición 34 de 1997,48​ 
                        llevando hasta ahora 900 capítulos, con un total de 88 tomos recopilatorios. 
                        Posteriormente se publican en versión Tankōbon de los cuales hay 8 volúmenes publicados hasta la fecha
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="bs-callout bs-callout-info">
                        <p class="text-justify">
                        <h4><strong>Anime</strong></h4>
                        Al igual que la mayoría de los animes, el de One Piece es una adaptación animada del manga. Producida por Toei Animation,
                        la serie anime One Piece se estrenó en Japón por Fuji TV el 20 de octubre de 1999.
                        Las diferencias entre anime y manga son más o menos notorias y el principal cambio se da en los llamados rellenos                      (o fillers).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

