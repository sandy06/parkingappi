<?php

foreach ($kasturis as &$kasturi) {
    unset($kasturi['Kasturi']['generated_html']);
}
echo json_encode(compact('Kasturis'));

?>