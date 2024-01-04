<html>
    <head>
        <title>sign in or sign up</title>
        <link rel="stylesheet" href="css\newlogin1.css" type="text/css">
        <script>
            function checkPassword()
                {
                    let pw = document.getElementById("txtPassword").value;
                    let cpw = document.getElementById("txtConfimPassword").value;
                    if(pw != cpw)
                        {
                            alert("Password and confrim password should be the same");
                            event.preventDefault();
                        }
                }
            </script>
    </head>
    <body>
        <div class="loogimg"><img src="logo2.jpg" class="looimg"><h2 class="name"><span class="sp1">iCa</span>re</h2></div>
        
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="reg.php" method="post">
                    <h1>Create Account</h1>
                            
                    <input type="text" placeholder="Name" name="name" id = "txtName" required/>
                    <input type="email" placeholder="Email" required name="email" id="txtEmail"/>
                    <input type="password" placeholder="Password" id="txtPassword" name="password" required/>
                        <input type="password" placeholder="Confirm Password" id="cpassword" name="txtConfimPassword"/>
                    <input type="text" placeholder="Contact Number" name="contactno" id="txtContactNo" pattern="[0-9]{10}" required />        
                    
                    <input type="submit" value="Sign Up" onClick="checkPassword()" name="btnSubmit">
                    <a href="adminlog.html">Admin</a>
                </form>
                
            </div>
            <div class="form-container sign-in-container">
                <form action="log.php" method="post">
                    <h1>Sign in</h1>
                 
                    <input type="email" name="email" placeholder="Email" />
                    <input type="password" name="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <input type="submit" value="Sign In" name="btnSubmit">
                    <br>
                    <a href="icare.html">Back to icare</a>
                </form>
                 
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        
                        <input type="submit" class="ghost" id="signIn" value="Sign In">
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Guys!</h1>
                        <p>Enter your personal details and register with us</p>
                         
                        <input type="submit" class="ghost" id="signUp" value="Sign Up"> 
                    </div>
                </div>
            </div>
        </div>
        <script>
    
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');
        
        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });
        
        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
            </script>
    </body>
</html>