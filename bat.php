<?php
if (!empty($_GET['bh'])) {
	$team = $_GET['bh'];
}else{
	echo "none";
}
include 'dbh.inc.php';
?>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
table{
	width: 50%;
	text-align: center;
}
</style>
	<title></title>
</head>
<body >
	<a href="index.php" style="float: right;"><--back</a>

<table align="right";style="width: 100%;position:absolute;top:50%;left:50%;">

<?php
    switch ($team) {
    case 1:
        $sql = "Select * from batsmen;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<center><h1>Monthly savings</h1></center>";
			  echo"<tr>
			    <th>Batsman</th>
			    <th>Innings</th> 
			    <th>Runs</th>
			    <th>BF</th>
			    <th>Highest_Score</th> 
			    <th>Not_outs</th>
			    <th>Fifties</th>
			    <th>Hundreds</th> 
			    <th>Sixes</th>
			    <th>Fours</th>
			    <th>S/R</th> 
			  </tr>";

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['innings']."</td>
                <td>".$row['runs']."</td>
                <td>".$row['bf']."</td>
                <td>".$row['highest_score']."</td>
                <td>".$row['not_outs']."</td>
                <td>".$row['fifties']."</td>
                <td>".$row['hundreds']."</td>
                <td>".$row['sixes']."</td>
                <td>".$row['fours']."</td>
                <td>".$row['sr']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 2:
        $sql = "select batsmen,sixes from batsmen order by sixes desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Total_Sixes</th>  
			  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['sixes']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 3:
        $sql = "select batsman,batting_team as team,bowling_team as against,season,count(*) as sixes from deliveries,matches where batsman_runs=6 and  matches.id=deliveries.match_id group by batsman,match_id,batting_team,bowling_team,season order by sixes desc limit 200;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Team</th>  
			    <th>Team_Against</th>
			    <th>Season</th>
			    <th>No_of_Sixes</th>
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsman']."</td>
                <td>".$row['team']."</td>
                <td>".$row['against']."</td>
                <td>".$row['season']."</td>
                <td>".$row['sixes']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 4:
        $sql = "select batsman,batting_team as team,bowling_team as against,season,sum(batsman_runs) as individual_score from deliveries,matches where matches.id=deliveries.match_id group by batsman,match_id,batting_team,bowling_team,season order by individual_score desc limit 200;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
    
        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Team</th>  
			    <th>Team_Against</th>
			    <th>Season</th>
			    <th>Individual_Score</th>
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsman']."</td>
                <td>".$row['team']."</td>
                <td>".$row['against']."</td>
                <td>".$row['season']."</td>
                <td>".$row['individual_score']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 5:
        $sql = "select batsmen,sr as strike_rate from batsmen where bf>100 order by strike_rate desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Strike_Rate</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['strike_rate']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 6:
        $sql = "select batsmen,average from batsmen where bf>100 order by average desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Average</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['average']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 7:
        $sql = "select batsmen, fifties from batsmen order by fifties desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Fifties</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['fifties']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 8:
        $sql = "select batsmen, hundreds from batsmen order by hundreds desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Centuries</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['hundreds']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 9:
        $sql = "select batsmen,fours from batsmen order by fours desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Monthly savings</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Total_Fours</th>  
			  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsmen']."</td>
                <td>".$row['fours']."</td>
                </tr>";
            }
        echo "</table>";    
        break;
        
    case 10:
        $sql = "select batsmen,sixes from batsmen order by fours desc;";
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