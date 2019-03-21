<!DOCTYPE html>
<html>

<head>
    <title>Mohamed eldeeb</title>

    <meta charset="utf-8">
    <meta name="description" content="mohamed eldeeb portofolio">
    <meta name="author" content="mohamed eldeeb">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">



    <!-- Bootstrap & jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- javascript -->
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/barfunction.js"></script>
    <!-- style sheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body id="top-page" data-spy="scroll" data-target=".navbar-fixed-top">
<style>
    .loader {
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite; /* Safari */
        animation: spin 2s linear infinite;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    /* Safari */
    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div id="over" style="width: 100%; position: fixed;height: 100%;top: 0px;left: 0px;opacity: .5;background-color:#EFEFEF;visibility: hidden;filter: alpha(opacity=50); z-index: 1001;text-align:center;color: #cc3333;font-size: 80px">
    <div class="loader"></div>
</div>
<div class="container-fluid cf">
    <nav id="nav1" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll navbar-left deepo" href="#header">Mohamed eldeeb</a>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right" id="ul1">
                    <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
                    <li><a href="#about" class="page-scroll">About</a></li>
                    <li><a href="#contact" class="page-scroll">Contact</a></li>
                </ul>

            </div>
        </div>

    </nav>

    <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mypic col-md-4 col-md-offset-4 col-xs-12">
                        <img src="img/1.jpg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="myjob">
                        <h3>Mohamed eldeeb</h3>
                        <h5>Front-end developer</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="port">
                        <h2>PORTFOLIO</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12"data-toggle="modal" data-target="#myModal" >
                    <div class="projects">
                        <div class="overlay"></div>
                        <img src="img/portfolio/1.png">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="projects">
                        <img src="img/portfolio/1.png">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="projects">
                        <img src="img/portfolio/1.png">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="projects">
                        <img src="img/portfolio/1.png">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="projects">
                        <img src="img/portfolio/1.png">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="projects">
                        <img src="img/portfolio/1.png">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 abt">
                    <h2>ABOUT</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-2 col-xs-12 me">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
                <div class="col-md-4 col-xs-12 me">
                    <p>Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12 con">
                    <h1>CONTACT ME</h1>
                    <hr>
                </div>
            </div>
            <div class="row cf">
                <div class="col-md-6 col-md-offset-3 col-xs-12 message">
                    <form>
                        <input type="text" placeholder="Name" class="form-control" id="name"></br >
                        <input type="text" placeholder="Email Address" class="form-control" id="email"></br >
                        <textarea placeholder="Message" rows="4" class="form-control" id="subject"></textarea></br >
                        <input type="submit" value="SEND" class="btn btn-primary btn-xl btn1" id="submit">
                        <label id="suc" style="visibility: hidden ; left: -999999px;opacity: 0.0;display: none;">Done</label>
                        <label id="fal" style="visibility: hidden ; left: -999999px;opacity: 0.0;display: none;">plz again</label>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <footer class="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <p>Copyright © Deepo 2019</p>
                </div>

                <div class="col-md-3 col-md-offset-3 col-xs-12 ft1">
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square "></i></a>
                    <a href="#"><i class="fa fa-google-plus-square "></i></a>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Rosto</h4>

            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="col-12">
                    <div class="propic1">
                        <img src="img/1.jpg">
                    </div>
                </div>
                <div class="col-12">
                    <div class="txt1">
                        <p>adsfsf fverwsf svge wew fewf ewf ewf </p>
                    </div>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" >Download</button>
                <button type="button" class="btn btn-success" >Live preview</button>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#submit').on('click', function (e) {
            e.preventDefault();
            myFunction();
        });
    });
    function myFunction(){
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $("#subject").val();
        $('#over').css('visibility','visible');
        $.ajax({
            method: 'post',
            url: '{{route('submit',["0"])}}',
            data:{
                name: name,
                email: email,
                subject: subject
            },
            datatype: 'jason',
            headers: {
                'X-CSRF-TOKEN': "{{@csrf_token()}}"
            },
            success: function(response){
                $('#over').css('visibility','hidden');
                if(response.success){
                    $('#suc').css('visibility','visible');
                    $('#suc').css('opacity', 1.0);
                    $('#suc').css('display', 'block');
                    $('#suc').css('left', 0);
                    $('#fal').css('visibility','hidden');
                }
                else{
                    $('#fal').css('visibility','visible');
                    $('#fal').css('opacity', 1.0);
                    $('#fal').css('display', 'block');
                    $('#fal').css('left', 0);
                    $('#suc').css('visibility','hidden');
                }
            },
            error: function(response,status){
                $('#over').css('visibility','hidden');
                console.log(response);
                console.log(status);
                $('#fal').css('visibility','visible');
                $('#fal').css('opacity', 1.0);
                $('#fal').css('display', 'bolck');
                $('#fal').css('left', 0);
                $('#suc').css('visibility','hidden');
            }
        })

    }
</script>
</body>

</html>