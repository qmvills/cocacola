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
            <img src="../images/white logo.png" alt="Italian Trulli">
          </div>
          <div class = "nav-menu">
            <a href="admin.php"><img src="../images/home (1).svg" alt="Italian Trulli"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
            <a href="add.php"><img src="../images/plus-square.svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Add Product</a>
            <a href="inventory.php"><img src="../images/shopping-bag.svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Inventory</a>
            <a href="sales.php"class="active"><img src="../images/database.svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sales</a>
          </div>
          <div class="nav-bg">
            <img src="../images/background1.png" alt="Italian Trulli">
          </div>
        </div>
  
        <div class = "nav-top">
        <span style="margin-left: 20px;font-size:50px;cursor:pointer; color: white" onclick="openNav()">&#9776;</span>
        <a href="../index.php" class="logout">Logout as Admin</a>
        </div>
  
        <hr class="hr1">
        <div id="dashboard">
          <h1>Sales</h1>
            <div class = "search">
              <form action="search.php" method="GET">
                <input type="text" name="query" placeholder=" ">
                <button type="submit">Search</button>
              </form>
            </div>
        </div> 
        <div class = "thedate">
        <div class = "datesales">
            <label for="selectedDate"><i>From:</i></label>
            <input type="date" id="selectedDate" onchange="displaySelectedDate()">
        </div>
        <div class = "datesales2">
            <label for="selectedDate"><i>To:</i></label>
            <input type="date" id="selectedDate" onchange="displaySelectedDate()">
        </div>
    </div>

    <div class ="sales">
        <div class = "sales-table">
            <table>
                <div class = "inventory-outer">
                    <tr>
                        <th>Product Code</th>
                        <th>Description</th>
                        <th>Label</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </div>
                <div class = "inventory-inner">
                    <tr>
                        <td>LQ0001</td>
                        <td>Coke</td>
                        <td>Litro</td>
                        <td>100</td>
                        <td>354</td>
                        <td>35,400</td>
                    </tr>
                    <tr>
                        <td>LQ0002</td>
                        <td>Royal</td>
                        <td>Litro</td>
                        <td>100</td>
                        <td>354</td>
                        <td>35,400</td>
                    </tr>
                    <tr>
                        <td>LQ0003</td>
                        <td>Sprite</td>
                        <td>Litro</td>
                        <td>100</td>
                        <td>354</td>
                        <td>35,400</td>
                    </tr>
                    <tr>
                        <td>LQ0004</td>
                        <td>Coke</td>
                        <td>8oz</td>
                        <td>500</td>
                        <td>144</td>
                        <td>72,000</td>
                    </tr>
                    <tr>
                        <td>LQ0005</td>
                        <td>Royal</td>
                        <td>8oz</td>
                        <td>500</td>
                        <td>144</td>
                        <td>72,000</td>
                    </tr>
                    <tr>
                        <td>LQ0006</td>
                        <td>Sprite</td>
                        <td>8oz</td>
                        <td>500</td>
                        <td>144</td>
                        <td>72,000</td>
                    </tr>
                </div>
            </table>
        </div>

        <div class = "recibo">
            <table>
                <tr>
                    <th>Total Sales</th>
                    <td class="data">322,200</td>
                </tr>
                <tr>
                    <th>Total Deposit</th>
                    <td class="data">900</td>
                </tr>
                <tr>
                    <th>Total Discount</th>
                    <td class="data">10,800</td>
                </tr>
                <tr>
                    <th>Total Sales</th>
                    <td class="data">312,300</td>
                </tr>
            </table>
            <div class = "printbtn">
            <button type="submit">Print</button>
            </div>
        </div>
    </div>
    
</body>
</html>
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