<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/  dc: http://purl.org/dc/terms/  foaf: http://xmlns.com/foaf/0.1/  og: http://ogp.me/ns#  rdfs: http://www.w3.org/2000/01/rdf-schema#  schema: http://schema.org/  sioc: http://rdfs.org/sioc/ns#  sioct: http://rdfs.org/sioc/types#  skos: http://www.w3.org/2004/02/skos/core#  xsd: http://www.w3.org/2001/XMLSchema# ">
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><head>
    <meta charset="utf-8" />
<meta name="Generator" content="Drupal 8 (https://www.drupal.org)" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="../sites/all/themes/zircon/ipeslogo.png" type="image/png" />

    <title>Update | IPES</title>
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

   @include('message')
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
                <li class="menu-item menu-item--collapsed">
        <a href="52" data-drupal-link-system-path="node/52">Personal</a>
              </li>
              @if(Auth::check())
            <li class="menu-item menu-item--collapsed col-md-push-1">
               <a href="{{route('logout')}}" >Logout</a>
              </li>
            @endif   
        </ul>
  


  </nav>

  </div>
						
          </div>
        </div>
    </nav>
  
  
  
  
      

  <section id="main" class="main" role="main">
    <a id="main-content"></a>
    <div class="container">
      <div class="row">
        
        		
        <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
          

          
                  

          

          
            <div class="region region-content">
    <div id="block-zircon-content" class="block block-system block-system-main-block">
  
    
      <form class="register-form" data-drupal-selector="register-form" action="72" method="post" id="register-form" accept-charset="UTF-8">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

  @if(Auth::check())
  <div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-title form-item-title">
      <label for="edit-title" class="js-form-required form-required">Title:</label>
        <input data-drupal-selector="edit-title" type="text" id="edit-title" name="title" value="{{Auth::user()->title}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-first-name form-item-first-name">
      <label for="edit-first-name" class="js-form-required form-required">First Name:</label>
        <input data-drupal-selector="edit-first-name" type="text" id="edit-first-name" name="first_name" value="{{Auth::user()->first_name}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-last-name form-item-last-name">
      <label for="edit-last-name" class="js-form-required form-required">Last Name:</label>
        <input data-drupal-selector="edit-last-name" type="text" id="edit-last-name" name="last_name" value="{{Auth::user()->last_name}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-email form-type-email js-form-item-email form-item-email">
      <label for="edit-email" class="js-form-required form-required">Email ID:</label>
        <input data-drupal-selector="edit-email" type="email" id="edit-email" name="email" value="{{Auth::user()->email}}" size="60" maxlength="254" class="form-email required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-tel form-type-tel js-form-item-phone form-item-phone">
      <label for="edit-phone">Contact Number:</label>
        <input data-drupal-selector="edit-phone" type="tel" id="edit-phone" name="phone" value="{{Auth::user()->phone}}" size="30" maxlength="128" class="form-tel" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-address form-item-address">
      <label for="edit-address" class="js-form-required form-required">Address:</label>
        <input data-drupal-selector="edit-address" type="text" id="edit-address" name="address" value="{{Auth::user()->address}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-city form-item-city">
      <label for="edit-city" class="js-form-required form-required">City:</label>
        <input data-drupal-selector="edit-city" type="text" id="edit-city" name="city" value="{{Auth::user()->city}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-number form-type-number js-form-item-zip-code form-item-zip-code">
      <label for="edit-zip-code" class="js-form-required form-required">ZIP:</label>
        <input data-drupal-selector="edit-zip-code" type="number" id="edit-zip-code" name="zip_code" value="{{Auth::user()->zip_code}}" step="1" class="form-number required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-state form-item-state">
      <label for="edit-state" class="js-form-required form-required">State:</label>
        <input data-drupal-selector="edit-state" type="text" id="edit-state" name="state" value="{{Auth::user()->state}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-country form-item-country">
      <label for="edit-country" class="js-form-required form-required">Country:</label>
        <input data-drupal-selector="edit-country" type="text" id="edit-country" name="country" value="{{Auth::user()->country}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-select form-type-select js-form-item-status form-item-status">
      <label for="edit-status">Status</label>
        <select data-drupal-selector="edit-status" id="edit-status" name="status" class="form-select">
        
        <option value="" selected>{{Auth::user()->status}}</option>
        <option value="graduate_student">Graduate Student</option>

        <option value="assistant_professor">Assistant Professor
        
        </option><option value="associate_professor">Associate Professor</option><option value="full_professor">Full Professor</option>
        
        <option value="other">Other</option></select>
        
        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-institution form-item-institution">
      <label for="edit-institution" class="js-form-required form-required">Institution:</label>
        <input data-drupal-selector="edit-institution" type="text" id="edit-institution" name="institution" value="{{Auth::user()->institution}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
<div class="js-form-item form-item js-form-type-textfield form-type-textfield js-form-item-department form-item-department">
      <label for="edit-department" class="js-form-required form-required">Department:</label>
        <input data-drupal-selector="edit-department" type="text" id="edit-department" name="department" value="{{Auth::user()->department}}" size="60" maxlength="128" class="form-text required" required="required" aria-required="true" />

        </div>
  <div data-drupal-selector="edit-actions" class="form-actions js-form-wrapper form-wrapper" id="edit-actions">
  <input data-drupal-selector="edit-submit" type="submit" id="edit-submit"class="button button--primary js-form-submit form-submit" />
  </div>

@endif

</form>

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

    
    <script type="application/json" data-drupal-selector="drupal-settings-json">{"path":{"baseUrl":"\/demo\/","scriptPath":null,"pathPrefix":"","currentPath":"node\/71","currentPathIsAdmin":false,"isFront":false,"currentLanguage":"en"},"pluralDelimiter":"\u0003","ajaxPageState":{"libraries":"classy\/base,classy\/messages,core\/html5shiv,core\/normalize,system\/base,views\/views.module,zircon\/global-styling","theme":"zircon","theme_token":null},"ajaxTrustedUrl":{"form_action_cc611e1d":true},"user":{"uid":0,"permissionsHash":"ddfc0ff7b93c6ae430c24e8b0d49a0993a151ac4105bad1c3f6e4a1dffa90a18"}}</script>
<script src="../sites/default/files/js/js_wPIq1eSTygcP0gGWm5Ntf27yis7Ud_PXUO8iBMW9fz0.js"></script>

  </body>

</html>

