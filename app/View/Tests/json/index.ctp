<?php

foreach ($tests as &$test) {
    unset($test['Test']['generated_html']);
}
echo json_encode(compact('tests'));

?>