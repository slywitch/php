<?php

require_once("config.php");

echo session_save_path();

echo "<br/>";

var_dump(session_status());

echo "<br/>";

switch(session_status()) {

    case PHP_SESSION_DISABLED:
        echo "As sessões estiveram desabilitadas";
    break;

    case PHP_SESSION_NONE:
        echo "As sessões estiveram habilitadas, mas nenhuma existe";
    break;

    case PHP_SESSION_ACTIVE:
        echo "As sessões estiveram habilitadas, mas uma existe";
    break;

}

?>