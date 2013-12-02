<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../assets/ico/favicon.png" rel="shortcut icon">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=base_url()?>css/bootstrap.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?=base_url()?>css/content/carousel.css">
  <style id="holderjs-style" type="text/css">.holderjs-fluid {font-size:16px;font-weight:bold;text-align:center;font-family:sans-serif;margin:0}</style>
  <script src="<?=base_url()?>js/lib/jquery-2.0.3.js"></script>
    <script src="<?=base_url()?>js/lib/bootstrap.min.js"></script>
    <script src="<?=base_url()?>js/content/start_page.js"></script>
  </head>
  
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div class="carousel slide" id="myCarousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
        <li data-slide-to="1" data-target="#myCarousel"></li>
        <li data-slide-to="2" data-target="#myCarousel"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img alt="First slide" data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:First slide" src="data:image/png;base64,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" style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-large btn-primary">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img alt="Second slide" data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide" src="data:," style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-large btn-primary">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img alt="Third slide" data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide" src="data:," style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a href="#" class="btn btn-large btn-primary">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a data-slide="prev" href="#myCarousel" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a data-slide="next" href="#myCarousel" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img alt="140x140" data-src="holder.js/140x140" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADe0lEQVR4nO3YW0sqcRSG8b7/R1lqJoqGmmWMZCUWOERBYBdamvb/Cu++atidYL8XHab9XPxuZGSJ6xnmsJNSEvCvdr77B6BcCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGlVMHMZjN1Oh1VKhVFhM7Ozt497ubmRhGhiNB4PC4+32w2Go1Gqtfrqlar6vV6uru7K838n6BUwYxGI3W7XbVarQ8XtlqttLe3Vyz174UdHx8rItRqtdTv9xURqtfrenx8LMX8n6BUwfy9uI8Wdnh4qGazqSzLXizs/v6+WOLDw4NSSur1eooITadTXV1dKSLUbre13W61WCxUrVZVq9W0WCw+ff53/6f/ZTCz2UyVSkXz+VwnJycvFvZ8mWg0GsXxp6eniggNh0OllHR0dKSI0GQyKZY5m82+bH4Z/JpgFouFarWazs/PlVJ6s7A8z4vLwfN3JpOJIkK9Xk8pJa3XazUajeL+YzAYfOn8Mvg1wVxeXioidHBwoMFgoGazqYhQs9nUeDz+5zP8eYkRodvb2y+f/9P9mmAuLi6KRb+2v7+v5XJZ3EOsViul9PYeYrlcqlarqVqtKiLU6XS03W6/bH4ZlCqYPM+VZVnxlNJut5Vlma6vr98c+/qSkNLLp5TBYKCI0O7urtbrtZ6entTtdhURyvNcw+HwTRSfOf+7/
