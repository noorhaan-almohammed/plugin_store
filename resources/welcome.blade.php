<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/nav.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <title>plugin store</title>
</head>

<body style="background: #e9fafd;">
    <div class="header">
        <div class="logo">
            <img class="logo_img" src="img/DA_colors-removebg-preview.png" alt="" srcset="">
        </div>
        <nav id="myDIV">
            <ul class="nav">
                <li class="">
                    <lord-icon class="lord-icon" src="https://cdn.lordicon.com/qeltvbrs.json" trigger="hover"
                        colors="primary:#4be1ec,secondary:#16a9c7">
                    </lord-icon>
                    <a class="btn not_serv animat_focus home" href="./pages/home.php">
                        Home</a>
                </li>
                <li class="li_btn">
                    <lord-icon class="lord-icon" src="https://cdn.lordicon.com/tltikfri.json" trigger="hover"
                        colors="primary:#4be1ec,secondary:#16a9c7">
                    </lord-icon>

                    <a class="btn serv" href="#">Categouries</a>
                    <ul class="drop-menu">
                        <li class="ch1 li_hide">
                            <div class="m2">
                                <div class="m">
                                    <a class="t" href="#">Type 1 </a>
                                </div>
                            </div>
                            <div class="m2">
                                <div class="m">
                                    <a class="t" href="#">Type 2</a>
                                </div>
                            </div>
                        </li>
                        <li class="ch2 li_hide">
                            <div class="m2">
                                <div class="m">
                                    <a class="t" href="#">Type 3</a>
                                </div>
                            </div>
                            <div class="m2">
                                <div class="m">
                                    <a class="t" href="#">Type 4</a>
                                </div>
                            </div>
                        </li>
                        <li class="ch3 li_hide">
                            <div class="m2">
                                <div class="m">
                                    <a class="t" href="#">Type 5</a>
                                </div>
                            </div>
                            <div class="m2">
                                <div class="m">
                                    <a class="t" href="#">Type 6</a>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="ch4 li_hide">
                        <div class="m2">
                        <div class="m">
                            <a class="t" href="#">first services</a>
                        </div>
                        </div>
                        <div class="m2">
                        <div class="m">
                            <a class="t" href="#">first posation services</a>
                        </div>
                        </div>
                    </li> -->

                    </ul>
                </li>

                <li class="">
                    <lord-icon class="lord-icon" src="https://cdn.lordicon.com/hursldrn.json" trigger="morph"
                        colors="primary:#4be1ec,secondary:#16a9c7">
                    </lord-icon>

                    <a class="btn not_serv my_plugin" href="./pages/my_plugin.php">My Plugin</a>
                </li>
                <li class="">

                    <lord-icon class="lord-icon" src="https://cdn.lordicon.com/etgnxeer.json"
                        colors="primary:#4be1ec,secondary:#16a9c7" trigger="hover">
                    </lord-icon>
                    <a class="btn not_serv most_popular" href="./pages/most_popular.php">Most Popular</a>
                </li>
            </ul>
        </nav>

        <div class="login">
            <button class="login_btn" onclick="document.getElementById('id01').style.display='block'">
                <!-- <lord-icon src="https://cdn.lordicon.com/lhwyshcs.json" trigger="hover" stroke="bold"
                    colors="primary:#848484,secondary:#16a9c7" style="width:30px;height:40px;margin-right: 10px;">
                </lord-icon> -->
                <span>log in</span>
            </button>

            <button class="signup_btn" onclick="document.getElementById('id02').style.display='block'" >Sign Up</button>
        </div>

        <div id="id01" class="modal">

            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                        title="Close Modal">&times;</span>
                    <!-- <img src="../img/DA" alt="Avatar" class="avatar"> -->
                    <lord-icon class="avatar" src="https://cdn.lordicon.com/lhwyshcs.json" trigger="hover" stroke="bold"
                        colors="primary:#848484,secondary:#16a9c7">
                    </lord-icon>
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button class="login-submit" type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'"
                        class="cancelbtn">Cancel</button> -->
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
        <div id="id02" class="modal2">
            <span onclick="document.getElementById('id02').style.display='none'" class="close"
                title="Close Modal2">&times;</span>
            <form class="modal2-content" action="./sql/signup.php">
                <div class="container">
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account.</p>
                    <hr>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                    </p>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'"
                            class="cancelbtn2">Cancel</button>
                        <button type="submit" class="signupbtn">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="page">

    </div>
    <!-- end of page -->
    <div class="footer">
        <div class="contacts"></div>
        <div class="links"></div>
        <div class="copyright"></div>
    </div>

    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="./js/nav.js"></script>


</body>
<script>
$(".page").load("./pages/home.php");

$(document).ready(function() {
    $('.home').click(function(e) {
        e.preventDefault();
        $('.page').load($(this).attr('href'));
    });
});
$(document).ready(function() {
    $('.my_plugin').click(function(e) {
        e.preventDefault();
        $('.page').load($(this).attr('href'));
    });
});
$(document).ready(function() {
    $('.most_popular').click(function(e) {
        e.preventDefault();
        $('.page').load($(this).attr('href'));
    });
});
</script>

</html>
