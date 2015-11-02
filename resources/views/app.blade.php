<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>qnet</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/app.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="img/index.png" width="120" height="50">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#page">About us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#tryIndexModal">Contact us</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#privacyModal">Privacy Policy</a></li>
                </ul>
                  
                
                <ul class="nav navbar-nav navbar-right">
                    <li><div style="margin-top:7px; padding-left: 15px; padding-bottom:2px;">
                      <a href="#" data-toggle="modal" data-target="#tryIndexModal">
                          <img src="img/try-index.png" class="img-responsive" width="120" height="60">
                      </a>
                    </div></li>
                </ul>           
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="fullscreen-bg">
          <video autoplay loop poster="img/header.jpg" id="ytplayer">
            <source src="video/background.webm" type="video/webm">
            <source src="video/background.mp4" type="video/mp4">
            <source src="video/background.ogv" type="video/ogg"/>
<!--
            <source src="video/497230027_p1.webm" type="video/webm">
            <source src="video/497230027_p1.mp4" type="video/mp4">
            <source src="video/497230027_p1.ogv" type="video/ogg"/>
-->
          </video>
        </div>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="header-content">
                 @if (Session::has('flash_message'))
                 <div class="alert alert-success {{ Session::has('flash_message') ? 'alert' : ''}}" style="width:50%;">
                     @if (Session::has('flash_message_important'))
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     @endif
              
                     {{ Session::get('flash_message')}} 
                 </div>
                 @endif
                <h1>Professional</h1>
                <h1>Relationships,</h1>
                <h1>Organised</h1>
                <br>
                <p>Index collects, analyses and organises your professional relationship data</p>
                <a href="#page"><center><img src="img/down.png" class="img-responsive"></center></a>
            </div>
        </div>
    </header>

    <section class="page" id="page">
        <div class="container">
            <div class="row">
                <div class="top">
                  <div class="col-xs-12 col-sm-8 col-lg-6">
                    <h3>Index is a fast growing company based in London. We are backed by Rogues Ventures and the Royal College of Art. Our users are private companies, public companies and charities.
                    </h3>
                  </div>
                  <div class="col-xs-12 col-sm-1 col-lg-4" >
                  </div>
                  <div class="col-xs-12 col-sm-3 col-lg-2" >
                       <img alt="" src="img/logo.png" class="img-responsive">
                  </div>
                </div>
            </div>
            
            <div class="bottom">
            <div class="row">
               <div class="col-xs-12 col-sm-3 col-lg-2">
                  <h4>Index</h4>
                  <h4>Dyson Building</h4>
                  <h4>20 Howie Street</h4>
                  <h4>London SW11 4AS</h4>
               </div>
               <div class="col-xs-12 col-sm-3 col-lg-2" >
                   <br><br><br>
                   <h4>info@index.io</h4>
               </div>
               <div class="col-xs-12 col-sm-6 col-lg-8" >
               </div>
            </div>
            </div>
        </div>
    </section>

  <!-- Try Index Modal -->
  <div class="modal fade" id="tryIndexModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Contact Form</h2>
        </div>
        <div class="modal-body">
            {!! Form::open(['method' => 'POST', 'url' => '/contact', 'action' => 'ContactController@contact' ]) !!}
            <div class="form-group form-group-contact {{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                 @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
            </div>

            <div class="form-group form-group-contact {{ $errors->has('email') ? 'has-error' : '' }}">
                {!! Form::label('email', 'Email Address:') !!}
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' =>'Email Address']) !!}
                 @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
            </div>

            <div class=" {{ $errors->has('message') ? 'has-error' : '' }}">
            <div class="form-group form-group-contact ">
                {!! Form::label('message', 'Message:') !!}
                {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'Message', 'rows' => '5']) !!}   
            </div>
            @if ($errors->has('message')) <p class="help-block">{{ $errors->first('message') }}</p> @endif
            </div>

            <div class="form-group pull-right"> 
                <button type="submit" class="button-send form-control">Send</button>   
            </div>
            {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Try Index Modal -->

  <!-- Privacy Policy Modal -->
  <div class="modal fade" id="privacyModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title">Index Privacy Policy</h2>
        </div>
        <div class="modal-body">
          <p>Effective Date: 28th September 2015</p>
          <p>Thank you for taking the time to read our Privacy Policy. Your privacy is of the utmost importance to us. Our business depends on the trust of millions of users and contacts who have their information stored with Index. </p>
          <p>The following explains the privacy and data practices at Index, (“Index”, “We”, “Us”, or “Our”). After you read it, if you have any questions please contact us by emailing 
          <a href="#">privacy@index.io.</a></p>
          <p>Thank you for visiting our website and using our products and services.</p>
          <h2>The Information We Collect and Use</h2>
          <p>Any information provided to us through the our products and services will be retained and used solely for the purposes of fulfilling your request for information, performing and carrying out the Terms of the Service, performing or improving our Service.</p>
          <h2>Aggregate Information</h2>
          <p>From time to time, we may collect general, non-identifiable personal, statistical information about the use of the Site and the Service, such as how many visitors visit a specific page on the Sites, how long they stay on that page, and which hyperlinks, if any, they “click” on. However, please be assured that this aggregate data will in no way personally identify you, other list members or any other visitors to index.io.</p>
          <p>We may store your personal information along with your files and data on a third party server such as Amazon Web Services; or we may use a third party analytics tool to learn how you are using our Sites.</p>
          <p>In cases where you use a mobile device to access our Sites, we will receive information about the location of your device. In some cases, even if you are not using a mobile device, information about your general location may be discernable from your device’s IP address or the URLs we receive. If you access or use our Sites or Services with your mobile telephone, we may collect your telephone number.</p>
          <h2>Cookies and Other Tracking Technologies</h2>
          <h4>Log Files</h4>
          <p>As is true of most web sites, we gather certain information automatically and store it in log files. This information may include internet protocol (IP) addresses, browser type, internet service provider (ISP), referring/exit pages, operating system and/or date/time stamp. We do not link this automatically collected data to other information we collect about you.</p>
          <h3>Local Storage Objects (Flash/HTML5)</h3>
          <p>We use Local Storage, such as HTML5, to store content information and preferences. Third parties with whom we partner to provide certain features on our website or to display advertising based upon your web browsing activity also uses Flash cookies and HTML5 to collect and store information. Various browsers may offer their own management tools for removing HTML5. </p>
          <h3>Mobile Analytics</h3>
          <p>We use mobile analytics software to allow us to better understand the functionality of our mobile software on your phone. This software may record information such as how often you use the application, the events that occur within the application, aggregated usage, performance data, and where the application was downloaded from. We do not link this information we store within the analytics software to any personal information you submit within the mobile application.</p>
          <h2>Retention of Personal Information</h2>
          <p>We will retain your personal information for the period necessary to fulfil the purposes outlined in this Privacy Policy unless a longer retention period is applicable by law. We will make good faith efforts to delete the data if you contact us by following the instructions at the beginning and at the end of this Privacy Policy, provided Return Path is not required to retain it by law or for legitimate business purposes. We will retain your information for as long as your account is active or as needed to provide you services. 
          If you wish to cancel your account your information will be deleted.</p>
          <h2>Information Sharing and Disclosure</h2>
          <p>We will not share your personal information with anyone outside of your own organisation. </p>
          <p>Customer shall own all right, title and interest in and to the Customer Data [as well as any data that is based on or derived from the Customer Data and provided to Customer as part of the Services] </p>
          <p>To the extent we are legally permitted to do so, we will take reasonable steps to notify you in the event that we are required to provide your personal information to unapproved third parties as part of legal process.</p>
          <h2>Change of Control / Asset Transfer</h2>
          <p>As the Company develops, we may buy other businesses or their assets or sell all or parts of our business assets. Customer information is generally one of the business assets involved in such transactions. Thus, in the event that the assets of the Company in whole or in parts are acquired by a third-party, customer information, including any visitor information collected through the Sites or the Service, would be one of the transferred assets. In the event of a corporate change in control or sale of all or parts of our business assets our users will be notified in accordance with the “Changes to this Policy” section of the policy if their personal information is provided to the new corporate entity or asset purchaser.</p>
          <h2>Communications from Index</h2>
          <h3>Service Email</h3>
          <p>As someone with an active Service account, we may send you service-related email messages, which are not promotional in nature, on occasions when it is necessary. Similarly, if you request assistance with one of our products or services, we will communicate with you through email until we have addressed your questions.</p>
          <h3>Customer Service</h3>
          <p>Based upon the information you provide us, we will communicate with you in response to your inquiries, to provide the services you request, and to manage your account. We may communicate with you by email or telephone.</p>
          <h2>Security and Information Protection</h2>
          <p>The security of your information is important to us. When you enter sensitive information (such as your registration information), we encrypt that information using Secure Socket Layer (SSL) technology. We follow generally accepted industry standards to protect the information submitted to us, both during transmission and once we receive it. 
          If you have any questions about security you can contact Index by emailing us at <u>privacy@index.io</u>.</p>
          <h2>Collection and Use of 3rd Party Personal Information</h2>
          <p>You may provide personal information about other people, such as their name and email address. This information is only used for the sole purpose of completing your request or for whatever reason it may have been provided.</p>
          <h2>Privacy Policy for Children</h2>
          <p>We do not knowingly collect information from children under the age of 13 through our Sites or Services. If you are under the age of 13, please do not provide any information to us. If we receive notice that we have collected information from a child under the age of 13, we will make commercially reasonable efforts to delete such information. </p>
          <h2>Changes to This Policy</h2>
          <p>Index reserves the right, at its discretion, to change, modify, add, or remove portions from this policy at any time by posting such changes here. Users should review this policy regularly for changes, and can easily see if changes have been made by checking the Effective Date above. However, if at any time in the future Index plans to use Identifiable Information in a way that differs from this policy, Index will post such changes here and provide you with the opportunity to opt-out of such differing uses prior to the change becoming effective. Your continued use following the posting of any changes to this policy means acceptance of such changes.</p>
          <h2>Contacting Us</h2>
          <p>We value your opinions. If you have comments or questions about our privacy policy, you may contact Index by emailing us at <a href="">privacy@index.io</a>, or contact:</p>
          <p>
            <i>Index</i><br>
            <i>20 Howie Street</i><br>
            <i>London</i><br>
            <i>SW11 4AS</i><br>
            <i>UK</i>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Privacy Policy Modal -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        // Closes the Responsive Menu on Menu Item Click
        $('.navbar-collapse ul li a').click(function() {
            $('.navbar-toggle:visible').click();
        });
    </script>
    
    <!-- scroll to an anchor on the same page -->
    <script type="text/javascript" language="javascript">
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
           }
         }
        });
      });
    </script>
    <!-- scroll to an anchor on the same page -->

    <script type="text/javascript">
        // Offset for Main Navigation
        $('#mainNav').affix({
            offset: {
                top: 100
            }
        })
    </script>

    <!-- alert-success -->
    <script type="text/javascript">
      $('div.alert').not('.alert-important').delay(4000).slideUp(300);
    </script>
    <!-- alert-success -->
    
</body>

</html>

