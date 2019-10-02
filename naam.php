<?php
echo "> Voornaam\n";
$line = readline("> ");
if (!empty($line)) {
  readline_add_history($line);
}
echo "> Achternaam\n";
$bruh = readline("> ");
if (!empty($bruh)) {
  readline_add_history($bruh);
}
echo '> Naam: ' . $line ;
echo ' ' . $bruh;
?>