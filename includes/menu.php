<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
  z-index:3;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
</head>
<body>

<div class="navbar">
        <ul>
            <li style="margin-left: 75px;"><a href="index
			.php" class="active" href="#home">Home</a></li>
            <li><a href="categorynews.php?category=Bangladesh&&lim=0">Bangladesh</a></li>
            <li><a href="categorynews.php?category=Economy&&lim=0">Economy</a></li>
            <li><a href="categorynews.php?category=International&&lim=0">International</a></li>
            <li><a href="categorynews.php?category=Sports&&lim=0">Sports</a></li>
            <li><a href="categorynews.php?category=Science&&lim=0">Science & Tech</a></li>
            <li><a href="categorynews.php?category=Entertainment&&lim=0">Entertainment</a></li>
            <li><a href="categorynews.php?category=Politics&&lim=0">Politics</a></li>

        </ul>
    </div><br><br><br>
	<div style="background-color:burlywood;height: 90px;width: 1350;">
        <span style="font-size: 30px;margin-left: 75px;margin-top: 50px;"><a href="index.php">Daily News</a></span>
        <span style="margin-left: 1180px;font-size: 20px;"><a href="admin/login.php">Login</a></span>

    </div>
	</body>
	</html>