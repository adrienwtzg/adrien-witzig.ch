<?php
if (isset($_SESSION["log"])) {
  header('Location: index.php?page=projets');
}
//Message d'erreur de connexion
if (isset($_SESSION['loginError']))
{
    echo $_SESSION['loginError'];
    unset($_SESSION['loginError']);
}
?>
    <style>
    
    </style>
    <table  id="tableTransInput" style=" padding: 5px;" class="table table-borderless">
          <tr>
            <th class="col-2">
              <select class="custom-select" id="type">
                <option>Forecast</option>
                <option>Transactions</option>
              </select>
            </th>
            <th class="col-2">
              <select class="custom-select" id="category">
                <option>Salaire (net)</option>
                <option>Courses</option>
                <option>Assurance maladie</option>
              </select>
            </th>
            <th class="col-8"></th>
          </tr>
        </table>
    <div class="row">
      <div class="col-2">
        
      </div>
      <div class="col-2">
        
      </div>
      
    </div>
    <br>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-6" style="background-color: white; padding: 20px; border-radius: 15px;">
        <h4 style="text-align: center;">Forecast Vacances</h4>
        <br>
        <canvas id="myChart" style="width:100%"></canvas>
      </div>
      <div class="col-4" style="padding-left: 5%;">
        <h5 style="text-align: center;">Projets</h5>
        <br>
        <table class="table">
        
        <tbody class="table-group-divider table-divider-color">
          <tr>
            <th scope="row">Vacances Tessin</th>
            <td>Jul 25</td>
            <td>1'000</td>
            <td>
              <div class="custom-control custom-checkbox">
                  
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          <tr>
            <th scope="row">Voyage Floride</th>
            <td>Mai 26</td>
            <td>10'000</td>
            <td>
              <div class="custom-control custom-checkbox">
                  
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          <tr>
            <th scope="row">Ski Zermatt 4 jours</th>
            <td>Jan 26</td>
            <td>1'000</td>
            <td>
              <div class="custom-control custom-checkbox">
                  
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          
        </tbody>
      </table>
      </div>
      <div class="col-1"></div>
      
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script>
    const xValues = ["jan 25","fev 25","mars","mars","mars","mars","mars","mars",];
    const yValues = [7,8,8,9,9,9,10,11,14,14,15];

    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 100, max: 1000}}],
        }
      }
    });
  </script>
</html>
