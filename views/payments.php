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
  td {
    vertical-align: middle;
  }
</style>
      
    <div class="marge"></div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-4">
        <table id="ex3" style=" padding: 5px; background-color: white; border-radius: 25px;" class="table">
            <tr style="text-align: center;">
              <th class="col-5" colspan="4" style="background-color: #ff0066; color: white; border-radius: 25px;"><h4>Expenses</h4></th>
            </tr>
        </table>
        <div class="marge"></div>
        <table id="tableExpensesManual" style=" padding: 5px; background-color: white; border-radius: 15px;" class="table">
            <tr style="text-align: center;">
              <th class="col-5" colspan="4" style="background-color: #ff0066; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px;"><h6>Manual</h6></th>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs1" checked>
                  <label class="custom-control-label" for="cs1"></label>
                </div>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs2" checked>
                  <label class="custom-control-label" for="cs2"></label>
                </div>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs2" checked>
                  <label class="custom-control-label" for="cs2"></label>
                </div>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
        </table>
      </div>
      <div class="col-1"></div>
      <div class="col-4">
        <table id="ex1" style=" padding: 5px; background-color: white; border-radius: 25px; border: 0px;" class="table">
            <tr style="text-align: center;">
              <th class="col-5" colspan="5" style="background-color: #0070c0; color: white; border-radius: 25px;"><h4>Savings</h4></th>
            </tr>
        </table>
        <div class="marge "></div>
        <table id="tableSavingsManual" style=" padding: 5px; background-color: white; border-radius: 15px;" class="table">
            <tr style="text-align: center;">
              <th class="col-5" colspan="4" style="background-color: #0070c0; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px;"><h6>Manual</h6></th>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs3" checked>
                  <label class="custom-control-label" for="cs1"></label>
                </div>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
            <tr>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs4" checked>
                  <label class="custom-control-label" for="cs2"></label>
                </div>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
        </table>
      </div>
      <div class="col-1"></div>
    </div>
    <div class="marge"></div>
  
    <div class="row">
      <div class="col-1"></div>
      <div class="col-4">
        <table id="tableExpensesManual" style=" padding: 5px; background-color: white; border-radius: 15px;" class="table">
            <tr style="text-align: center;">
              <th class="col-5" colspan="5" style="background-color: #ff0066; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px;"><h6>Automated</h6></th>
            </tr>
            <tr>
              <td>
                ✅ <i><small>10th</small></i>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
            <tr>
              <td>
                ✅ <i><small>26th</small></i>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
        </table>
      </div>
      <div class="col-1"></div>
      <div class="col-4">
        <table id="tableSavingsManual" style=" padding: 5px; background-color: white; border-radius: 15px;" class="table">
            <tr style="text-align: center;">
              <th class="col-5" colspan="5" style="background-color: #0070c0; color: white; border-top-left-radius: 10px; border-top-right-radius: 10px;"><h6>Automated</6></th>
            </tr>
            <tr>
              <td>
                ✅ <i><small>1st</small></i>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
            <tr>
              <td>
                ❌ <i><small>12th</small></i>
              </td>
              <td>Apple iCloud+</td>
              <td>Assurance maladie</td>
              <td><span style="float: right;">10</span></td>
            </tr>
        </table>
      </div>
      <div class="col-1"></div>
    </div>
  
  </body>
</html>
