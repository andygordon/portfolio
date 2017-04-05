<?php $path = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); ?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="chrome=1">
        <meta name="description" content="Andrew Gordon : Personal Portfolio of work">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        <script type="text/javascript" src="./assets/js/script.js"></script>
        <script type="text/javascript" src="./assets/js/jquery.onepage-scroll.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenMax.min.js"></script>
        
        <!-- fonts -->
        <script src="https://use.typekit.net/vgl2vjx.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <script src="https://use.fontawesome.com/4df8943a7b.js"></script>
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- styles -->
        <link rel="stylesheet" href="./assets/css/styles.css" />
        

        <script>
            $(document).ready(function(){
                <?php
                    $iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
                    $iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                    $iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
                    $CriOS   = stripos($_SERVER['HTTP_USER_AGENT'],"CriOS");
                
                    if ($iPod || $iPhone || $iPad || $CriOS ){
                        
                        echo "$('body').addClass('apple-device');";
                        
                    } else {
                        
                        if ($path == "web" || $path == "digital"){            
                            echo "$('.main-content').onepage_scroll();";
                        }
                        
                    }
                ?>
                
            });
            
            
            $(document).ready(function(){
                $('.work-link').hover(function(){
                    $(this).parent().toggleClass('hover');
                });
            });
            
            $( document ).mousemove( function( e ) {
                $( '.para1' ).parallax( -60, e );
                $( '.para2' ).parallax( -20, e );
                $( '.para3' ).parallax( -40, e );
            });
        </script>
        
        
        <title>Andrew Gordon - Open Designs</title>
    </head>
    
    
    
    <body class="<?php 
            if($path != "index"){
                echo "content-page ";
                echo $path;
            } else {
                echo $path;
            }
        ?>">
           
            <?php if ($path == "index"){ ?>
                <div class="main-container">
            <?php } ?>
                   
                <header class="main-header">
                    <a href="./"><h1>ANDREW<span>GORDON</span></h1></a>
                    <span class="menu-button">
                        <span class="middle-bar"></span>
                    </span>
                </header>

                <?php
                    if ($path != "index"){            
                        include('menu.php');
                    } else { 
                ?>

                    <div class="main-body">
                        <?php include('menu.php');?>
                    </div>
                <?php } ?>
        
            <?php if ($path == "index"){ ?>
                </div>
            <?php } ?>
        <div class="main-content">
            