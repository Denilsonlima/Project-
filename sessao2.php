<?php

// neste arquivo utilizo o comando 'session_regenerate_id();' que é respondavel por gerar um novo id de sessão a cada atualização de página. 

require_once("config.php");

session_regenerate_id();

echo session_id();

?>
