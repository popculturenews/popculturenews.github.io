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
    <?php echo $_POST["username"]; ?><br>
    <?php echo $_POST["name"]; ?><br>
    <?php echo $_POST["password"]; ?><br>
    <?php echo $_POST["birth"]; ?><br>
    <?php echo $_POST["email"]; ?><br>
    <?php echo $_POST["address"]; ?><br>
    <?php echo $_POST["number"]; ?><br>
    <?php echo $_POST["description"]; ?><br>
    <?php echo $_POST["gender"]; ?><br>
  </body>
</html>
