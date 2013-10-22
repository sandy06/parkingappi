<?php
 $line= $tests[0]['Test'];
 $this->CSV->addRow(array_keys($line));
 foreach ($tests as $test)
 {
 
      $line = $test['Test'];
       $this->CSV->addRow($line);
 }
 $filename='’test’';
 echo  $this->CSV->render($filename);
?>