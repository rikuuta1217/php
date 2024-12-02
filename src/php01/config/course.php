<?php
$Kaisha = htmlspecialchars($_POST['Kaisha'], ENT_QUOTES);
print "会社名は" . $Kaisha . "ですね";