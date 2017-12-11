<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo1</title>
        <link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/section.css">
          <link rel="stylesheet" href="./css/footer.css">
    </head>
    <body >
            <?php
                require_once('./php/header.php');
                ?>
                <section class="container-flued bg-light mainSection">
                    <?php
                        require('./php/dienosPietus.php');
                        require('./php/section.php');
                          require_once('./php/footer.php');
                     ?>
                </section>
                


















        <!--  !!! patartina failo apacioje   -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript" src="./libs/jquery-3.2.1.min.js">

</script>
<script type="text/javascript" src="./js/main.js" charset="utf-8"> </script>
<script type="text/javascript" src="./js/meniu.js"> </script>
<script type="text/javascript" src="./js/section.js"> </script>
    </body>
</html>
