<!Doctype html>
<html>
    <head>
        <title>Drive4Yourself</title>
        <meta charset="UTF-8">
        <meta id="view" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
        <link rel='stylesheet' type='text/css' href='style.css' />
        <link rel="icon" type="image/png" href="img/uber_2.png">
    </head>
    <body>
        <!---  Visuals --->
        <?php include('inc/header.php'); ?>
        <?php include('branding.php'); ?>
        <?php include('about.php'); ?>
        <?php include('requirements.php'); ?>
        <?php include('contact.php'); ?>
        <?php include('inc/footer.php'); ?>
        <script src="https://use.fontawesome.com/e06c27e661.js"></script>
        <script type='text/javascript' src='js/jquery-3.1.1.js'></script>
        <script type='text/javascript' src='js/modernizr-custom.js'></script>
        <script type='text/javascript' src='js/jquery.scrollTo.min.js'></script>
        <script type='text/javascript' src='js/updateAlert.js'></script>
        <script type='text/javascript' src='js/nav.js'></script> 
        <script type='text/javascript'>
            $(document).ready(function(){
                mobileMenu();
                navigation('#brand', 'brandingDiv');
                
                navigation('#navAbout', 'about');
                navigation('#mobileNavAbout', 'about');
                
                navigation('#navRequirements', 'requirements')
                navigation('#mobileNavRequirements', 'requirements');
                
                navigation('#navContact', 'contact');
                navigation('#mobileNavContact', 'contact');
            });
        </script>
    </body>
</html>