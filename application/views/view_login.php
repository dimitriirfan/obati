<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap/bootstrap.min.css") ?>"></link>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/login.css")?>">
    <title>Obati | Login</title>
</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 container-image">
                <div class="slogan">
                    <h1>Buy Drugs Instead.</h1>
                </div>
            </div>
            <div class="col-lg-6 container-form">
                <div class="main-nav d-flex justify-content-end align-items-center">
                    <ul>
                        <li><a href="default.asp">About</a></li>
                        <li><a href="news.asp">Articles</a></li>
                        <li><a href="contact.asp">Home</a></li>
                    </ul>
                    <div class="sandwich ml-5">
                        <div class="icon-bar top-bar"></div>
                        <div class="icon-bar middle-bar"></div>
                        <div class="icon-bar bottom-bar"></div>
                    </div>
                </div>
                <div class="main-form">
                    <div class="form-title">
                        <h1 >Login to <span style="color: #FF7243;">Obati</span></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <label id="label_email" for="exampleInputEmail1">Email address</label>

                            <input type="email" id="input_email" aria-describedby="emailHelp"
                                placeholder="please enter your email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                    
                        <div class="form-group">
                            <label id="label_password" for="exampleInputPassword1">Password</label>
                            <input type="password" id="input_password" placeholder="please enter your password">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group form-check ">
                                <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                <label class="form-check-label" for="exampleCheck1">Always remember</label>

                            </div>
                            <a class="link" href="">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-submit">Submit</button>
                        
                    </form>

                    

                </div>
                <div class="bottom-bar">
                    <p style="font-weight: 700;">Dont have an account? <a class="link" href="<?php echo base_url('index.php/Controller_login/toRegister') ?>" >Sign Up</a></p>

                </div>
                


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="<?php echo base_url("./assets/js/jquery.js")?>"></script>
    <script src="<?php echo base_url("./assets/js/bootstrap/bootstrap.min.js")?>"></script>
    <script src="<?php echo base_url("./assets/js/view_login.js") ?>"></script>
    <script>
        
    </script>
    

</body>

</html>