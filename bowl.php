<?php
if (!empty($_GET['bh'])) {
	$number = $_GET['bh'];
}else{
	echo "none";
}
include 'dbh.inc.php';
?>


<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
	<title></title>
</head>
<body >
	<a href="index.php">back</a>

<h2>Bordered Table</h2>
<table style="width: 100%">

<?php
    switch ($number) {
    case 1:
        $sql = "select * from table2 where team1 = 'Rising Pune Supergiant'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['team1']."</td>
                <td>".$row['team2']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 2:
        $sql = "select * from table2 where city = 'Hyderabad'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 3:
        $sql = "select * from table2 where team1 = 'Kolkata Knight Riders'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 4:
        $sql = "select * from table2 where team1 = 'Rising Pune Supergiant'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
    
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 5:
        $sql = "select * from table2 where team1 = 'Royal Challengers Bangalore'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 6:
        $sql = "select * from table2 where team1 = 'Kolkata Knight Riders'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 7:
        $sql = "select * from table2 where team1 = 'Rising Pune Supergiant'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 8:
        $sql = "select * from table2 where team1 = 'Royal Challengers Bangalore'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 9:
        $sql = "select * from table2 where team1 = 'Kolkata Knight Riders'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 10:
        $sql = "select * from table2 where team1 = 'Rising Pune Supergiant'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;
        
    case 11:
        $sql = "select * from table2 where team1 = 'Royal Challengers Bangalore'";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['city']."</td>
                <td>".$row['team1']."</td>
                </tr>";
            }
        echo "</table>";    
        break;    
}
    
?>
</table>
</body>
</html> 