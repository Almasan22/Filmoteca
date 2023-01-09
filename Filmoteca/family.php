<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Family Movies</title>
  <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:  #d8cfc4;">
  <div class="container">
    <nav>
      <div class="logo">
        <a href="index.html">Film<span>oteca</span></a>
      </div>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li class="dropdown">
          <button class="dropbtn">Filmoteca</button>
            <div class="dropdown-content">
              <a href="search.html">Search movies</a>
              <a href="ideas.html">Browse movies by genre</a>
              <a href="ideasyears.html">Browse movies by years</a>
            </div>
        </li>
        <li><a href="statistics.html">Statistics</a></li>
      </ul>
      <div class="buttons">
        <a href="newsletter.html" class="btn">Sign up to our newsletter</a>
      </div> 
    </nav> 
  
    <br>
    <br>
    <br>

    <table class="table">
    <thead>
      <tr>
        <th style="text-align:left"> <h3> Title </h3> </th>
        <th style="text-align:left"> <h3> Year </h3></th>
        <th style="text-align:left"> <h3> Director </h3></th>
        <th style="text-align:left"> <h3> Rating </h3></th>
      </tr>
    </thead>

    <tbody>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "proiect individual";

      // Create connection
      $connection = new mysqli($servername, $username, $password, $database);

            // Check connection
      if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
      }

            // read all row from database table
      $sql = "SELECT name, year, director,score FROM mytable WHERE genre = 'family' ORDER BY name ";
      $result = $connection->query($sql);

      if (!$result) {
        die("Invalid query: " . $connection->error);
      }

      // read data of each row
      while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["year"] . "</td>
                    <td>" . $row["director"] . "</td>
                    <td>" . $row["score"] . "</td>
                </tr>";
            }

            $connection->close();
            ?>
    </tbody>
  </table> 

</body>
</html>