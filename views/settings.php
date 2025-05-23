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
<div class="marge"></div>
  <div class="row" style="margin-top: 1%; margin-left: 3%;">
    <div class="col-3" style="background-color: white; border-radius: 5px; padding: 1%;">
      <h3>Categories</h3>
      <br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Name" id="nameCat">
        <div class="input-group-append">
        <select class="custom-select" id="typeCat">
          <option value="Income">Income</option>
          <option value="Expenses">Expenses</option>
          <option value="Savings">Savings</option>
        </select>
          <button class="btn btn-outline-success" id="addCat" type="button">+</button>
        </div>
      </div>
      <br>
      <h5 style="text-align: center;">Income</h5>
      <ul class="list-group" id="listIncome">
        
      </ul>
      <br>
      <h5 style="text-align: center;">Expenses</h5>
      <ul class="list-group" id="listExpenses">
        
      </ul>
      <br>
      <h5 style="text-align: center;">Savings</h5>
      <ul class="list-group" id="listSavings">

      </ul>
    </div>
    <div class="col-5" style="margin-left: 1%; ">
      <div style="background-color: white; padding: 1%; border-radius: 5px;">
        <h3>Payments <button style="float: right;" class="btn btn-success">+</button></h3>
      
      <br>
      <table class="table">
        
        <tbody class="table-group-divider table-divider-color">
          <tr>
            <th scope="row">Apple iCloud+</th>
            <td>Expenses</td>
            <td>Medias</td>
            <td>10</td>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs2">
                  <label class="custom-control-label" for="cs2"><input class="custom-input" min=0 max=31 type="number" disabled></label>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          <tr>
            <th scope="row">Spotify</th>
            <td>Expenses</td>
            <td>Medias</td>
            <td>19</td>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs2">
                  <label class="custom-control-label" for="cs2"><input class="custom-input" min=0 max=31 type="number" disabled></label>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">📝</button>
                  <button class="btn btn-outline-secondary btn-sm" style="border: 0;">❌</button>
                </div>
            </td>
          </tr>
          <tr>
            <th scope="row">Accomptes</th>
            <td>Savings</td>
            <td>Impôts</td>
            <td>715</td>
            <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="cs2">
                  <label class="custom-control-label" for="cs2"><input class="custom-input" min=0 max=31 type="number" disabled></label>
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

    function displayCategories() {
      $('#listIncome').empty();
      $('#listExpenses').empty();
      $('#listSavings').empty();
      $.ajax({
        url: 'model/getCategories.php',
        success: function(data) {
          let clearData = JSON.parse(data);
          if (clearData.length == 0) {
            
          }
          else {
          clearData.forEach(function (item) {
            if (item[2] == "Income") {
              $('#listIncome').append(""+
                "<li class=\"list-group-item\">"+
                  "<div class=\"input-group\">"+
                    "<input type=\"text\" style=\"color: black;\" class=\"form-control\" value=\""+item[1]+"\">"+
                    "<div class=\"input-group-append\">"+
                      "<button class=\"btn btn-outline-secondary\" style=\"border: 0;\" type=\"button\">❌</button>"+
                    "</div>"+
                  "</div>"+
                "</li>"
              );
            }
            else if (item[2] == "Expenses") {
              $('#listExpenses').append(""+
                "<li class=\"list-group-item\">"+
                  "<div class=\"input-group\">"+
                    "<input type=\"text\" style=\"color: black;\" class=\"form-control\" value=\""+item[1]+"\">"+
                    "<div class=\"input-group-append\">"+
                      "<button class=\"btn btn-outline-secondary\" style=\"border: 0;\" type=\"button\">❌</button>"+
                    "</div>"+
                  "</div>"+
                "</li>"
              );
            }
            else {
              $('#listSavings').append(""+
                "<li class=\"list-group-item\">"+
                  "<div class=\"input-group\">"+
                    "<input type=\"text\" style=\"color: black;\" class=\"form-control\" value=\""+item[1]+"\">"+
                    "<div class=\"input-group-append\">"+
                      "<button class=\"btn btn-outline-secondary\" style=\"border: 0;\" type=\"button\">❌</button>"+
                    "</div>"+
                  "</div>"+
                "</li>"
              );
            }
            
        });
      }
        },
        type: 'GET'
      });
    }

    $(document).ready(function(){

      displayCategories();

      //Add a Category
      $("#addCat").click(function(){
        $.ajax({
         url: 'model/addCategory.php',
         data: {nameCat: $("#nameCat").val(), typeCat: $("#typeCat").val()},
         success: function(data) {
           let clearData = JSON.parse(data);
           if (clearData) {
             displayCategories();
           }
           else {
             alert("ERROR: La categorie n'a pas été ajoutée");
           }
         },
         type: 'GET'
        });
      });
    });
  </script>
  </body>
</html>
