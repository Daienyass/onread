<!DOCTYPE html>
<html>
    <head>
        <title>Online Promissory Note for Re-admission/Conditional Enrollment</title>
        <link rel="icon" type="image/png" href="University_of_the_Cordilleras_crest.png">
        <link rel="stylesheet" href="header.css">
        <style>
            * {
                box-sizing: border-box;
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
            
            table {
                width:50%;
            }

            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            th, td {
                padding: 15px;
                text-align: center;
                /*background-color:#ddd;*/
            }

            table#t01 th {
                background-color: #2e7c2a;
                color: white;
            }
            table#t01 td {
                background-color: white;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="login_process.php">
            <ul>
              <li style="float:right"><a href="login.php">Log out</a></li>
              <li style="float:right"><a href="about.php">About</a></li>
            </ul>
            <logo><img src="UC_Official_Logo.png" style="width=250px; height: 120px;"></logo>
            <br><br><br>
            <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WELCOME</h2>
            <center>
                <table id="t01">
                    <tr>
                        <th> Online Promissory Note for Re-admission/Conditional Form </th>
                    </tr>
                    <tr>
                        <td><a href = "files/OnlineRe-admission.docx">Click here to download the docx file for the Promissory Note</a></td>
                    </tr>
                    <tr>
                        <td><a href = "form.php"><b>OR</b> click here to fill up the form for the Online Promisorry note</a></td>
                    </tr>
                </table>
            </center>    
            <div class="img">
                <img src="University_of_the_Cordilleras_crest.png" width="370px" height="460px">
            </div>
        </form>
    </body>
</html>