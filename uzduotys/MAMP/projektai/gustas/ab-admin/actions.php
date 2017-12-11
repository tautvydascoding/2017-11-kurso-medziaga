<?php
include_once('../straipsniaiDB.php');?>
<link href="/style/style.css" type="text/css" rel="stylesheet">
<?php


switch ($_GET['action']){
    case "delete-article":
        deleteArticle($connect, $_GET['article']);
        break;

    case 'create-article':
        addArticle($connect, $_POST['title'], $_POST['tekstas'], $_POST['autvardas']);
        break;
}

header("refresh:2; url=/ab-admin/index.php");
