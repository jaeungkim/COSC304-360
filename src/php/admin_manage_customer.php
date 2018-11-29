<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

  </head>
  <body>

    <form action="searchcustomer.php" method="get" id="searchForm">
      <input type = "text" name ="searchcustomer">
      <input type = "submit" value = "Submit">
    </form>


    <?php
    //list all customers
    include 'db_credential.php';
    $conn = mysqli_connect($host, $user, $password, $database);
    $error = mysqli_connect_error();
    $flag = false;

    if($error != null)
    {
      $output = "<p>Unable to connect to database!</p>";
      exit($output);
    }
    else {
      $sql = "SELECT * FROM customer";
      $results = mysqli_query($conn, $sql);

      //echo cid email fName lName address cPassword phoneNum isAdmin
      echo '<div class = "">
            <table id = "">
              <tbody>
                  <tr>
                    <th class = "tableHead">CUSTOMER ID</th>
                    <th class = "tableHead">EMIAL</th>
                    <th class = "tableHead">FIRST NAME</th>
                    <th class = "tableHead">LAST NAME</th>
                    <th class = "tableHead">ADDRESS</th>
                    <th class = "tableHead">PHONE NUMBER</th>
                    <th class = "tableHead">ANDMIN</th>
                  </tr>';
      while ($row = mysqli_fetch_assoc($results)) {
        //get all value
        $cid = $row['cid'];
        $email = $row['email'];
        $fName = $row['fName'];
        $lName = $row['lName'];
        $address = $row['address'];
        $phoneNum = $row['phoneNum'];
        if ($row['isAdmin']==0) {//remind kenney isset session tmr
          $isAdmin = 'NO';
        }
        else {
          $isAdmin = 'YES';
        }
        echo
        '<tr class = "">
          <td> '.$cid.' </td>
          <td> '.$fName.' </td>
          <td> '.$lName.' </td>
          <td> '.$email.' </td>
          <td> '.$address. '</td>
          <td> '.$phoneNum.' </td>
          <td> '.$isAdmin.' </td>
         </tr>';
      }

      echo     '</tbody>
              </table>
            </div>';
      mysqli_close($conn);
    }



    ?>

  </body>
</html>
