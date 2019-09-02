<html>
    <head>
        <title>IPL</title>
    </head>
    <body>
        <a href="home1.php" style="float: right;">Go Back</a>
        <center>
        <h2>Welcome admin</h2>
        <h3>Enter new data into deliveries table</h3></center>
        <br><br>
        <!-- <form action="matches.php" method="POST">
            <table style="width:100%">
                <tr>
                    <th>Enter id: <br><input type="text" name="id" required="required" /></th>
                    <th>Enter season: <br><input type="text" name="season" required="required" /> </th> 
                    <th>Enter city: <br><input type="text" name="city" required="required" /></th>
                    <th>Enter date: <br><input type="text" name="date" required="required" /></th>
                    <th>Enter team1: <br><input type="text" name="team1" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter team2: <br><input type="text" name="team2" required="required" /></th>
                    <th>Enter toss_winner: <br><input type="text" name="toss_winner" required="required" /> </th> 
                    <th>Enter toss_decision: <br><input type="text" name="toss_decision" required="required" /></th>
                    <th>Enter result: <br><input type="text" name="result" required="required" /></th>
                    <th>Enter dl_applied: <br><input type="text" name="dl_applied" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter winner: <br><input type="text" name="winner" required="required" /></th>
                    <th>Enter win_by_runs: <br><input type="text" name="win_by_runs" required="required" /> </th> 
                    <th>Enter win_by_wickets: <br><input type="text" name="win_by_wickets" required="required" /></th>
                    <th>Enter player_of_match: <br><input type="text" name="player_of_match" required="required" /></th>
                    <th>Enter venue: <br><input type="text" name="venue" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter umpire1: <br><input type="text" name="umpire1" required="required" /></th>
                    <th>Enter umpire2: <br><input type="text" name="umpire2" required="required" /> </th> 
                    <th>Enter umpire3: <br><input type="text" name="umpire3" required="required" /></th> 
                </tr>
            </table>
        <div style="text-align:center">  
            <input type="Submit" value="Insert" style="height:30px; width:100px"/>  
        </div> 
        </form>

        <br>
        <br>
        <br> -->

        <form action="delivery.php" method="POST">
            <table style="width:100%">
                <tr>
                    <th>Enter match_id: <br><input type="text" name="match_id" required="required" /></th>
                    <th>Enter inning: <br><input type="text" name="inning" required="required" /> </th> 
                    <th>Enter batting_team: <br><input type="text" name="batting_team" required="required" /></th>
                    <th>Enter bowling_team: <br><input type="text" name="bowling_team" required="required" /></th>
                    <th>Enter overs: <br><input type="text" name="overs" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter balls: <br><input type="text" name="balls" required="required" /></th>
                    <th>Enter batsman: <br><input type="text" name="batsman" required="required" /> </th> 
                    <th>Enter non_striker: <br><input type="text" name="non_striker" required="required" /></th>
                    <th>Enter bowler: <br><input type="text" name="bowler" required="required" /></th>
                    <th>Enter is_super_over: <br><input type="text" name="is_super_over" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter wide_runs: <br><input type="text" name="wide_runs" required="required" /></th>
                    <th>Enter bye_runs: <br><input type="text" name="bye_runs" required="required" /> </th> 
                    <th>Enter legbye_runs: <br><input type="text" name="legbye_runs" required="required" /></th>
                    <th>Enter noball_runs: <br><input type="text" name="noball_runs" required="required" /></th>
                    <th>Enter penalty_runs: <br><input type="text" name="penalty_runs" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter batsman_runs: <br><input type="text" name="batsman_runs" required="required" /></th>
                    <th>Enter extra_runs: <br><input type="text" name="extra_runs" required="required" /> </th> 
                    <th>Enter total_runs: <br><input type="text" name="total_runs" required="required" /></th> 
                    <th>Enter player_dismissed: <br><input type="text" name="player_dismissed" required="required" /></th>
                    <th>Enter dismissal_kind: <br><input type="text" name="dismissal_kind" required="required" /> </th> 
                </tr>
                <tr>
                    <th>Enter fielder: <br><input type="text" name="fielder" required="required" /></th> 
                </tr>
            </table>
        <div style="text-align:center">  
            <input type="Submit" value="Insert" style="height:30px; width:100px"/>  
        </div> 
        </form>


    </body>
</html>
