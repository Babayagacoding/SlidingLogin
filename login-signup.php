<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login/Signup</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="../../FontAwesome4/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <section class="Login-sec container">
        <div class="Form-div">
            <div class="login-form active2">
                <h2>Login Form</h2>
                <form action="" method="post" class="Form">
                    <div class="outer-box">
                        <label>Email</label>
                        <input class="Input-box" id="inputbox" name="email" placeholder="Enter Your Email Here" />
                    </div>
                    <div class="outer-box" style="margin-top: 30px">
                        <label>Password</label>
                        <span style="float: right; width: 0;"><i class="fa fa-eye-slash" aria-hidden="true"
                                id="eye"></i></span>
                        <input id="password" name="password" type="Password" class="Input-box hiden"
                            placeholder="Enter Password" />
                    </div>
                    <div class="SubmitDIV">
                        <input class="submit" id="submit" name="submit" type="submit" placeholder="Submit"
                            value="Submit" />
                    </div>
                </form>
            </div>
            <div class="signup-form">
                <h2>Signup Here</h2>
                <form class="signup" id="Signup" action="PHPBack/register.php" method="post">
                    <div class="outer-box2">
                        <label class="label2">Your Name</label>
                        <input type="text" name="username" class="Input-box2" id="inputbox"
                            placeholder="Enter Your Name Here" />
                    </div>
                    <div class="outer-box2" style="margin-top: 10px">
                        <label class="label2">Email</label>
                        <input type="text" class="Input-box2" name="email" placeholder="Enter Email" />
                    </div>
                    <div class="outer-box2" style="margin-top: 10px">
                        <label class="label2">Password</label>
                        <span style="float: right; width: 0;"><i class="fa fa-eye-slash" aria-hidden="true" id="eye"
                                onclick="toggle()"></i></span>
                        <input name="password" type="Password" id="password" class="Input-box2 hiden"
                            placeholder="Enter Password" />
                    </div>
                    <div class="outer-box2" style="margin-top: 10px">
                        <label class="label2">Confirm Password</label>
                        <span style="float: right; width: 0;"><i class="fa fa-eye-slash" aria-hidden="true" id="eye"
                                onclick="toggle()"></i></span>
                        <input name="cpassword" type="Password" id="password" class="Input-box2 hiden"
                            placeholder="Enter Password" />
                    </div>
                    <div class="outer-box2" style="margin-top: 10px">
                        <label class="label2">Sex</label>
                        <select style="width: 205px;" class="Input-box2" name="sex">
                            <option value="Male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="outer-box2" style="margin-top: 10px">
                        <label class="label2">Date of Birth</label>
                        <input style="width: 205px" type="date" class="Input-box2" name="dob"
                            placeholder="Date Of Birth" />
                    </div>
                    <div class="outer-box2 Hide" style="margin-top: 10px">
                        <label class="label2">Current Date & Time</label>
                        <!-- <div class="any" id="Date"></div>s -->
                        <input class="Input-box2" id="Date" name="DateTime" />
                    </div>
                    <div class="SubmitDIV">
                        <input class="submit" id="submit" type="submit" name="submit" placeholder="Submit"
                            value="Submit" />
                    </div>
                </form>
            </div>
        </div>
        <div class="Buttons-div">
            <div class="login-button Hide">
                <button class="login-btn">
                    Login Using Registered Email & Password
                </button>
            </div>
            <div class="signup-button">
                <button class="signup-btn">Signup/Register Yourself</button>
            </div>
        </div>
    </section>

    <script src="Java.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>