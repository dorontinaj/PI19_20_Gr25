<?php
// Vargu me emrat e faqeve qe ekzistojne
$value[] = "Alumni";
$value[] = "Organet e Universitetit";
$value[] = "Fakultetet";
$value[] = "Lajme";
$value[] = "Regjistrohu";

// merre param. q prej URL
$q = $_REQUEST["q"];

$hint = "";

// nese $q e ndryshme prej empty(""),kontrollo a ka hints
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($value as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Shtyp tekstin nese nuk ka sugjerime
echo $hint === "" ? "Nuk ka sugjerime" : $hint;

?>