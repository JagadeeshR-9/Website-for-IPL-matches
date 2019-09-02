<?php
    include 'dbh.inc.php';

    $match_id = mysqli_real_escape_string($conn, $_POST['match_id']);
    $inning = mysqli_real_escape_string($conn, $_POST['inning']);
    $batting_team = mysqli_real_escape_string($conn, $_POST['batting_team']);
    $bowling_team = mysqli_real_escape_string($conn, $_POST['bowling_team']);
    $overs = mysqli_real_escape_string($conn, $_POST['overs']);
    $balls = mysqli_real_escape_string($conn, $_POST['balls']);
    $batsman = mysqli_real_escape_string($conn, $_POST['batsman']);
    $non_striker = mysqli_real_escape_string($conn, $_POST['non_striker']);
    $bowler = mysqli_real_escape_string($conn, $_POST['bowler']);
    $is_super_over = mysqli_real_escape_string($conn, $_POST['is_super_over']);
    $wide_runs = mysqli_real_escape_string($conn, $_POST['wide_runs']);
    $bye_runs = mysqli_real_escape_string($conn, $_POST['bye_runs']);
    $legbye_runs = mysqli_real_escape_string($conn, $_POST['legbye_runs']);
    $noball_runs = mysqli_real_escape_string($conn, $_POST['noball_runs']);
    $penalty_runs= mysqli_real_escape_string($conn, $_POST['penalty_runs']);
    $batsman_runs = mysqli_real_escape_string($conn, $_POST['batsman_runs']);
    $extra_runs = mysqli_real_escape_string($conn, $_POST['extra_runs']);
    $total_runs = mysqli_real_escape_string($conn, $_POST['total_runs']);
    $player_dismissed = mysqli_real_escape_string($conn, $_POST['player_dismissed']);
    $dismissal_kind = mysqli_real_escape_string($conn, $_POST['dismissal_kind']);
    $fielder = mysqli_real_escape_string($conn, $_POST['fielder']);

    $query = mysqli_query($conn, "insert into deliveries values('$match_id','$inning', '$batting_team','$bowling_team', '$overs','$balls', '$batsman','$non_striker', '$bowler','$is_super_over', '$wide_runs','$bye_runs', '$legbye_runs','$noball_runs', '$penalty_runs','$batsman_runs', '$extra_runs','$total_runs','$player_dismissed','$dismissal_kind','$fielder')");
    header("location: home.php"); 
?>
