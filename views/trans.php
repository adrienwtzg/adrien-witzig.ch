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
    <div class="marge"></div>
    <div class="row">
    <div class="col-2"></div>
      <div class="col-8">
        <table  id="tableTransInput" style=" padding: 5px;" class="table table-borderless">
          <tr>
            <th class="col-1"><input type="date" id="date" class="form-control"></th>
            <th class="col-1">
              <select class="custom-select" id="type">
                <option>Income</option>
                <option>Expenses</option>
                <option>Savings</option>
              </select>
            </th>
            <th class="col-2">
              <select class="custom-select" id="category">
                <option>Salaire (net)</option>
                <option>Courses</option>
                <option>Assurance maladie</option>
              </select>
            </th>
            <th class="col-1"><input type="text" class="form-control" placeholder="Amount" ></th>
            <th class="col-4"><input type="text" maxlength="75" class="form-control" placeholder="Details" ></th>
            <th class="col-1"><button class="btn btn-outline-success w-100" type="button">Add</button>
          </tr>
        </table>
          
      <br>
      <table id="tableTrans" style=" padding: 5px; background-color: white; border-radius: 10px;" class="table table-bordered">
          <tr>
            <th class="col-1">Date</th>
            <th class="col-1">Type</th>
            <th class="col-1">Category</th>
            <th class="col-1">Amount</th>
            <th class="col-3">Details</th>
            <th class="col-1">Effective Date</th>
          </tr>
          <tr>
            <td>29 sep 25</td>
            <td>Income</td>
            <td>Salaire (net)</td>
            <td><span style="float: right; color: #00cc66;">4070</span></td>
            <td><i><small>Le salaire qui est versé à la fin du moin depuis Hirslanden asdasdasdasd asdas</small></i></td>
            <td>-> 1 oct 25</td>
          </tr>
          <tr>
            <td>29 sep 25</td>
            <td>Income</td>
            <td>Salaire (net)</td>
            <td><span style="color: red;">4070</span></td>
            <td><i><small>Le salaire qui est versé à la fin du moin depuis Hirslanden</small></i></td>
            <td>-> 1 oct 25</td>
          </tr>
          <tr>
            <td>29 sep 25</td>
            <td>Income</td>
            <td>Salaire (net)</td>
            <td>4070</td>
            <td><i><small>Le salaire qui est versé à la fin du moin depuis Hirslanden</small></i></td>
            <td>-> 1 oct 25</td>
          </tr>
      </table>
      </div>
      <div class="col-2"></div>
    </div>
      
    <script>
      $("#date").datepicker({ 
            OPTIONS
      }).datepicker('update', new Date());

      $(document).ready(function(){
        
        displayCategories();

      });

      
    </script>
  </body>
</html>
