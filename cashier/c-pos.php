<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  </style>
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
            <a href="cashier.php"><img src="../images/home (1).svg" alt="Italian Trulli"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
            <a href="c-pos.php"class="active"><img src="../images/monitor (1).svg" alt="Italian Trulli">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; POS</a>
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
          <h1>POS</h1>
            <div class = "search">
              <form action="search.php" method="GET">
                <input type="text" name="query" placeholder=" ">
                <button type="submit">Search</button>
              </form>
            </div>
        </div>

        <div class = "date">
          <label for="selectedDate">Select Date:</label>
          <input type="date" id="selectedDate" onchange="displaySelectedDate()">
        </div>   
          
    <div class = "pos-table">
    <table>
      <div class = "inventory-outer">
        <tr>
            <th>Product Code</th>
            <th>Description</th>
            <th>Label</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
        </tr>
        </div>
        <div class = "inventory-inner">
        <tr>
          <td>LQ0001</td>
          <td>Coke</td>
          <td>Litro</td>
          <td><input type="number" class="qty-input" onchange="calculateAmount(this)"></td>
          <td class="price">354</td>
          <td class="amount">0</td>
        </tr>
        <tr>
        <td>LQ0002</td>
        <td>Royal</td>
        <td>Litro</td>
        <td><input type="number" class="qty-input" onchange="calculateAmount(this)"></td>
        <td class="price">354</td>
        <td class="amount">0</td>
      </tr>
      <tr>
        <td>LQ0003</td>
        <td>Sprite</td>
        <td>Litro</td>
        <td><input type="number" class="qty-input" onchange="calculateAmount(this)"></td>
        <td class="price">354</td>
        <td class="amount">0</td>
      </tr>
      <tr>
        <td>LQ0004</td>
        <td>Coke</td>
        <td>8oz</td>
        <td><input type="number" class="qty-input" onchange="calculateAmount(this)"></td>
        <td class="price">144</td>
        <td class="amount">0</td>
      </tr>
      <tr>
        <td>LQ0005</td>
        <td>Royal</td>
        <td>8oz</td>
        <td><input type="number" class="qty-input" onchange="calculateAmount(this)"></td>
        <td class="price">144</td>
        <td class="amount">0</td>
      </tr>
      <tr>
        <td>LQ0006</td>
        <td>Sprite</td>
        <td>8oz</td>
        <td><input type="number" class="qty-input" onchange="calculateAmount(this)"></td>
        <td class="price">144</td>
        <td class="amount">0</td>
      </tr>
    </div>
    </table>
    <div class = "c-recibo">
        <table>
            <tr>
                <th>Total</th>
                <td class="total">0</td>
            </tr>
            <tr>
                <th>Deposit</th>
                <td><input type="number" class="deposit" oninput="calculateAmountPaid()"></td>
            </tr>
            <tr>
                <th>Discount</th>
                <td><input type="number" class="discount" oninput="calculateAmountPaid()"></td>
            </tr>
            <tr>
                <th>Amount Paid</th>
                <td class="amountpaid">0</td>
            </tr>
        </table>
            <div class="payment">
            <button>PAY</button>
          </div>
  </div>
  </div>
</body>
</html>

<script >

  //SIDE-NAV
  function openNav() {
            document.getElementById("mySidenav").style.width = "400px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function calculateAmount(input) {
            var quantity = input.value;
            var price = input.parentElement.nextElementSibling.innerText;
            var amount = parseFloat(quantity) * parseFloat(price);
            input.parentElement.nextElementSibling.nextElementSibling.innerText = amount.toFixed(2);

            // Calculate and update total amount
            updateTotal();
        }

        function updateTotal() {
            var total = 0;
            var amounts = document.querySelectorAll('.amount');
            amounts.forEach(function(amount) {
                total += parseFloat(amount.innerText);
            });
            document.querySelector('.total').innerText = total.toFixed(2);

            // Calculate and update amount paid
            calculateAmountPaid();
        }

        function calculateAmountPaid() {
            var total = parseFloat(document.querySelector('.total').innerText);
            var deposit = parseFloat(document.querySelector('.deposit').value) || 0;
            var discount = parseFloat(document.querySelector('.discount').value) || 0;
            var amountPaid = total + deposit - discount;
            document.querySelector('.amountpaid').innerText = amountPaid.toFixed(2);
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
//DATE
        function displaySelectedDate() {
            var selectedDate = document.getElementById("selectedDate").value;
            document.getElementById("displayedDate").innerText = selectedDate;
        }
           
      });
      window.onload = openNav;
      
          </script>