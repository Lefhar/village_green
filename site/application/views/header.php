<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php if(!empty($title)){echo $title;}?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />  
    <meta itemprop="description"  name="description"  content="<?php if(!empty($title)){echo $title;}?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css?id=".date('is').""); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.css"); ?>" /> 
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" /> 
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url("assets/src/apple-icon-57x57.png"); ?>" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url("assets/src/apple-icon-60x60.png"); ?>" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url("assets/src/apple-icon-72x72.png"); ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url("assets/src/apple-icon-76x76.png"); ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("assets/src/apple-icon-114x114.png"); ?>" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url("assets/src/apple-icon-120x120.png"); ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url("assets/src/apple-icon-144x144.png"); ?>" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url("assets/src/apple-icon-152x152.png"); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("assets/src/apple-icon-180x180.png"); ?>" />
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url("assets/src/android-icon-192x192.png"); ?>" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url("assets/src/favicon-32x32.png"); ?>" />
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url("assets/src/favicon-96x96.png"); ?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("assets/src/favicon-16x16.png"); ?>" />
    <link rel="manifest" href="<?php echo base_url("assets/src/manifest.json"); ?>" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="<?php echo base_url("assets/src/ms-icon-144x144.png"); ?>" />
    <meta name="theme-color" content="#ffffff" />
    <!--Facebook Meta Tags-->
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=site_url($url);?>" />
    <meta property="og:title" content="<?php if(!empty($title)){echo $title;}?>" />
    <meta property="og:description" content="<?php if(!empty($title)){echo $title;}?>" /> 
    <meta property="og:image" content="<?php echo base_url($image); ?>" />
    <meta property="og:site_name" content="Village Green" />
    <!--End Facebook Meta Tags-->
</head>
<body>

<header>
   <!--
        header

    -->   

       <!--  barre du menu
    -->
    <div class="container">
        <div class="row">
    <div class="brand"> 
        <a  href="http://villagegreen.local/" > 
        <img src="<?php echo base_url("assets/src/logo.png"); ?>" class="logo" alt="village green" title="village green" >
        </a>
            <!--bouton sur mobile-->
          
              <nav class="navbar navbar-expand-lg navbar-light bg-menu-top">
            <!--bouton sur mobile-->

              
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-5">
                      <li class="nav-item">
                    <a class="nav-link nav-link-black" href="http://villagegreen.local/index.php">Infos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-black" href="http://villagegreen.local/annonces/liste">Espace client</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-black" href="http://villagegreen.local/contact">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-black" href="http://villagegreen.local/about">Langue</a>
                </li>
                      </ul>
            <!--
                barre de recherche dans la nav bar
            -->
            
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-menu-second">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-5">
                      <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/index.php">Produits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/annonces/liste">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/contact">Aide</a>
                </li>
                
                <li class="nav-item ">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/users/connexion">A propos</a>
                    </li>            </ul>
   
            
        </div>
    </nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-menu-three">
            <!--bouton sur mobile-->
            
            <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mr-5">
                      <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/index.php">Guit/Bass</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/annonces/liste">Batteries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/contact">Clavier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/about">Studio</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/users/connexion">Sono</a>
                    </li>
<li class="nav-item ">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/users/connexion">Eclairage</a>
                    </li>
<li class="nav-item ">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/users/connexion">DJ</a>
                    </li>
<li class="nav-item ">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/users/connexion">Cases</a>
                    </li>
<li class="nav-item ">
                    <a class="nav-link nav-link-white" href="http://villagegreen.local/users/connexion">Accessoires</a>
                    </li>            </ul>
            <!--
                barre de recherche dans la nav bar
            -->
            
        </div>
        
    </nav>
    
    
    </div>
</div>
</div>
    </header>
