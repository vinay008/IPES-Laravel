<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><head>
    <meta charset="utf-8" />
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../sites/all/themes/zircon/ipeslogo.png" type="image/png" />

    <title>About | IPES</title>
    <link rel="stylesheet" href="../sites/default/files/css/css_rugppQtk4sWXH2GvMZoTX8tVj-LDtZKBJUQ4jzuwdZg3d80.css?oj55k3" media="all" />
<link rel="stylesheet" href="../sites/default/files/css/css_LGVTS2TVQavNbmHEQwq9yQauKDRrJQXpnOkE52TRYdI3d80.css?oj55k3" media="all" />
<link rel="stylesheet" href="../sites/default/files/css/css_47DEQpj8HBSa-_TImW-5JCeuQeRkm5NMpJWZG3hSuFU3d80.css?oj55k3" media="print" />
<link rel="stylesheet" href="../sites/default/files/css/css_6r6qoNukwkz1-vNUdtrTU9ZU3L-XCsWLUod7LksSYOE3d80.css?oj55k3" media="all" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-touch-fullscreen" content="YES" />
  </head>
  <body>
    
    <div class="page">
<a name="Top" id="Top"></a>
<header id="header" class="header" role="header">
  <div class="container">
    
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-inner">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

      <div class="region region-header">
    <div id="block-zircon-branding" class="block block-system block-system-branding-block">
  
    
        </div>

  </div>

    
  </div>
</header>

  
      <nav id="main-menu" class="navbar navbar-default" role="navigation">  
        <div class="collapse navbar-collapse" id="main-menu-inner">
          <div class="container">
              <div class="region region-main-menu">
    <nav role="navigation" aria-labelledby="block-zircon-main-menu-menu" id="block-zircon-main-menu" class="block block-menu navigation menu--main">
            
  <h2 class="visually-hidden" id="block-zircon-main-menu-menu">Main navigation</h2>
  

        
              <ul class="menu">
                    <li class="menu-item">
        <a href="../index" data-drupal-link-system-path="&lt;front&gt;">Home</a>
              </li>
                <li class="menu-item">
        <a href="7" title="about page" data-drupal-link-system-path="node/7">About IPES</a>
              </li>
                <li class="menu-item">
        <a href="44" data-drupal-link-system-path="node/44">Conferences</a>
              </li>
                <li class="menu-item">
        <a href="32" data-drupal-link-system-path="node/32">Virtual IPES</a>
              </li>
                <li class="menu-item">
        <a href="55" data-drupal-link-system-path="node/55">Awards</a>
              </li>
 <li class="menu-item menu-item--expanded menu-item--active-trail">
              <a href="52" data-drupal-link-system-path="node/52" class="is-active">Personal</a>

          <ul class="menu">
                    <li class="menu-item">

            @if(Auth::check())
             <li class="menu-item menu-item--collapsed">
               <a href="{{route('/node/87')}}" >View Status Of Uploaded Proposal's</a>
              </li>
            
             <li class="menu-item menu-item--collapsed">
               <a href="{{route('/node/88')}}">View Status Of Uploaded paper's Or ppt</a>
              </li>
              <li class="menu-item menu-item--collapsed">
               <a href="{{route('logout')}}" >Logout</a>
              </li>
            @else 
             <li class="menu-item">
              <a href="73" data-drupal-link-system-path="node/71">Login</a>
            </li>
            <li class="menu-item">
              <a href="71" data-drupal-link-system-path="node/71">User Registration</a>
            </li>
          @endif
        </ul>
              </li>
        </ul>
  </nav>

  </div>
            
          </div>
        </div>
    </nav>
        

      <section id="help" class="help">
      <div class="container">
          <div class="region region-help">  


  </div>

      </div>
    </section>
      

  <section id="main" class="main" role="main">
    <a id="main-content"></a>
    <div class="container">
      <div class="row">
        
            
        <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
          

          
                    

            <div class="region region-content">
    <div id="block-zircon-content" class="block block-system block-system-main-block">
             @foreach($data as $da)
                <p></p><p><b>Author email id :</b>{{$da->u_email}}</p>

                <p><b>Paper/Presentation title :</b>{{$da->u_email}}</p>
                
                <p><b>Paper/Presentation File :</b><a href="{{$da->image_url}}" download="{{$da->image_url}}">{{$da->image_url}}</a></p>
                <p></p><p></p>
                <p>
                <p><b>Status:</b>{{$da->status}}</p>
                <a href="{{$da->image_url}}" download="{{$da->image_url}}"><b><u>View And Download</u></b></a>
                 <a href=" {{ route('approve86',['doneapp'=>$da->id]) }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Approve Paper</u></b></a>

                 <a href="{{ route('reject86',['rejapp'=>$da->id]) }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Reject Paper</u></b></a>
                </p>
                <hr>
              @endforeach
  </div>

  </div>


          <!---->
        </div>

              </div>
    </div>
  </section>
  </div>

  </div>


          <!---->
        </div>

              </div>
    </div>
  </section>

      
      <section id="panel_second" class="panel_second">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="region region-panel-second-1">
    <div class="views-element-container block block-views block-views-blockpanel-content-block-1" id="block-views-block-panel-content-block-1">
  
    
      <div><div>
      
      <div class="view-content">
          <div class="views-row">
    <div class="views-field views-field-title"><span class="field-content"><a href="40" hreflang="en">Privacy policy</a></span></div>
  </div>

    </div>
  
          </div>
