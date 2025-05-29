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
  tr {
    line-height: 10px;
    min-height: 10px;
    height: 10px;
  }
  td {
    padding-left: 20%;
    padding-right: 20%;
  }
</style>
    <table  id="tableTransInput" style=" padding: 5px;" class="table table-borderless">
      <tr>
        <th class="col-1">
          <select class="custom-select" id="type">
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
            <option>All year</option>
          </select>
        </th>
        <th class="col-1">
          <select class="custom-select" id="category">
            <option>2025</option>
            <option>2026</option>
          </select>
        </th>
        <th class="col-8"></th>
      </tr>
    </table>
    <div class="marge"></div>
    <div class="row">
    <div class="col-2"></div>
      <div class="col-8">
        <div style="background-color: white; padding: 1%; border-radius: 10px;">
          <div class="form-row">
            <div class="form-group col-md-1">
              <label for="dateTrans">Date</label>
              <input type="date" class="form-control" id="dateTrans">
            </div>
            <div class="form-group col-md-2">
              <label for="typeSelect">Type</label>
              <select id="typeSelect" class="form-control">
                <option selected>Income</option>
                <option>Expenses</option>
                <option>Savings</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="categorySelect">Category</label>
              <select id="categorySelect" class="form-control">
               
              </select>
            </div>
            <div class="form-group col-md-1">
              <label for="amount">Amount</label>
              <input type="text" class="form-control" id="amount">
            </div>
            <div class="form-group col-md-6">
              <label for="details">Details</label>
              <input type="text" class="form-control" id="details">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="nextMonth">
              <label class="form-check-label" for="nextMonth">
                Next month ?
              </label>
            </div>
          </div>
          <button class="btn btn-primary" id="addTrans">Add transaction</button>
        </div>
      <div class="marge"></div>
      <h1  style="text-align: center;">January 2025</h1>
      <br>
      <table id="tableTrans" style=" padding: 5px; background-color: white; border-radius: 10px;" class="table table-bordered">
          <tr>
            <th class="col-1">Date</th>
            <th class="col-1">Type</th>
            <th class="col-2">Category</th>
            <th class="col-1">Amount</th>
            <th class="col-4">Details</th>
            <th class="col-2" colspan="2">Effective Date</th>
          <tr>
            <td>29 sep 25</td>
            <td>Income</td>
            <td>Salaire (net)</td>
            <td><span style="color: #00cc66;">4070</span></td>
            <td><i><small>Le salaire qui est versé à la fin du moin depuis Hirslanden asdasdasdasd asdas</small></i></td>
            <td>-> 1 oct 25</td>
            <td class="text-center" style="padding-top: 0; padding-bottom: 0;">
              <button class="btn btn-outline-secondary btn-xs" style="border: 0;">📝</button>
              <button class="btn btn-outline-secondary btn-xs" style="border: 0;">❌</button>
            </td>
          </tr>
          <tr>
            <td>29 sep 25</td>
            <td>Income</td>
            <td>Salaire (net)</td>
            <td><span style="color: red; float: right; ">4070</span></td>
            <td><i><small>Le salaire qui est versé à la fin du moin depuis Hirslanden</small></i></td>
            <td>-> 1 oct 25</td>
            <td class="text-center" style="padding-top: 0; padding-bottom: 0;">
              <button class="btn btn-outline-secondary btn-xs" style="border: 0;">📝</button>
              <button class="btn btn-outline-secondary btn-xs" style="border: 0;">❌</button>
            </td>
          </tr>
          <tr>
            <td>29 sep 25</td>
            <td>Income</td>
            <td>Salaire (net)</td>
            <td><span style="color: red; float: right; ">4070</span></td>
            <td><i><small>Le salaire qui est versé à la fin du moin depuis Hirslanden</small></i></td>
            <td>-> 1 oct 25</td>
            <td class="text-center" style="padding-top: 0; padding-bottom: 0;">
              <button class="btn btn-outline-secondary btn-xs" style="border: 0;">📝</button>
              <button class="btn btn-outline-secondary btn-xs" style="border: 0;">❌</button>
            </td>
          </tr>
      </table>
      </div>
      <div class="col-2"></div>
    </div>
      
    <script>
      /*$("#date").datepicker({ 
            OPTIONS
      }).datepicker('update', new Date());*/

      //Displays categories with type in form
      function displayCategorySelect(type){
        $('#categorySelect').empty();
        $.ajax({
          url: 'model/getCategories.php',
          success: function(data) {
            let clearData = JSON.parse(data);
            if (clearData.length == 0) {
              
            }
            else {
            clearData.forEach(function (item) {
              if (item[2] == type) {
                $('#categorySelect').append("<option value=\""+item[0]+"\">"+item[1]+"</option>");
              }
          });
          }
          },
          type: 'GET'
        });
      }

      $('#typeSelect').change(function(){
        displayCategorySelect($('#typeSelect').val());
      });

      $(document).ready(function(){
        displayCategorySelect($('#typeSelect').val());
        
        //Add a Transaction
        $("#addTrans").click(function(){
          $.ajax({
            url: 'model/addTransaction.php',
            data: {date: $("#dateTrans").val(), idCategory: $("#categorySelect").val(), amount: $("#amount").val(), details: $("#details").val(), next: 1},
            success: function(data) {
              alert(data);
              let clearData = JSON.parse(data);
              if (clearData) {
                displayCategories();
              }
              else {
                alert("ERROR: La categorie n'a pas été ajoutée");
              }
            },
            type: 'POST'
          });
        });
      });

      
    </script>
  </body>
</html>
