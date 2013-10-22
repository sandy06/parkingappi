<?php

foreach ($hsrs as &$hsr) {
    unset($hsr['Hsr']['generated_html']);
}
echo json_encode(compact('hsrs'));

?>