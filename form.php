<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>FILL UP FORM</title>
        <link rel="stylesheet" href="header.css">
        
        
        <link rel="icon" type="image/png" href="University_of_the_Cordilleras_crest.png">
        
        <style>
            input[placeholder], option[value]{
                text-align: center;
            }
            .body{
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
            }

            input[type=text], select, textarea, input[type=number]{
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: vertical;
            }

            input[type=submit] {
              background-color: #4CAF50;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }

            input[type=submit]:hover {
              background-color: #45a049;
            }

            .container {
              border-radius: 5px;
              padding: 20px;
            }

            .effect8{
                background-color: aliceblue;
                max-width: 500px;
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
                width:100%;
            }

           #t01, td{
                border: 2px solid black;
                border-collapse: collapse;
            }

            th, td {
                padding: 15px;
                text-align: center;
            }

            #tdfirst{
                background-color: whitesmoke;
                color: black;
            }
        </style>
    </head>
    
    <body>
        <form method="POST" action="form_process.php">
            <ul>
              <li style="float:right"><a href="login.php">Log out</a></li>
              <li style="float:right"><a href="about.php">About</a></li>
            </ul>
            <logo><img src="UC_Official_Logo.png" style="width=250px; height: 120px;"></logo>
            <br><br><br>
            <h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; WELCOME</h2>
            <div class="img">
                <img src="University_of_the_Cordilleras_crest.png" width="370px" height="460px">
            </div>
            <div class="container">
                <form action="/action_page.php">
                    <center>      
                        <div class="box effect8">
                            <table>
                                <tr>
                                    <th>
                                        <label><b>First Name</b></label>
                                        <input type="text" name="firstname" placeholder="Your name.." style="height:40px; width: 230px; margin-left: -15px;" required /></th>
                                    <th>
                                        <label><b>Last Name</b></label>
                                        <input type="text" name="lastname" placeholder="Your last name.." style="height:40px; width: 230px;" required />
                                    </th>
                                </tr>
                            </table>
                            
                            <label><b>ID #</b></label>
                            <input type="number" name="IDno" placeholder="Your ID Number.." style="height:40px; width: 100%;"required />

                            <table>
                                <tr>
                                    <th>
                                        <label><b>Term</b></label>
                                        <input type="number" name="term" placeholder="Term.." style="height:40px; width: 230px; margin-left: -15px;" required /></th>
                                    <th>
                                        <label><b>School Year</b></label>
                                        <input type="number" name="schoolyear" placeholder="School Year.." style="height:40px; width: 230px;" required />
                                    </th>
                                </tr>
                            </table>
                            
                            <label><b>Failing Grades</b></label>
                            <select id="grades" name="grades" required />
                              <option value="74">74</option>
                              <option value="73">73</option>
                              <option value="72">72</option>
                              <option value="71">71</option>
                              <option value="70">70</option>
                            <select/>
                            
                            <label><b>Unofficially Dropped Subjects</b></label><br>
                            <input type="checkbox" name="yes" value="yes"> yes
                            <input type="checkbox" name="no" value="no"> no<br><br>   
                            
                            <table id="t01">
                                <tr id="tdfirst">
                                    <td>Courses</td>
                                    <td>Unit</td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="one" placeholder="" required /></td>
                                    <td><input type="number" name="two" placeholder="" style="height:33px; width: 190px; margin-top: -20px;" required /></td>
                                </tr>
                            </table>
                            <input type="button" name="btn" onclick="courseunit()" value="Add More">
                            <br><br>
                            
                            <label><b>due to (reason/s)</b></label>
                            <textarea id="reason" name="reason" placeholder="Write the reasons.." style="height:100px" required></textarea>
                            
                            <label><b>I promise</b></label>
                            <textarea id="promise" name="promise" placeholder="I promise.." style="height:100px" required></textarea>
                            <input type="submit" value="Submit" name="btn">
                        
                        </div>
                    </center>
                </form>
            </div>    
        </form>
    </body>
    <script>
        function courseunit() {
          var table = document.getElementById("t01");
          var row = table.insertRow(t01.rows.length - 1);
          var cell1 = row.insertCell(0);
          var cell2 = row.insertCell(1);
          cell1.innerHTML = 
                "<td><input type='text' name='one' placeholder=''></td>";
          cell2.innerHTML = 
                "<td><input type='number' name='two' placeholder='' style='height:33px; width: 190px; margin-top: -20px;' ></td>";
        }
    </script>
</html>