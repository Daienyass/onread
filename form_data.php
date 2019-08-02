<?php
    require_once('mysqli_connection.php');
?>

<html>
    <head>
        <title>RECORDS</title>
        <link rel="icon" type="image/png" href="University_of_the_Cordilleras_crest.png">
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="stylesheet" href="form_data.css">
        <link rel="stylesheet" href="header.css">
        <link rel='stylesheet' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
    </head>
    <body> 
        <ul>
            <li style="float:right"><a href="login.php">Log out</a></li>
            <li style="float:right"><a href="about.php">About</a></li>
        </ul>
        <logo><img src="UC_Official_Logo.png" style="width=250px; height: 120px;"></logo>
        <div class="img">
            <img src="University_of_the_Cordilleras_crest.png" width="370px" height="460px">
        </div><br><br><br>
        <h2><center>Online Promissory Note for Re-admission/Conditional Form</center></h2> 
        <div id="table" class="table-editable">
            <table id="form_data" style="width:95%">
                <thead>
                    <tr>
                        <th style="width:10%">FIRST NAME</th>
                        <th style="width:10%">LAST NAME</th>
                        <th style="width:8%">ID #</th>
                        <th style="width:3%">TERM</th>
                        <th style="width:3%">SCHOOL YEAR</th>
                        <th style="width:5%">GRADES</th>
                        <th style="width:4%">YES</th>
                        <th style="width:4%">NO</th>
                        <th style="width:8%">COURSE</th>
                        <th style="width:3%">UNITS</th>
                        <th style="width:17%">REASON</th>
                        <th style="width:17%">PROMISE</th>
                        <th style="width:8%">ACTION</th>
                    </tr>    
                </thead>
                <?php
                    $qry = "SELECT * FROM tbl_form;";
                    $result = mysqli_query($conn, $qry);
                    
                    if($result) {
                        while($row = mysqli_fetch_array($result)){
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['IDno'].'</td>';
                            echo '<td>'.$row['term'].'</td>';
                            echo '<td>'.$row['schoolyear'].'</td>';
                            echo '<td>'.$row['grades'].'</td>';
                            echo '<td>'.$row['yes'].'</td>';
                            echo '<td>'.$row['no'].'</td>';
                            echo '<td>'.$row['one'].'</td>';
                            echo '<td>'.$row['two'].'</td>';
                            echo '<td>'.$row['reason'].'</td>';
                            echo '<td>'.$row['promise'].'</td>';
                            echo '<td></td>';
                            echo '</tr>';
                        }
                    }else{
                        die(mysqli_error($conn));
                    }
                ?>
            </table>
        </div>
    </body>
</html>