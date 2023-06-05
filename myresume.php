<?php
$directoryPath = 'C:/Users/tjmol/OneDrive/Desktop/MyNewResume_files/';
$files = glob($directoryPath . '*');

foreach ($files as $file) {
    echo $file . '<br>';
}
?>