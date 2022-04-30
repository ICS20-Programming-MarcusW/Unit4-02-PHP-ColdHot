<?php
// get the users temperature input
$usersTempInput = $_POST['userTemp'];
if ($usersTempInput >= 15) {
    // display the results if temperature is warm according to program
    echo "<h4>The temperature is warm!</h4>";
} else {
    // otherwise, display as cold
    echo "<h4>The temperature is cold!</h4>";
}
?>