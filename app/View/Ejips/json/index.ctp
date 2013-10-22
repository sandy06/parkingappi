<?php

foreach ($ejips as &$ejip) {
    unset($ejip['Ejip']['generated_html']);
}
echo json_encode(compact('ejips'));

?>