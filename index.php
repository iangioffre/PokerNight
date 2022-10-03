<html>
<head>
<title>Poker Night</title>
<meta name="description" content="Poker Night">
<meta name="keywords" content="poker">
<script src="script.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Tab links -->
  <div class="tab">
    <button class="tablinks" onclick="openTab(event, 'totals')" id="defaultOpen">Totals</button>
    <button class="tablinks" onclick="openTab(event, 'moneyIn')">Money In</button>
    <button class="tablinks" onclick="openTab(event, 'moneyOut')">Money Out</button>
    <button class="tablinks" onclick="openTab(event, 'profit')">Profit</button>
  </div>

  <!-- Tab content -->
  <div id="totals" class="tabcontent">
    <h3>Totals</h3>
    <div class="totalsContent"></div>
  </div>

  <div id="moneyIn" class="tabcontent">
    <h3>Money In</h3>
    <div class="moneyInContent"></div>
  </div>

  <div id="moneyOut" class="tabcontent">
    <h3>Money Out</h3>
    <div class="moneyOutContent"></div>
  </div>

  <div id="profit" class="tabcontent">
    <h3>Profit</h3>
    <div class="profitContent"></div>
  </div>

  <script>
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>
</body>
</html>