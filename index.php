<?php

include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel = "stylesheet" href = "style.css">
	<style type="text/css">
		body{
	--def: #96B7C4; 	
	--inv: darkblue;
	height: 100vh;
	width: 100%;
	/*background-image: url(ipl-2019-wallpaper.jpg);*/
		}
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

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: orange;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.btn {		
	position: relative;	
	padding: 0.2rem 0.2rem;
	font-size:20px;
	color: var(--inv);
	text-decoration: none;
	text-transform: uppercase;
	transition: all 600ms cubic-bezier(0.77, 0, 0.175, 1);	
	cursor: pointer;
	user-select: none;
}

.btn:before, .btn:after {
	content: '';
	position: absolute;	
	transition: inherit;
	z-index: -1;
}

.btn:hover {
	color: var(--def);
	transition-delay: .6s;
}

.btn:hover:before {
	transition-delay: 0s;
}

.btn:hover:after {
	background: var(--inv);
	transition-delay: .4s;
}
.from-left:before, 
.from-left:after {
	top: 0;
	width: 0;
	height: 100%;
}

.from-left:before {
	right: 0;
	border: 1px solid blue;
	border-left: 0;
	border-right: 0;	
}

.from-left:after {
	left: 0;
}

.from-left:hover:before,
.from-left:hover:after {
	width: 100%;
}
</style>
</head>
<body >
	<audio src="IPL_2018_Ringtone_Download.mp3" controls>
		<p>Audio</p>
	</audio>
	<center><h1>Welcome to IPL portal</h1></center>
	<div class="box" style="float: right;">
	<a class="button" href="#popup1" style="color: green; ">Admin Login</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Login Page</h2>
    <form action="checklogin.php" method="POST">
        Enter Username: <br><input type="text" name="username" required="required" /> <br>
        Enter password: <br><input type="password" name="password" required="required" /> <br><br>
        <input type="submit" value="Login"/>
    </form>
		<a class="close" href="#">&times;</a>
	</div>
</div>
   <div style="width: 100%; float:left;">
   	<div style="width: 33%; float: left;">
		<h2>Batting</h2>

	<a class="btn from-left" href='index.php?bh=1' >Most_Runs</a><br>
	<a class="btn from-left" href='index.php?bh=2' >Most_Sixes</a><br>
	<a class="btn from-left" href='index.php?bh=3' >Most_Sixes(Innings)</a><br>
	<a class="btn from-left" href='index.php?bh=4' >Highest_Individual_Score</a><br>
	<a class="btn from-left" href='index.php?bh=5' >Highest_Strike_Rates</a><br>
	<a class="btn from-left" href='index.php?bh=6' >Highest_Averages</a><br>
	<a class="btn from-left" href='index.php?bh=7' >Most_Fifties</a><br>
	<a class="btn from-left" href='index.php?bh=8' >Most_Centuries</a><br>
	<a class="btn from-left" href='index.php?bh=9' >Most_Fours</a><br>
	<a class="btn from-left" href='index.php?bh=10' >Fastest_Fifties(Innings)</a><br>

	<h2>Bowling</h2>

	<a class="btn from-left" href='index.php?bh=11' >Most_Wickets</a><br>
	<a class="btn from-left" href='index.php?bh=12' >Best_Bowling_Figures</a><br>
	<a class="btn from-left" href='index.php?bh=13' >Best_Averages</a><br>
	<a class="btn from-left" href='index.php?bh=14' >Best_Economy_Rates</a><br>
	<a class="btn from-left" href='index.php?bh=15' >Best_Strike_Rates(innings)</a><br>
	<a class="btn from-left" href='index.php?bh=16' >Best_Strike_Rates(tournament)</a><br>
	<a class="btn from-left" href='index.php?bh=17' >Most_Runs_Conceded(innings)</a><br>
	<a class="btn from-left" href='index.php?bh=18' >Most_Hat_tricks</a><br>
	<a class="btn from-left" href='index.php?bh=19' >Most_DotBalls_Bowled(tournament)</a><br>
	<a class="btn from-left" href='index.php?bh=20' >Most_noOf_MaidenOvers</a><br>
	<a class="btn from-left" href='index.php?bh=21' >Most_FourWickets_inInnings(Innings)</a><br>

</table>