9tfGczzmf3ae08r7y1ss9koy7LiPUi32y3eg0ynU0WE+v2+Unr5eDyfzz99flmUKhh8P4KBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGD5A/C6IlaKRICZAAAAAElFTkSuQmCC" class="img-circle" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a href="#" class="btn btn-default">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img alt="140x140" data-src="holder.js/140x140" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADe0lEQVR4nO3YW0sqcRSG8b7/R1lqJoqGmmWMZCUWOERBYBdamvb/Cu++atidYL8XHab9XPxuZGSJ6xnmsJNSEvCvdr77B6BcCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGlVMHMZjN1Oh1VKhVFhM7Ozt497ubmRhGhiNB4PC4+32w2Go1Gqtfrqlar6vV6uru7K838n6BUwYxGI3W7XbVarQ8XtlqttLe3Vyz174UdHx8rItRqtdTv9xURqtfrenx8LMX8n6BUwfy9uI8Wdnh4qGazqSzLXizs/v6+WOLDw4NSSur1eooITadTXV1dKSLUbre13W61WCxUrVZVq9W0WCw+ff53/6f/ZTCz2UyVSkXz+VwnJycvFvZ8mWg0GsXxp6eniggNh0OllHR0dKSI0GQyKZY5m82+bH4Z/JpgFouFarWazs/PlVJ6s7A8z4vLwfN3JpOJIkK9Xk8pJa3XazUajeL+YzAYfOn8Mvg1wVxeXioidHBwoMFgoGazqYhQs9nUeDz+5zP8eYkRodvb2y+f/9P9mmAuLi6KRb+2v7+v5XJZ3EOsViul9PYeYrlcqlarqVqtKiLU6XS03W6/bH4ZlCqYPM+VZVnxlNJut5Vlma6vr98c+/qSkNLLp5TBYKCI0O7urtbrtZ6entTtdhURyvNcw+HwTRSfOf+7/
9tfGczzmf3ae08r7y1ss9koy7LiPUi32y3eg0ynU0WE+v2+Unr5eDyfzz99flmUKhh8P4KBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGD5A/C6IlaKRICZAAAAAElFTkSuQmCC" class="img-circle" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a href="#" class="btn btn-default">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img alt="140x140" data-src="holder.js/140x140" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIwAAACMCAYAAACuwEE+AAADe0lEQVR4nO3YW0sqcRSG8b7/R1lqJoqGmmWMZCUWOERBYBdamvb/Cu++atidYL8XHab9XPxuZGSJ6xnmsJNSEvCvdr77B6BcCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGlVMHMZjN1Oh1VKhVFhM7Ozt497ubmRhGhiNB4PC4+32w2Go1Gqtfrqlar6vV6uru7K838n6BUwYxGI3W7XbVarQ8XtlqttLe3Vyz174UdHx8rItRqtdTv9xURqtfrenx8LMX8n6BUwfy9uI8Wdnh4qGazqSzLXizs/v6+WOLDw4NSSur1eooITadTXV1dKSLUbre13W61WCxUrVZVq9W0WCw+ff53/6f/ZTCz2UyVSkXz+VwnJycvFvZ8mWg0GsXxp6eniggNh0OllHR0dKSI0GQyKZY5m82+bH4Z/JpgFouFarWazs/PlVJ6s7A8z4vLwfN3JpOJIkK9Xk8pJa3XazUajeL+YzAYfOn8Mvg1wVxeXioidHBwoMFgoGazqYhQs9nUeDz+5zP8eYkRodvb2y+f/9P9mmAuLi6KRb+2v7+v5XJZ3EOsViul9PYeYrlcqlarqVqtKiLU6XS03W6/bH4ZlCqYPM+VZVnxlNJut5Vlma6vr98c+/qSkNLLp5TBYKCI0O7urtbrtZ6entTtdhURyvNcw+HwTRSfOf+7/
9tfGczzmf3ae08r7y1ss9koy7LiPUi32y3eg0ynU0WE+v2+Unr5eDyfzz99flmUKhh8P4KBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGAhGFgIBhaCgYVgYCEYWAgGFoKBhWBgIRhYCAYWgoGFYGD5A/C6IlaKRICZAAAAAElFTkSuQmCC" class="img-circle" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a href="#" class="btn btn-default">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img alt="500x500" data-src="holder.js/500x500/auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAMvklEQVR4nO3d304TeRjH4b3/S4FpKVhcFBREg8ofUwgCBkQBJYDALfz2YOMG6QygbtX58hw8Rzt97b4x/WTG6fSvy8vLAgC021+/+w0AAD9P0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOg
AEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBp/WePHlSxsbGvtvjx4/v/GccHx+XN2/elNnZ2TI5OVmqqirdbrf0+/2yuLhYtre3y8XFxXe/91HNtdc/d68wKoJO640yPBcXF2VlZaVUVXXrvOnp6bK/v3+n9zyqufb65+8VRkXQab1Rhef8/LwsLCx818yqqsq7d+9+y1x7bcdeYVQEndYbVXiWl5cbXzsxMdF4FlhVVfn06dMvn2uv7dgrjIqg03rXw9PpdMrBwcGtbvoQPzo6KuPj40Mf/g8fPiyHh4fl8vLfM8KNjY3a4+bm5n7pXHttz15hVASd1rsenm63+9Mzl5aWhj70x8fHa2P16tWr2jO/umP/77nn5+dlenq6NmTn5+dDM5uO//vvv4eOv897hTYSdFpvFOGZmJgY+sCfnZ2tPfbg4KA2ECsrK79k7tHRUe3l5NevXw/NrItZp9Opjdl93yu0jaDTetfDU1VVmZubK71er1RVVTqdTnnw4EFZWFgo6+vr5ezs7MZ5nz59qv3Arwvk5eW/
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" class="featurette-image img-responsive">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img alt="500x500" data-src="holder.js/500x500/auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAMvklEQVR4nO3d304TeRjH4b3/S4FpKVhcFBREg8ofUwgCBkQBJYDALfz2YOMG6QygbtX58hw8Rzt97b4x/WTG6fSvy8vLAgC021+/+w0AAD9P0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOg
AEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBp/WePHlSxsbGvtvjx4/v/GccHx+XN2/elNnZ2TI5OVmqqirdbrf0+/2yuLhYtre3y8XFxXe/91HNtdc/d68wKoJO640yPBcXF2VlZaVUVXXrvOnp6bK/v3+n9zyqufb65+8VRkXQab1Rhef8/LwsLCx818yqqsq7d+9+y1x7bcdeYVQEndYbVXiWl5cbXzsxMdF4FlhVVfn06dMvn2uv7dgrjIqg03rXw9PpdMrBwcGtbvoQPzo6KuPj40Mf/g8fPiyHh4fl8vLfM8KNjY3a4+bm5n7pXHttz15hVASd1rsenm63+9Mzl5aWhj70x8fHa2P16tWr2jO/umP/77nn5+dlenq6NmTn5+dDM5uO//vvv4eOv897hTYSdFpvFOGZmJgY+sCfnZ2tPfbg4KA2ECsrK79k7tHRUe3l5NevXw/NrItZp9Opjdl93yu0jaDTetfDU1VVmZubK71er1RVVTqdTnnw4EFZWFgo6+vr5ezs7MZ5nz59qv3Arwvk5eW/
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" class="featurette-image img-responsive">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img alt="500x500" data-src="holder.js/500x500/auto" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAAH0CAYAAADL1t+KAAAMvklEQVR4nO3d304TeRjH4b3/S4FpKVhcFBREg8ofUwgCBkQBJYDALfz2YOMG6QygbtX58hw8Rzt97b4x/WTG6fSvy8vLAgC021+/+w0AAD9P0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOg
AEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBB4AAgg4AAQQdAAIIOgAEEHQACCDoABBA0AEggKADQABBp/WePHlSxsbGvtvjx4/v/GccHx+XN2/elNnZ2TI5OVmqqirdbrf0+/2yuLhYtre3y8XFxXe/91HNtdc/d68wKoJO640yPBcXF2VlZaVUVXXrvOnp6bK/v3+n9zyqufb65+8VRkXQab1Rhef8/LwsLCx818yqqsq7d+9+y1x7bcdeYVQEndYbVXiWl5cbXzsxMdF4FlhVVfn06dMvn2uv7dgrjIqg03rXw9PpdMrBwcGtbvoQPzo6KuPj40Mf/g8fPiyHh4fl8vLfM8KNjY3a4+bm5n7pXHttz15hVASd1rsenm63+9Mzl5aWhj70x8fHa2P16tWr2jO/umP/77nn5+dlenq6NmTn5+dDM5uO//vvv4eOv897hTYSdFpvFOGZmJgY+sCfnZ2tPfbg4KA2ECsrK79k7tHRUe3l5NevXw/NrItZp9Opjdl93yu0jaDTetfDU1VVmZubK71er1RVVTqdTnnw4EFZWFgo6+vr5ezs7MZ5nz59qv3Arwvk5eW/
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" class="featurette-image img-responsive">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  

</body></html>