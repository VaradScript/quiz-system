<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Project Worlds || TEST YOUR SKILL </title>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  
  <?php if(@$_GET['w']) { echo '<script>alert("'.@$_GET['w'].'");</script>'; } ?>
</head>

<?php include_once 'dbConnection.php'; ?>

<body>
<div class="header">
  <div class="row">
    <div class="col-lg-6">
      <span class="logo">Online Quiz Management System</span>
    </div>
    <div class="col-md-4 col-md-offset-2">
      <?php
      include_once 'dbConnection.php';
      session_start();
      if(!(isset($_SESSION['email']))){
        header("location:index.php");
      } else {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'dbConnection.php';
        echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> 
        <a href="account.php?q=1" class="log log1">'.$name.'</a>&nbsp;|&nbsp;
        <a href="logout.php?q=account.php" class="log">
        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</a></span>';
      }
      ?>
    </div>
  </div>
</div>

<div class="bg">
  <nav class="navbar navbar-default title1">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> >
            <a href="account.php?q=1">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span>
            </a>
          </li>
          <li <?php if(@$_GET['q']==2) echo'class="active"'; ?> >
            <a href="account.php?q=2">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History
            </a>
          </li>
          <li <?php if(@$_GET['q']==3) echo'class="active"'; ?> >
            <a href="account.php?q=3">
              <span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking
            </a>
          </li>
          <li class="pull-right">
            <a href="logout.php?q=account.php">
              <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Signout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <!--home start-->
        <?php if(@$_GET['q']==1) {
          $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
          echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
          <tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
          $c=1;
          while($row = mysqli_fetch_array($result)) {
            $title = $row['title'];
            $total = $row['total'];
            $sahi = $row['sahi'];
            $time = $row['time'];
            $eid = $row['eid'];
            $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
            $rowcount=mysqli_num_rows($q12);	
            if($rowcount == 0){
              echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
              <td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32">
              <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
            }
          }
          echo '</table></div></div>';
        } ?>

        <!--quiz start-->
        <?php
        if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) {
          $eid=@$_GET['eid'];
          $sn=@$_GET['n'];
          $total=@$_GET['t'];
          $q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn'");
          echo '<div class="panel" style="margin:5%">';
          while($row=mysqli_fetch_array($q)) {
            $qns=$row['qns'];
            $qid=$row['qid'];
            echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br />'.$qns.'</b><br /><br />';
          }
          $q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid'");
          echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST" class="form-horizontal"><br />';
          while($row=mysqli_fetch_array($q)) {
            $option=$row['option'];
            $optionid=$row['optionid'];
            echo '<input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br /><br />';
          }
          echo '<br /><button type="submit" class="btn btn-primary">
          <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
        }
        ?>

        <!--result display-->
        <?php if(@$_GET['q']== 'result' && @$_GET['eid']) {
          $eid=@$_GET['eid'];
          $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email'") or die('Error157');
          echo '<div class="panel">
          <center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';
          while($row=mysqli_fetch_array($q)) {
            $s=$row['score'];
            $w=$row['wrong'];
            $r=$row['sahi'];
            $qa=$row['level'];
            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
            <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
            <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
            <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
          }
          $q=mysqli_query($con,"SELECT * FROM rank WHERE email='$email'") or die('Error157');
          while($row=mysqli_fetch_array($q))
            echo '<tr style="color:#66CCFF"><td>Rank&nbsp;<span class="glyphicon glyphicon-scale" aria-hidden="true"></span></td><td>'.$row['score'].'</td></tr>';
          }
          echo '</table></div>';
        ?>

      </div>
    </div>
  </div>
</div>
</body>
</html>
