<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AVA​– ​Care Management</title>

    <!-- Fonts -->
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Main Content -->
    <div class="container spark-splash-screen">
        <!-- Branding / Navigation -->
        <div class="row splash-nav">
            <div class="col-md-10 col-md-offset-1">
                <div class="pull-left splash-brand">
                    <i class="fa fa-btn fa-hospital-o"></i>AVA - Care Management
                </div>

                <div class="navbar-header">
                    <button type="button" class="splash-nav-toggle navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false" aria-controls="primary-nav">
                        <span class="sr-only">Toggle navigation</span>
                        MENU
                    </button>
                </div>

                <div id="primary-nav" class="navbar-collapse collapse splash-nav-list">
                    <ul class="nav navbar-nav navbar-right inline-list">
                        <!--
                            <li class="splash-nav-link active"><a href="/features">Features</a></li>
                            <li class="splash-nav-link"><a href="/support">Support</a></li>
                        -->
                        <li class="splash-nav-link splash-nav-link-highlight"><a href="/login">Login</a></li>
                        <li class="splash-nav-link splash-nav-link-highlight-border"><a href="/register">Register</a></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <!-- Inspiration -->
        <div class="row splash-inspiration-row">
            <div class="col-md-4 col-md-offset-1">
                <div id="splash-inspiration-heading">
                    Care Management Done Right
                </div>

                <div id="splash-inspiration-text">
                  Accident Victims Alliance is a 12­year old health management organization directed by a

20­year veteran of the insurance and healthcare industries. AVA’s mission is to provide FREE

assistance to accident victims and hospital patients in their time of need; filling the gaps

between injury, loss and recovery by managing post­hospitalization activities.
                </div>
            </div>

            <!-- Browser Window -->
            <div class="col-md-6" class="splash-browser-window-container">
                <div class="splash-browser-window">
                    <div class="splash-browser-dots-container">
                        <ul class="list-inline splash-browser-dots">
                            <li><i class="fa fa-circle red"></i></li>
                            <li><i class="fa fa-circle yellow"></i></li>
                            <li><i class="fa fa-circle green"></i></li>
                        </ul>
                    </div>
                    <div>
                        <img src="img/brown_nurse.jpg" style="width: 100%;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Heading -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 splash-row-heading">
                Features You'll Adore
            </div>
        </div>

        <!-- Feature Icons -->
        <div class="row splash-features-icon-row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="col-md-4 splash-features-feature">
                    <div class="splash-feature-icon">
                        <i class="fa fa-user-md"></i>
                    </div>


                    <div class="splash-feature-text">
                      Provide personalized transitional guidance for patient’s follow­up with a primary care

physician or assist in finding PCP and subsequent appointments.
                    </div>
                </div>

                <div class="col-md-4 splash-features-feature">
                    <div class="splash-feature-icon">
                        <i class="fa fa-support"></i>
                    </div>


                    <div class="splash-feature-text">
                        Support patient's medication regimen and reconciliation.
                    </div>
                </div>

                <div class="col-md-4 splash-features-feature">
                    <div class="splash-feature-icon">
                        <i class="fa fa-home"></i>
                    </div>


                    <div class="splash-feature-text">
                      Perform home assessments to learn patient’s circumstances including transportation
