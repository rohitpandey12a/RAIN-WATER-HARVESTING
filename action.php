<<?php
	if (($_SERVER["REQUEST_METHOD"] == "POST")) {
		$conn = mysqli_connect("localhost", "root", "", "Rain_Water_Harvesting");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
				$name = $_POST["Name"];
				$email = $_POST["Email"];
				$content = $_POST["Message"];
				$sql="INSERT INTO tblcontact (user_name, user_email,content) VALUES('$name','$email','$content')";
				if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
	}
 ?>
