<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap/bootstrap.min.css") ?>"></link>

    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/register.css")?>">
    <title>Obati | Register</title>
</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 container-image">
                <div class="slogan">
                    <h1>Buy Drugs <br> instead.</h1>
                </div>
            </div>
            <div class="col-lg-6 container-form">
                <div class="main-nav d-flex justify-content-end align-items-center">
                    <ul>
                        <li><a href="default.asp">About</a></li>
                        <li><a href="news.asp">Articles</a></li>
                        <li><a href="contact.asp">About Us</a></li>
                    </ul>
                    <div class="sandwich ml-5">
                        <div class="icon-bar top-bar"></div>
                        <div class="icon-bar middle-bar"></div>
                        <div class="icon-bar bottom-bar"></div>
                    </div>

                </div>
                <div class="main-form">
                    <div class="form-title">
                        <h1>Register to <span style="color: #74BDCB;">Obati</span></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                   
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Please enter your name">
                        </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Please enter your email">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Please enter your address">
                    </div>
                    <div class="form-group">
                        <label for="inputPlaceandBirhdate">Place and Birth date</label>
                        <input type="text" class="form-control" id="inputPlaceandBirhdate" placeholder="Please enter your place and birth date">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Password</label>
                            <input type="password" class="form-control" id="inputName" placeholder="Please enter your password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirm Password</label>
                            <input type="password" class="form-control" id="inputEmail" placeholder="Please re-enter your password">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between agree">
                            <div class="form-group form-check ">
                                <input type="checkbox" class="form-check-input" id="materialUnchecked">
                                <label class="form-check-label" for="exampleCheck1">I agree to the Obati <a href ="" style=" color: #0BA9ED">Terms </a> and <a href ="" style=" color: #0BA9ED"> Privacy policy</a></label>
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-submit">Register</button>
                </form>
                    <p style="font-weight: 700;">Already have an account? <a class="link" href="<?= ('Controller_login') ?>" >login</a></p>

                </div>


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>