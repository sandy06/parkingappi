<?php

foreach ($mads as &$mad) {
    unset($mad['Mad']['generated_html']);
}
echo json_encode(compact('mads'));

?>