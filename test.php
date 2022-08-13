<?php
        $db_name = "sqllinkway";
        $servername = "maraandrew045855.netfirmsmysql.com";
        $username = "andrewmarasi";
        $password = "Secret@12345";

        $conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql='INSERT INTO Faces (FaceImageLocation,LeftEye,RightEye,EyesDistance,EarLeft,EarRight,EyersDstance,JawSize,TimeDatescanned,UserIP,FaceFirstName,FaceLastName,FaceStreetNumber,FaceStreetName,FaceCity,IpCountry,IpCityName,IpStreetNumber,IpStreetName,IpPostalCode,UserDataConfirm)VALUES ("00000066-sdf-sdf.jpg","567","676","109","393","813","420","420","2022/08/13 10:13:03am","112.134.193.119","sdf","sdf","sd","sdf","sdf","Sri Lanka","Wattala","Not Found","Thelangapatha Road","11300","No")';
// $sql='INSERT INTO Faces (FaceImageLocation,LeftEye,RightEye,EyesDistance,EarLeft,EarRight,EyersDstance,JawSize,TimeDatescanned,UserIP,FaceFirstName,FaceLastName,FaceStreetNumber,FaceStreetName,FaceCity,IpCountry,IpCityName,IpStreetNumber,IpStreetName,IpPostalCode,UserDataConfirm)VALUES ("00000066-sdf-sdf.jpg","567","676","109","393","813","420","420","2022/08/13 10:13:03am","112.134.193.119","sdf","sdf","sd","sdf","sdf","Sri Lanka","Wattala","Not Found","Thelangapatha Road","11300","No")';
// $sql = "SELECT * FROM Faces ";
 
if ($result = $conn -> query($sql)) {
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<pre>";
      print_r($row);
      echo "</pre>";
    }
  } else {
    echo "0 results";
  }
  // print_r($result->fetch_object());
  // while ($row = $result -> fetch_row()) {
  //   printf ("%s (%s)\n", $row[0], $row[1]);
  // }
  // $result -> free_result();
}

  
  $conn->close();


?>