<?php

include 'db/db_connect.php';

/*$db = connectDB();

$stmt = $db->prepare("INSERT INTO categories (name, type) VALUES (?, ?)");
$cat="Loyer";
$typ="Expenses";
$stmt->bindParam(1, $cat);
$stmt->bindParam(2, $typ);

$stmt->execute();
*/

?>
<div class="marge" style="margin-right: 90%; margin-top: 1%; margin-left: 1%;">
  <select class="custom-select" id="saving">
    <option selected>Vacances</option>
    <option>Projets</option>
  </select>
</div>
  <div class="row" style="margin-top: 1%; margin-left: 3%;">
    <div class="col-3"></div>
    <div class="col-2"><button class="btn btn-outline-success">Add Project</button></div>
    <div class="col-7"></div>
  </div>
  <div class="row" style="margin-top: 1%; margin-left: 3%;">
    <div class="col-3"></div>
    <div class="col-6" style="background-color: white; border-radius: 10px; padding: 1%;">
      <h3>Open <b id="openSavingHeader"></b> Projects</h3>
      <br>
      <table class="table">
        <thead class="table-secondary">
          <tr>
            <th class="col-3">Name</th>
            <th class="col-1">Total budget</th>
            <th class="col-1">M-10 budget</th>
            <th class="col-1">M-6 budget</th>
            <th class="col-1">M-1 budget</th>
            <th class="col-3">Estimated period</th>
            <th class="col-2"></th>
          </tr>
        </thead>
        <tbody class="table-group-divider table-divider-color">
          <tr>
            <th scope="row">Voyage Floride</th>
            <td>10'000 CHF</td>
            <td>2'000 CHF</td>
            <td>4'000 CHF</td>
            <td>4'000 CHF</td>
            <td  class="text-center">May 2026 (in 1 year)</td>
            <td>
              <div class="custom-control custom-checkbox" style="float: right;">
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          
        </tbody>
      </table>
      </div>
      
    </div>
    <div class="col-3"></div>
  </div>
  <div class="row" style="margin-top: 1%; margin-left: 3%;">
    <div class="col-3"></div>
    <div class="col-6" style="background-color: white; border-radius: 10px; padding: 1%;">
      <h3>Closed <b id="closedSavingHeader"></b> Projects</h3>
      <br>
      <table class="table">
        <thead class="table-secondary">
          <tr>
            <th class="col-3">Name</th>
            <th class="col-1">Budget</th>
            <th class="col-1">Spent</th>
            <th class="col-1"></th>
            <th class="col-1"></th>
            <th class="col-3 text-center">Estimated period</th>
            <th class="col-2"></th>
          </tr>
        </thead>
        <tbody class="table-group-divider table-divider-color">
          <tr>
            <th scope="row">Voyage Crète</th>
            <td>3'000 CHF</td>
            <td>2'950 CHF</td>
            <td></td>
            <td></td>
            <td class="text-center">May 2025 (now)</td>
            
            <td>
              <div class="custom-control custom-checkbox" style="float: right;">
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          
        </tbody>
      </table>
      </div>
      
    </div>
    <div class="col-3"></div>
  </div>
  <script>

    

    $(document).ready(function(){

      //Replace the Saving header
      $("#openSavingHeader").text($('#saving').find(":selected").text());
      $("#closedSavingHeader").text($('#saving').find(":selected").text());
      $('#saving').on('change', function() {
        $("#openSavingHeader").text($('#saving').find(":selected").text());
        $("#closedSavingHeader").text($('#saving').find(":selected").text());
      });
      
      
    });
  </script>
  </body>
</html>
