<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Heather Read & Jordan Skole - The Cutest Two</title>
  <meta name="description" content="Heather Read is set to wed Jordan Skole on August 16, 2014 in Traverse City MI" />  
  <!--[if IE 8]><link rel="stylesheet" href="css/ie8.css" /> <![endif]-->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic">  
  <link rel="stylesheet" href="/eternity/css/normalize.min.css" />
  <link rel="stylesheet" href="/eternity/css/foundation.min.css" />   
  <link rel="stylesheet" href="/eternity/css/flexslider.css" />
  <link rel="stylesheet" href="/eternity/css/style.css" />
  <link rel="stylesheet" href="/eternity/css/media-queries.css" />
  <link rel="stylesheet" href="/eternity/css/custom.css" />
  <!-- Icons Font Are Awesome -->
  <link rel="stylesheet" href="/eternity/css/font-awesome.min.css" />
  @yield('styles')

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/eternity/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/eternity/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/eternity/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/eternity/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/eternity/img/favicon.ico">
</head>
<body>
  @yield('edit-bar')
  <!-- START Navigation for mobile devices -->
  <nav class="front-menu top-bar nav">
    <ul class="title-area">
      <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
    </ul>

    <section class="top-bar-section">
      <ul>
        <li><a href="#section-0"><i class="fa fa-arrow-up"></i></a></li>
        <li><a href="#section-1">Our Story</a></li>
        <li><a href="#section-2">Photos</a></li>
        <li><a href="#section-3">Wedding Party</a></li>
        <li><a href="#section-5">Gifts</a></li>
        <li><a href="#section-6">Lodging</a></li>
        <li><a href="#section-7">Subscribe</a></li>      
      </ul>
    </section>
  </nav><!-- END Navigation for mobile devices -->

  <div class="row collapse">
    <aside id="aside-nav" class="large-3 columns hide-for-medium-down">  
      <div class="side-nav-container nav">
        <div class="shadow"></div>  
        <h1 class="logo"><a href="#section-0">J + H</a></h1>              
        <nav class="hide-for-large-down">
          <ul class="side-nav primary-nav">
            <li><a href="#section-1">Our Story</a></li>
            <li><a href="#section-2">Photos</a></li>
            <li><a href="#section-3">Wedding Party</a></li>
            <li><a href="#section-5">Gifts</a></li>
            <li><a href="#section-6">Lodging</a></li>
            <li><a href="#section-7">Subscribe</a></li>  
          </ul>
        </nav>
      </div><!-- END .nav-container .shadow -->         
    </aside>

    <div id="main" class="large-9 columns">
      @yield('content')
      <footer class="section-odd"> 
      <p class="pull-right">
        Do you like this site?
        <a href="mailto:jordan@skole.us?subject=I%20want%20a%20site%20like%20this!" title="E-mail Us">
          Yes
        </a>
        / No
      </p>
      </footer><!--END footer-->  
    </div><!--END main-->
  </div><!--END .row-->
  @yield('tour')
    <script src="/eternity/js/vendor/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="/eternity/js/foundation.min.js"></script>
    <script src="/eternity/js/foundation/foundation.abide.js"></script>
    <script src="/eternity/js/vendor/jquery.backstretch.min.js"></script>
    <script src="/eternity/js/vendor/jquery.scrollTo-1.4.3-min.js"></script>
    <script src="/eternity/js/vendor/jquery.nav.min.js"></script>
    <script src="/eternity/js/vendor/jquery.flexslider.js"></script>
    <script src="/eternity/js/custom.js"></script>

    <script>
      $(document).foundation();
    </script>
    <!-- google analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-28894616-2', 'cutest-two.com');
      ga('send', 'pageview');

    </script>
    <!-- google analytics -->
    @yield('scripts')

  </body>
</html>