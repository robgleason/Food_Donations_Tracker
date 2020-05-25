<html>
<head>
    <title>Food Database</title>

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- CSS  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    
</head>
    <body>

        <div class="top_bar">
            <div class="logo">
                <h4 class="thetitle"><a style = "color:white;" href="index.php">Food Tracker</a></h4>
            </div>
        </div>    
        <div class="wrapper">
            <div class="initial_choice">
            <h3>What do you wish to donate?</h3>  <br> 
            <button type="button" onclick="window.location.href = 'main.php';" class="btn btn-outline-dark btn-lg">Meat</button>
            <button type="button" onclick="window.location.href = 'main.php';" class="btn btn-outline-dark btn-lg">Milk</button>
            <button type="button" onclick="window.location.href = 'main.php';" class="btn btn-outline-dark btn-lg">Vegetables</button>
            <button type="button" onclick="window.location.href = 'main.php';" class="btn btn-outline-dark btn-lg">Other</button>
            </div>    
        </div>
    </body>

</html>    