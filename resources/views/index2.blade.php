<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$frontPage->about_page_body}}">
    <meta name="author" content="Jyrone Parker">

    <title>{{$frontPage->title}}</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="theme/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="theme/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="theme/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="theme/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">{{$frontPage->company_name}}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#{{str_slug($frontPage->link_1)}}">{{$frontPage->link_1}}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#{{str_slug($frontPage->link_2)}}">{{$frontPage->link_2}}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#{{str_slug($frontPage->link_3)}}">{{$frontPage->link_3}}</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#{{str_slug($frontPage->link_4)}}">{{$frontPage->link_4}}</a>
                    </li>
                    <li>
                        <a href="enrollment-forms">{{$frontPage->link_5}}</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>{{$frontPage->top_page_header}}</h1>

                <p>{{$frontPage->top_page_body}}</p>

            </div>
        </div>
    </header>

    <section class="bg-primary" id="{{str_slug($frontPage->link_1)}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">{{$frontPage->about_page_header}}</h2>
                    <hr class="light">
                    <p class="text-faded">  {{$frontPage->about_page_body}}</p>
                    <a href="#{{str_slug($frontPage->link_4)}}" class="page-scroll btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="{{str_slug($frontPage->link_2)}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$frontPage->services_page_header}}</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x  {{$frontPage->services_page_icon1}} wow bounceIn text-primary"></i>
                        <h3>{{$frontPage->services_page_header1}}</h3>
                        <p class="text-muted">{{$frontPage->services_page_body1}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x  {{$frontPage->services_page_icon2}} wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>{{$frontPage->services_page_header2}}</h3>
                        <p class="text-muted">{{$frontPage->services_page_body2}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x  {{$frontPage->services_page_icon3}} wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>{{$frontPage->services_page_header3}}</h3>
                        <p class="text-muted">{{$frontPage->services_page_body3}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x  {{$frontPage->services_page_icon4}} wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>{{$frontPage->services_page_header4}}</h3>
                        <p class="text-muted">{{$frontPage->services_page_body4}} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$frontPage->pic_1_header}}</h4>
      </div>
      <div class="modal-body">
        <p>{{$frontPage->pic_1_body}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">{{$frontPage->pic_2_header}}</h4>
  </div>
  <div class="modal-body">
    <p>{{$frontPage->pic_2_body}}</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>
<!-- Modal -->
<div id="myModal3" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">{{$frontPage->pic_3_header}}</h4>
  </div>
  <div class="modal-body">
    <p>{{$frontPage->pic_3_body}}</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>
<!-- Modal -->
<div id="myModal4" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">{{$frontPage->pic_4_header}}</h4>
  </div>
  <div class="modal-body">
    <p>{{$frontPage->pic_4_body}}</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>
<!-- Modal -->
<div id="myModal5" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">{{$frontPage->pic_5_header}}</h4>
  </div>
  <div class="modal-body">
    <p>{{$frontPage->pic_5_body}}</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>
<!-- Modal -->
<div id="myModal6" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">{{$frontPage->pic_6_header}}</h4>
  </div>
  <div class="modal-body">
    <p>{{$frontPage->pic_6_body}}</p>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>

</div>
</div>



    <section class="no-padding" id="{{str_slug($frontPage->link_3)}}">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal1" class="portfolio-box">
                        <img src="theme/img/portfolio/1.jpg" class="img-responsive"  alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                  {{$frontPage->pic_1_header}}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal2"  class="portfolio-box">
                        <img src="theme/img/portfolio/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                  {{$frontPage->pic_2_header}}
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal3"  class="portfolio-box">
                        <img src="theme/img/portfolio/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                  {{$frontPage->pic_3_header}}
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal4"  class="portfolio-box">
                        <img src="theme/img/portfolio/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                  {{$frontPage->pic_4_header}}
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal5" class="portfolio-box">
                        <img src="theme/img/portfolio/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                  {{$frontPage->pic_5_header}}
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a data-toggle="modal" data-target="#myModal6"  class="portfolio-box">
                        <img src="theme/img/portfolio/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                  {{$frontPage->pic_6_header}}
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section id="{{str_slug($frontPage->link_4)}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">{{$frontPage->contact_page_header}}</h2>
                    <hr class="primary">
                    <p>{{$frontPage->contact_page_body}}</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>{{$frontPage->contact_page_phone}}</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:{{$frontPage->contact_page_email}}"> {{$frontPage->contact_page_email}} </a></p>
                </div>
                <form role="form" method="POST" action="/request-more-info-home">
                  <div class="form-group">
                  <input class="form-control" required placeholder="First Name" name="first_name" type="text">
                  <input class="form-control" required placeholder="Last Name" name="last_name" type="text">
                  <input class="form-control" required placeholder="Email" name="email" type="email">
                  <input class="form-control" required placeholder="Phone" name="phone" type="tel">
                  <select class="form-control" required="true" id="carrier" name="carrier">
                    <option value="" disabled selected>Select Your Phone Carrier</option>
                    @foreach($gateways as $gateway)
                    <option value="{{$gateway->address}}">{{$gateway->name}}</option>
                    @endforeach
                  </select>
                  <textarea class="form-control" placeholder="Comments" name="comments" type="text"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-xl wow tada center-block">Request More Info</button>
                </form>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="theme/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="theme/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="theme/js/jquery.easing.min.js"></script>
    <script src="theme/js/jquery.fittext.js"></script>
    <script src="theme/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="theme/js/creative.js"></script>

</body>

</html>
