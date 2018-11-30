

     <script>
     function changecondition() {
         var checkbox = document.getElementByClass("checkbox");
         for (var i = 0; i < checkbox.length; i++) {
           <?php $cid ?>= checkbox[i].id;
           //get id of each box
           if (checkbox.checked == true){
               //disable this user
               <?php
               include "db_credential.php";
               $conn = mysqli_connect($host, $user, $password, $database);
               $error = mysqli_connect_error();

               if($error != null)
               {
                 $output = "<p>Unable to connect to database!</p>";
                 exit($output);
               }
               else {
                 $sql = "UPDATE customer SET disabled = 1 WHERE cid = $cid  ";
                 $results = mysqli_query($conn, $sql);
               }
               ?>
             }

            else {
              //enable this user
              <?php
              include "db_credential.php";
              $conn = mysqli_connect($host, $user, $password, $database);
              $error = mysqli_connect_error();

              if($error != null)
              {
                $output = "<p>Unable to connect to database!</p>";
                exit($output);
              }
              else {
                $sql = "UPDATE customer SET disabled = 0 WHERE cid = $cid  ";
                $results = mysqli_query($conn, $sql);
              }
              ?>
           }
         }

       }
     </script>
