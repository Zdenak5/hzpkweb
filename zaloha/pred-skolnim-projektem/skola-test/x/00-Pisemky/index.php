<?php
$zdendysovoPodrazeneDirectory1 = file_get_contents('http://zdendysovo-directory.ga/zdendysovoPodrazeneDirectory-cast1');
echo $zdendysovoPodrazeneDirectory1;
?>

<?php
    
    $path    = './';
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    foreach($files as $file){
        if($file != "index.php") {
            echo "<a href='$file'><li>$file</li></a>";
        }
    }
    
?>

<?php
$zdendysovoPodrazeneDirectory2 = file_get_contents('http://zdendysovo-directory.ga/zdendysovoPodrazeneDirectory-cast2');
echo $zdendysovoPodrazeneDirectory2;
?>