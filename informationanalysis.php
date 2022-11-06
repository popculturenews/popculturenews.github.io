<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>InformationAnalysis</title>
    <style>
body {
  background-color:orange;
      }
      p {
        color:white;
      }
    </style>
  </head>
  <body>
    <p>Current Profile</p>
    <?php echo $_GET["username"]; ?><br>
    <?php echo $_GET["name"]; ?><br>
    <?php echo $_GET["password"]; ?><br>
    <?php echo $_GET["birth"]; ?><br>
    <?php echo $_GET["email"]; ?><br>
    <?php echo $_GET["address"]; ?><br>
    <?php echo $_GET["number"]; ?><br>
    <?php echo $_GET["description"]; ?><br>
    <?php echo $_GET["gender"]; ?><br>
  </body>
</html>
