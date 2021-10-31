<?php
/*
    Escapes HTML for output

    Modified: 10/31/21 by Michael
*/



function escape($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
?>