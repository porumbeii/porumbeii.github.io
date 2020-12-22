<?php
  $structure = $POST["pagename"];

// To create the nested structure, the $recursive parameter 
// to mkdir() must be specified.

if (!mkdir($structure, 0777, true)) {
    die('<h1>Page already exists!!!');
}
?>
