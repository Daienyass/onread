<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Online Promissory Note for Re-admission/Conditional Enrollment</title>
        <link rel="icon" type="image/png" href="University_of_the_Cordilleras_crest.png">
        <link rel="stylesheet" href="header.css">
        
        
        <style>
            * {
                box-sizing: border-box;
            }

            h1{
                color: #246026;
            }

            .effect8{
                background-color: aliceblue;
                max-width: 300px;
                padding: 16px;
                position:relative;
                -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
                box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            }

            .effect8:before, .effect8:after{
                content:"";
                position:absolute;
                z-index:-1;
                -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
                -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
                box-shadow:0 0 20px rgba(0,0,0,0.8);
                top:10px;
                bottom:10px;
                left:0;
                right:0;
                -moz-border-radius:100px / 10px;
                border-radius:100px / 10px;
            }

            .effect8:after{
                right:10px;
                left:auto;
                -webkit-transform:skew(8deg) rotate(3deg);
                -moz-transform:skew(8deg) rotate(3deg);
                -ms-transform:skew(8deg) rotate(3deg);
                -o-transform:skew(8deg) rotate(3deg);
                transform:skew(8deg) rotate(3deg);
            }    
                
            input[type=text], input[type=password] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                border: none;
                background: #f1f1f1;
                text-align: center;
            }
            
            input[type=text]:focus, input[type=password]:focus {
                background-color: #ddd;
                outline: none;
            }
                
            .btn {
                background-color: #4CAF50;
                color: white;
                padding: 20px 20px;
                border: none;
                cursor: pointer;
                width: 100%;
                opacity: 0.9;
            }   
            
            .btn:hover {
                opacity: 1;
            }
            
            .login-form .btn {        
                font-size: 16px;
                font-weight: bold;
                background: #70c5c0;
                border: none;
                margin-bottom: 20px;
            }
            
            .login-form .btn:hover, .login-form .btn:focus {
                background: #50b8b3;
                outline: none !important;
            }
        </style>
    </head>
    
    
    <body>
        <form method="posT" action="login_process.php" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
            <ul>
              <li><a href=""></a></li>
            </ul>
            <logo>
                <img src="UC_Official_Logo.png" style="width=250px; height: 120px;">
            </logo>
            <div class="img">
                <img src="University_of_the_Cordilleras_crest.png" width="370px" height="460px">
            </div><br><br><br>
            <center>
                <div class="box effect8">
                    <h1>Student Login</h1>
                    
                    <label><b>ID No.</b></label>
                    <input type="text" name="txtidNo" placeholder="Enter your ID Number" required/>
                    
                    <label><b>Password</b></label>
                    <input type="password" name="txtpassword" placeholder="Enter Password" required/>
                    
                    <input type="checkbox" name="checkbox" value="check" id="agree" /><b> I have read and agree to the <a style="color: #246026;" onclick="myFunction()"><u>Terms and Conditions</u></b></a>
                    <br><br>

                    <input type="submit" name="btn" value="Login" class="btn btn-primary btn-lg btn-block"><br><br>
                    <input type="reset" value="clear" class="btn btn-primary btn-lg btn-block"/>
                </div>
            </center>
        </form>
    </body>
    <script>
        function myFunction() {
          alert("Online Re-admission Terms and Conditions \r\n \r\n Each time you visit, you are agreeing to be bound by these terms and conditions and all applicable laws and regulations. \r\n \r\n 1. The following information that is needed to be fill out on University of the Cordilleras website may not be reproduced or republished, either online or offline, without the School’s express permission. \r\n 2. We may make changes on the website at any time and without notice(this is to improve the website). \r\n 3. We shall not be liable or responsible for any kind of loss or damage that may result to you or a third party as a result of your or their use the website. \r\n \r\n We reserve the right to restrict access to the students of University of the Cordilleras only.");
        }
    </script>
</html>