to appointments.
                    </div>
                </div>
            </div>
        </div>

        <!-- Feature Icons -->
        <div class="row splash-features-icon-row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="col-md-4 splash-features-feature">
                    <div class="splash-feature-icon">
                        <i class="fa fa-users"></i>
                    </div>


                    <div class="splash-feature-text">
                         Connect patients to community resources to sustain their healing process.
                    </div>
                </div>

                <div class="col-md-4 splash-features-feature">
                    <div class="splash-feature-icon">
                        <i class="fa fa-book"></i>
                    </div>


                    <div class="splash-feature-text">
                        Educate vulnerable patients with limited medical literacy.
                    </div>
                </div>

                <div class="col-md-4 splash-features-feature">
                    <div class="splash-feature-icon">
                        <i class="fa fa-heart"></i>
                    </div>



                    <div class="splash-feature-text">
                        Educate patients on the benefits associated with the Affordable Care Act.
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Variables -->
        <?php $plans = Spark::plans()->monthly()->active(); ?>

        <?php
            switch (count($plans)) {
                case 0:
                case 1:
                    $columns = 'col-md-6 col-md-offset-3';
                    break;
                case 2:
                    $columns = 'col-md-6';
                    break;
                case 3:
                    $columns = 'col-md-4';
                    break;
                case 4:
                    $columns = 'col-md-3';
                    break;
                default:
                    throw new Exception("Unsupported number of plans. Please customize view.");
            }
        ?>

        <!-- Pricing Heading -->
        @if (count($plans) > 0)
            <div class="row">
                <div class="col-md-10 col-md-offset-1 splash-row-heading">
                    Simple Pricing
                </div>
            </div>

            <!-- Pricing Table -->
            <div class="row splash-pricing-table-row text-center">
                <div class="col-md-10 col-md-offset-1">
                    @foreach ($plans as $plan)
                        @if ($plan->isActive())
                            <div class="{{ $columns }}">
                                <div class="panel panel-default spark-plan-{{ $plan->id }}">
                                    <div class="panel-heading splash-plan-heading">
                                        {{ $plan->name }}
                                    </div>

                                    <div class="panel-body">
                                        <ul class="splash-plan-feature-list">
                                            @foreach ($plan->features as $feature)
                                                <li>{{ $feature }}</li>
                                            @endforeach
                                        </ul>

                                        <hr>

                                        <div class="splash-plan-price">
                                            {{ $plan->currencySymbol }}{{ $plan->price }}
                                        </div>

                                        <div class="splash-plan-interval">
                                            {{ $plan->interval }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- Call To Action Button -->
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <a href="/register">
                        <button class="btn btn-primary splash-get-started-btn">
                            Get Started!
                        </button>
                    </a>
                </div>
            </div>
        @endif

        <!-- Customers Heading -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 splash-row-heading">
                What We Do
            </div>
        </div>

        <!-- Customer Testimonials -->
        <div class="row splash-customer-row">
            <div class="col-md-10 col-md-offset-1 text-center">
              <p>
              Accident Victims Alliance is a 12­year old health management organization directed by a

20 ­year veteran of the insurance and healthcare industries. AVA’s mission is to provide FREE

assistance to accident victims and hospital patients in their time of need; filling the gaps

between injury, loss and recovery by managing post­hospitalization activities.

Health studies prove the importance of preventative care to decrease patient rebounding and

readmission; keeping healthcare costs low and increase positive outcomes for patients. AVA

provides support to medical institutions by ensuring patients have adequate post­discharge

support.

AVA supports medical institutions in the following manner:
<ul>
<li> Provide personalized transitional guidance for patient’s follow­up with a primary care</li>

<li> Support patient's medication regimen and reconciliation.</li>

<li> Perform home assessments to learn patient’s circumstances including transportation</li>

<li> Connect patients to community resources to sustain their healing process.</li>

<li> Educate vulnerable patients with limited medical literacy.</li>

<li> Educate patients on the benefits associated with the Affordable Care Act.</li>
</ul>
AVA is seeking to support medical institutions / hospitals in Las Vegas and Los Angeles.

Advocating for patients and connecting them to medical resources conveniently available in

their communities.

AVA can help:
<ul>
<li> INFORM​ those without Personal Health Insurance</li>

<li> ELIMINATE​multiple non­productive ER visits overloading the hospital’s

man­power, facility capacity and financial capabilities</li>

<li> EDUCATE​people about Health Benefits and Rights our government has in place

for citizens of California and Nevada</li>

<li> ASSIST​those withOUT a Primary Care Physician</li>

<li> STOP​ victimization and fraudulent claims</li>

<li> STABILIZE i​nsurance rates ( Management + NO Fraud = Stable Rates )</li>
</ul>

For more information contact: R O Brooks @ (888) HELP ­ AVA​­or­ HelpMe@​AVAKY.com
</p>
        </div>

        <!-- Footer -->
        <div class="row">
            <!-- Company Information -->
            <div class="col-md-10 col-md-offset-1 splash-footer">
                <div class="pull-left splash-footer-company">
                    Copyright © {{ Spark::company() }} - <a href="/terms">Terms Of Service</a>
                </div>

                <!-- Social Icons -->
                <div class="pull-right splash-footer-social-icons">
                    <a href="http://facebook.com">
                        <i class="fa fa-btn fa-facebook-square"></i>
                    </a>
                    <a href="http://twitter.com">
                        <i class="fa fa-btn fa-twitter-square"></i>
                    </a>
                    <a href="http://github.com">
                        <i class="fa fa-github-square"></i>
                    </a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <!-- Footer Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