</div>
<?php
if (!empty($_GET['bh'])) {
	$team = $_GET['bh'];
	echo '<div style="width: 50%; float: left;">

<table align="right";style="width: 100%;position:absolute;">';
	switch ($team) {
    case 1:
        $sql = "Select * from batsmen;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<center><h1>Most_Runs</h1></center>";
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
        echo "<h1>Most Sixes</h1>";
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
        echo "<h1>Most Sixes (Innings) </h1>";
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
        echo "<h1>Highest Individual Score</h1>";
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
        echo "<h1>Highest Strike Rates</h1>";
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
        echo "<h1>Highest Averages</h1>";
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
        echo "<h1>Most Fifties</h1>";
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
        echo "<h1>Most Centuries</h1>";
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
        echo "<h1>Most Fours</h1>";
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
        $sql = "select * from fastest_fifties;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
	        
        echo "<table>";
        echo "<h1>Fastest Fifties</h1>";
        	echo"<tr>
			    <th>Batsman</th>
			    <th>Balls_faced</th>  
			  </tr>";       
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['batsman']."</td>
                <td>".$row['balls']."</td>
                </tr>";
            }
        echo "</table>";    
        break;  

    // case 11:
    //     $sql = "select * from table2 where team1 = 'Royal Challengers Bangalore'";
    //     $result = mysqli_query($conn,$sql);
    //     mysqli_close($conn);
    //     $resultCheck = mysqli_num_rows($result);
        
    //     echo "<table>";
    //     echo "<h1>Fastest Centuries</h1>";
    //     	echo"<tr>
			 //    <th>Batsman</th>
			 //    <th>Total_Fours</th>  
			 //  </tr>"; 
    //         while($row = mysqli_fetch_assoc($result)){
    //             echo "<tr> 
    //             <td>".$row['city']."</td>
    //             <td>".$row['team1']."</td>
    //             </tr>";
    //         }
    //     echo "</table>";    
    //     break;  

    case 11:
        $sql = "select * from bowlers order by total_wickets desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<center><h1>Most Wickets</h1></center>";
			  echo"<tr>
			    <th>Bowler</th>
			    <th>Innings</th> 
			    <th>total_wickets</th>
			    <th>balls_bowled</th>
			    <th>Runs_Conceded</th> 
			    <th>Economy</th>
			    <th>Strike_Rate</th>
			    <th>Average</th> 
			    <th>Five_wicket_haul</th> 
			  </tr>";

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['innings']."</td>
                <td>".$row['total_wickets']."</td>
                <td>".$row['balls_bowled']."</td>
                <td>".$row['runs_con']."</td>
                <td>".$row['economy']."</td>
                <td>".$row['sr']."</td>
                <td>".$row['avg']."</td>
                <td>".$row['fiv_wicket_haul']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 12:
        $sql = "select * from best_bowling_figures;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<h1>Best Bowling Figures</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Wickets</th> 
			    <th>Runs_Conceeded</th> 
			  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['wickets']."</td>
                <td>".$row['runs_conceeded']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 13:
        $sql = "select bowler,avg from bowlers where balls_bowled>200 order by avg asc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);

        echo "<table>";
        echo "<h1>Best Averages</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Average</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['avg']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 14:
        $sql = "select bowler,economy from bowlers where balls_bowled>200 order by economy asc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
    
        echo "<table>";
        echo "<h1>Best Economy Rates</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Economy</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['economy']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 15:
        $sql = "select a.bowler,a.balls_bowled,b.wickets_taken from (select bowler,count(*) as balls_bowled,match_id from deliveries group by bowler,match_id order by balls_bowled desc) as a , (select bowler,count(*) as wickets_taken,match_id from deliveries where player_dismissed is not null and dismissal_kind!='run out' group by bowler,match_id) as b where a.bowler=b.bowler and a.match_id=b.match_id order by a.balls_bowled/b.wickets_taken;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Best Strike Rates(Innings)</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Balls_Bowled</th>  
			    <th>Wickets_taken</th>
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['balls_bowled']."</td>
                <td>".$row['wickets_taken']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 16:
        $sql = "select bowler,sr as strike_rate from bowlers where balls_bowled>100 order by strike_rate asc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Best Strike Rates</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Strike_Rate</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['strike_rate']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 17:
        $sql = "select bowler,sum(batsman_runs+noball_runs+wide_runs) as runs_conceeded from deliveries group by match_id,bowler,overs order by runs_conceeded desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Most Runs Conceeded</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Runs_conceded_inOver</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['runs_conceeded']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 18:
        $sql = "select * from hattricks order by hattricks desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Most Hat tricks</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Hattricks</th>  
			</tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['hattricks']."</td>
                </tr>";
            }
        echo "</table>";    
        break;

    case 19:
        $sql = "select bowler,count(*) as dot_balls from deliveries where is_super_over=0 and wide_runs=0 and noball_runs=0 and batsman_runs=0 and bye_runs=0 and legbye_runs=0 group by bowler order by dot_balls desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Most DotBalls Bowled</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Most_DotBalls</th>  
			  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['dot_balls']."</td>
                </tr>";
            }
        echo "</table>";    
        break;
        
    case 20:
        $sql = "select a.bowler,count(*) as maidens from (select bowler,sum(batsman_runs+noball_runs+wide_runs) as runs_scored,overs,match_id,count(*) as balls_bowled from deliveries group by match_id,bowler,overs order by runs_scored) as a where a.runs_scored=0 and a.balls_bowled=6 group by a.bowler order by maidens desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
	        
        echo "<table>";
        echo "<h1>Most No of Maiden Overs</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>Maidens</th>  
			  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['maidens']."</td>
                </tr>";
            }
        echo "</table>";    
        break;  

    case 21:
        $sql = "select q.bowler,count(*) as four_wicket_haul from (select a.bowler,a.match_id,count(*) as innings_wickets from (select bowler,match_id from deliveries where player_dismissed is not null and dismissal_kind!='run out') as a group by a.bowler,a.match_id order by innings_wickets) as q where q.innings_wickets=4 group by q.bowler order by four_wicket_haul desc;";
        $result = mysqli_query($conn,$sql);
        mysqli_close($conn);
        $resultCheck = mysqli_num_rows($result);
        
        echo "<table>";
        echo "<h1>Most FourWicket Hauls</h1>";
        	echo"<tr>
			    <th>Bowler</th>
			    <th>FourWickets_inInnings</th>  
			  </tr>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr> 
                <td>".$row['bowler']."</td>
                <td>".$row['four_wicket_haul']."</td>
                </tr>";
            }
        echo "</table>";    
        break;
           
}
	echo'</div>';
}
?>
	
   	
    
    </div>
<div style="width: 33%; float: left;">
    
    </div>
</body>
</html>		