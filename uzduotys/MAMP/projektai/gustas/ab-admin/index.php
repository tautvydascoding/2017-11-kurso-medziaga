<?php require_once('../head.php'); ?>

    <title>admin</title>
</head>
<body class="admin">
    <div class="container bg-light px-5 mt-3">


<?php include_once('../straipsniaiDB.php');


    echo "<span>Viso rasta straipsnių: </span>" . mysqli_num_rows($straipsniai) . "<br /> <hr />";
        $straipsniai = getArticles($connect);?>
        <table class='table table-sm'>
            <thead class='thead-dark'>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Antraštė</th>
                    <th scope='col'>Autorius</th>
                    <th scope='col'></th>
                </tr>
            </thead>

        <?php foreach($straipsniai as $straipsnis){
            echo '<tr><td>' . $straipsnis["id"] . '</td><td><a href="/ab-admin/index.php">' . $straipsnis["artclTitle"] . '</a></td><td>' . $straipsnis["artclAuthor"].
            '</td><td><a href="/ab-admin/actions.php?action=delete-article&article=' . $straipsnis["id"] . '" >Istrinti</a></td></tr>'
        ;}?>

        </table>

        <hr />
        <form action="/ab-admin/actions.php?action=create-article" onsubmit="return validateForm()" method="post" name="straipsnio-siuntimas">

          <div class="form-group pt-3">
              <h1>Naujas Straipsnis:</h1>
            <label for="autvardas">Autoriaus vardas</label>
            <input type="text" class="form-control" name="autvardas"  placeholder="Vardas" required>
            <br />

            <label for="title">Straipsnio pavadinimas</label>
            <input type="text" class="form-control" name="title" placeholder="Straipsnio pavadinimas" required>
          </div>

          <div class="form-group">
            <label for="tekstas">Tekstas:</label>
            <textarea class="form-control" name="tekstas" rows="5" required></textarea>
          </div>
          <hr />

          <button type="submit" name="button" id="submit" class="m-1 btn btn-secondary">Sukurti</button>
      </form>

    <script type="text/javascript" src="./libs/bootstrap/js/slim.min.js"> </script>
    <script type="text/javascript" src="./libs/bootstrap/js/popper.js"> </script>
    <script type="text/javascript" src="./libs/bootstrap/js/bootstrap.min.js"> </script>

    <script type="text/javascript" src="./libs/jquery-3.2.1.js"> </script>
    <script type="text/javascript" src="./libs/miestai.js"> </script>
    <script type="text/javascript" src="./libs/validation.js"> </script>

</body>
</html>
