<?php
    include 'dbh.inc.php';

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $season = mysqli_real_escape_string($conn, $_POST['season']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $team1 = mysqli_real_escape_string($conn, $_POST['team1']);
    $team2 = mysqli_real_escape_string($conn, $_POST['team2']);
    $toss_winner = mysqli_real_escape_string($conn, $_POST['toss_winner']);
    $toss_decision = mysqli_real_escape_string($conn, $_POST['toss_decision']);
    $result = mysqli_real_escape_string($conn, $_POST['result']);
    $dl_applied = mysqli_real_escape_string($conn, $_POST['dl_applied']);
    $winner = mysqli_real_escape_string($conn, $_POST['winner']);
    $win_by_runs = mysqli_real_escape_string($conn, $_POST['win_by_runs']);
    $win_by_wickets = mysqli_real_escape_string($conn, $_POST['win_by_wickets']);
    $player_of_match = mysqli_real_escape_string($conn, $_POST['player_of_match']);
    $venue = mysqli_real_escape_string($conn, $_POST['venue']);
    $umpire1 = mysqli_real_escape_string($conn, $_POST['umpire1']);
    $umpire2 = mysqli_real_escape_string($conn, $_POST['umpire2']);
    $umpire3 = mysqli_real_escape_string($conn, $_POST['umpire3']);

    $query = mysqli_query($conn, "insert into matches values('$id','$season', '$city','$date', '$team1','$team2', '$toss_winner','$toss_decision', '$result','$dl_applied', '$winner','$win_by_runs', '$win_by_wickets','$player_of_match', '$venue','$umpire1', '$umpire2','$umpire3')");
    header("location: home.php"); 
?>







