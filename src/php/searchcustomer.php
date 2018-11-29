<?php
if ($_SERVER['REQUEST_METHOD']=="GET") {
  $searchcustomer = $_GET['searchcustomer'];
  include 'db_credential.php';
  $conn = mysqli_connect($host, $user, $password, $database);
  $error = mysqli_connect_error();

  // try catch for connection
  if($error != null){
    $output = "Unable to connect to database!";
    exit($output);
  }
  else {
    //DO NOTHING IF NOTHING IS ENTERED
    if($searchcustomer == ""){
      header('Location: admin_manage_customer.php');
     }
    else{
      //SEARCHING WITH KEYWORDS
      $sql = "SELECT * FROM customer WHERE fName LIKE '%".$searchcustomer."%' OR lName Like '%".$searchcustomer."%'";
      $results = mysqli_query($conn, $sql);
        //echo cid email fName lName address cPassword phoneNum isAdmin
        if (mysqli_num_rows($results) > 0) {
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
          while($row = mysqli_fetch_assoc($results)){
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
        else {
          echo "this customer doesn't exist";
        }

      }


}
}
?>