</div>

  </div>

  </div>

          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="region region-panel-second-2">
    <div class="views-element-container block block-views block-views-blockpanel2-block-1" id="block-views-block-panel2-block-1">
  
    
      <div><div>
      
      <div class="view-content">
          <div class="views-row">
    <div class="views-field views-field-title"><span class="field-content"><a href="41" hreflang="en"> Terms of Use</a></span></div>
  </div>

    </div>
  
          </div>
</div>

  </div>

  </div>

          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="region region-panel-second-3">
    <div class="views-element-container block block-views block-views-blockpanel3-block-1" id="block-views-block-panel3-block-1">
  
    
      <div><div>
      
      <div class="view-content">
          <div class="views-row">
    <div class="views-field views-field-title"><span class="field-content"><a href="42" hreflang="en"> Refund Policy</a></span></div>
  </div>

    </div>
  
          </div>
</div>

  </div>

  </div>

          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            
          </div>
        </div>
      </div>
    </section>
    
    <a href="#Top" class="btn-btt" title="Back to Top" style="display: block;"></a>          

      <footer id="footer" class="footer" role="contentinfo">
      <div class="container">
          <div class="region region-footer">
    <div class="views-element-container block block-views block-views-blockfooter-content-block-1" id="block-views-block-footer-content-block-1">
  
    
      <div><div>
      
      <div class="view-content">
          <div class="views-row">
    <div class="views-field views-field-body"><div class="field-content"><p class="text-align-center">2016 © International Political Economy Society (IPES).</p>
</div></div>
  </div>

    </div>
  
          </div>
</div>

  </div>



  </div>

      </div>
    </footer>
  
</div>

    
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/demo\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/73","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en"},"pluralDelimiter":"\u0003","ajaxPageState":{"libraries":"classy\/base,classy\/messages,core\/html5shiv,core\/normalize,system\/base,views\/views.module,zircon\/global-styling","theme":"zircon","theme_token":null},"ajaxTrustedUrl":{"form_action_cc611e1d":true},"user":{"uid":0,"permissionsHash":"ddfc0ff7b93c6ae430c24e8b0d49a0993a151ac4105bad1c3f6e4a1dffa90a18"}}</script>
<script src="../sites/default/files/js/js_wPIq1eSTygcP0gGWm5Ntf27yis7Ud_PXUO8iBMW9fz0.js"></script>

  </body>
</html>