<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="../css/admin.css">
</head>
<body>
  <div class ="body-bg">
      <img src="../images/bg.jpg" alt="Italian Trulli">
  </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class ="nav-logo">
          <img src="../images/white logo.png" alt="coca-cola">
        </div>
        <div class = "nav-menu">
          <a href="cashier.php"class="active"><img src="../images/home (1).svg" alt="Italian Trulli"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
          <a href="c-pos.php"><img src="../images/monitor (1).svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; POS</a>
          <a href="c-inventory.php"><img src="../images/shopping-bag.svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inventory</a>
          <a href="c-sales.php"><img src="../images/database.svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sales Report</a>
        </div>
        <div class="nav-bg">
          <img src="../images/background1.png" alt="Italian Trulli">
        </div>
      </div>

      <div class = "nav-top">
      <span style="margin-left: 20px;font-size:50px;cursor:pointer; color: white" onclick="openNav()">&#9776;</span>
      <a href="../index.php" class="logout">Logout as Cashier</a>
      </div>
      
      <hr class="hr1">
      <div id="dashboard">
        <h1>Admin Dashboard</h1>
          <div class = "search">
            <form action="search.php" method="GET">
              <input type="text" name="query" placeholder=" ">
              <button type="submit">Search</button>
            </form>
          </div>
      </div>
      <hr class="hr2"> 
      <div class="dash-btn">
        <a href="c-pos.php"><h1>POS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/monitor (2).svg"></h1></a>
        <a href="c-inventory.php"><h1>Inventory&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/shopping-bag2.svg"></h1></a>
        <a href="c-sales.php"><h1> Sales Report&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../images/database2.svg"></h1></a>
        <a href="today.php"><h1>Today's Transaction<img src="../images/truck.svg"></h1></a>
      </div>
      <div class="credited">
        <h1>Partner Management System</h1>
        <p>Designed for Educational Purposes Only</p>
      </div>
 

      <script >
//SIDE-NAV
        function openNav() {
          document.getElementById("mySidenav").style.width = "400px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
        // Get the current URL
        var currentUrl = window.location.href;

        // Get all links in the nav-menu
        var links = document.querySelectorAll('.nav-menu a');

        // Loop through each link
        links.forEach(function(link) {
            // Check if the href attribute of the link matches the current URL
            if (link.getAttribute('href') === currentUrl) {
                // Add the 'active' class to the link
                link.classList.add('active');
            }
        });
        
//SEARCH
        document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.querySelector('.search input');

        // Add event listeners for focus and blur
        searchInput.addEventListener('focus', function() {
            // When input field is focused, add class to hide background image
            this.classList.add('hidden-background');
        });

        searchInput.addEventListener('blur', function() {
            // When input field loses focus, remove class to show background image
            if (!this.value.trim()) { // Check if input field is empty
                this.classList.remove('hidden-background');
            }
        });
    });
    window.onload = openNav;
        </script>


</body>
</html>