<?php 
require_once('../Code/header.inc');
$Me = $_SESSION["Me"];
$Me->goIfInvalid();
$Me->goIfNotAssistant('../index.php');
?>

<html>

<?php  $Conf->header("Activities for Assistants") ?>
<body>

<?php 
$AssistantPrefix="";
include("../Tasks-Assistant.inc");
?>

<?php  $Conf->footer() ?>

</body>
</html>
