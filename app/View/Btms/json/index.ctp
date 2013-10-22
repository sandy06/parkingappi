<?php

foreach ($btms as &$btm) {
    unset($btm['Btm']['generated_html']);
}
echo json_encode(compact('btms'));

?>