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
    <div class="container">
      <div class="row justify-content-center">

      <div class="col-md-6">
        <form action="./model/checkLogin.php" method="POST" class="loginForm">
          <h2 class="text-center title">Dashboardy</h2><br>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="Prénom" name="prenom" required>
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Nom" name="nom" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Mot de passe" name="motDePasse" required>
          </div>
          <button type="submit" class="btn btn-info btn-block">Se connecter</button><br>
        </form>
      </div>
    </div>
    </div>
  </body>
</html>
