<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <title>QuickFix</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/master.css">
    <script src="../bootstrap/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="../css/master.css">
    <script src="../bootstrap/bootstrap.js">

    </script>
  </head>
  <body>

    <nav  class="navbar   navbar-expand-lg navbar-dark bg-dark">
      <div class="container">


  <a  style="margin-right:600px;"class="navbar-brand" href="index.php"><h3>QuickFix</h3></a>

</div>
</nav>
<div style="margin-top:8%;"class="container jumbotron">
<h4 style="margin-bottom:24px;">Admin Login</h4>
<form>
<div class="form-group">
  <label for="exampleInputEmail1">Admin id</label>
  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div>

<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
<?php include'footer.php'; ?>
