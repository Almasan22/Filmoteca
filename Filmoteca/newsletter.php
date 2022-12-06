        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => newsletter
        $conn = mysqli_connect("localhost", "root", "", "newsletter");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 2 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO news VALUES ('$name','$email')";
         
        if(mysqli_query($conn, $sql)){
          echo '<script type="text/javascript">';
          echo 'alert("Thank you! You signed up to our newsletter.");';
          echo '</script>';

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>