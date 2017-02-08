<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Casper Streefkerk</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <!-- Custom libs -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400i,500,700" rel="stylesheet">
    <link rel="stylesheet" href="libs/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="mainImage">
        <img src="images/header.jpg" alt="Casper Streefkerk">
    </div>
    <div class="container-fluid">
            <a href="#" class="logo">Casper Streefkerk</a>
            <nav>
                <a href="#">Home</a>
                <a href="#about">About</a>
                <a href="#work">Work</a>
                <a href="#contact">Contact</a>
            </nav>
    </div>

    <div class="container-fluid">
        <div class="callOut text-center">
            <p>I create web experiences<span class="colorPoint">.</span></p>
        </div>
    </div>
</header>



<div id="wrap">
    <div id="about" class="container content">
        <div class="row sectionTitle">
            <div class="col-xs-12 text-center">
                <h2>What am i good at<span class="colorPoint">.</span></h2>
                <p class="subTitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 aboutBlock">
                <div class="aboutContent text-center">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    <h2>UX Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet ea ipsum odio placeat quas
                        saepe voluptatem? Cumque debitis laudantium, molestiae mollitia nihil obcaecati odio omnis
                        placeat porro tempora temporibus?
                    </p>
                </div>
            </div>
            <div class="col-md-4 aboutBlock">
                <div class="aboutContent text-center">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    <h2>Webdevelopment</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet ea ipsum odio placeat quas
                        saepe voluptatem? Cumque debitis laudantium, molestiae mollitia nihil obcaecati odio omnis
                        placeat porro tempora temporibus?
                    </p>
                </div>
            </div>
            <div class="col-md-4 aboutBlock">
                <div class="aboutContent text-center">
                    <i class="fa fa-rocket" aria-hidden="true"></i>
                    <h2>Online Strategy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab amet ea ipsum odio placeat quas
                        saepe voluptatem? Cumque debitis laudantium, molestiae mollitia nihil obcaecati odio omnis
                        placeat porro tempora temporibus?
                    </p>
                </div>
            </div>
        </div>
        <div class="row buttonRow">
            <div class="col-xs-12 text-center">
                <a href="#emailInputField" class="ctaButton collapsed" data-toggle="collapse" aria-expanded="false">Let's get started!</a>
            </div>
        </div>

        <div class="row emailRow">
            <div class="col-xs-12 text-center">
                <div id="emailInputField" class="row emailInput collapse" aria-expanded="false">
                    <form id="productMailForm" class="col-xs-12" name="infoMailForm" action="" method="post" data-toggle="validator" role="form" novalidate="true">

                        <div class="alert hide"></div>
                        <div class="form-group">
                            <input id="infoMailForm-email" class="textField" name="email" type="email" value="" placeholder="E-mailadres" required="">
                            <button type="submit" class="sendBtn form-submit" style="pointer-events: all; cursor: pointer;">Verstuur</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="work" class="container-fluid workContent">
        <div class="row">
            <div class="col-xs-12 text-center titleRow">
                <h2>Projects I've done<span class="colorPoint">.</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <div class="container">
        Content
    </div>

    <div id="contact" class="container-fluid contactContent">
        <div class="row">
            <div class="col-xs-12 text-center titleRow">
                <h2>More about me<span class="colorPoint">.</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <img src="images/foto.png" alt="Casper Streefkerk">
            </div>
        </div>
        <div class="container moreAboutContent">
            <div class="col-xs-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium animi asperiores aspernatur
                    aut doloribus esse est excepturi explicabo fuga harum ipsa iure iusto minus, mollitia neque,
                    obcaecati recusandae repudiandae, unde. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Animi consequuntur distinctio dolor eligendi eveniet expedita harum inventore ipsa labore
                    necessitatibus neque porro, praesentium rerum sunt suscipit tenetur unde voluptatum? Illo.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet commodi consectetur
                    consequuntur cum debitis, dolore facilis fugit hic, magnam molestiae nam obcaecati omnis, porro
                    quia quod rem vel voluptatibus?
                </p>
            </div>
        </div>
    </div>

    <div class="container contactFormContent">
        <div class="col-xs-12 text-center">
            <h2>Say hello<span class="colorPoint">.</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <form class="contactForm">
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Naam">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Bedrijfsnaam">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="E-mailadres">
                </div>
                <textarea class="form-control" rows="6" placeholder="Boodschap"></textarea>
                <button type="submit" class="btn btn-default">Verstuur! <i class="fa fa-paper-plane"></i> </button>
            </form>
        </div>
    </div>

</div>

<div class="push"></div>

<footer class="footer">
    <div class="container text-center">
        <p>Copyright &copy; 2017 | Casper Streefkerk</p>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></body>
</html>