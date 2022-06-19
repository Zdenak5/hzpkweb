<?php
$zdendysovoPodrazeneDirectory1 = file_get_contents('https://zdendysovo-directory.ga/zdendysovoPodrazeneDirectory-cast1');
echo $zdendysovoPodrazeneDirectory1;
?>

<?php
    
    $path    = './';
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    foreach($files as $file){
        if(is_dir($file)) {
            $nextPath  = $file;
            $nextFiles = scandir($nextPath);
            $nextFiles = array_diff(scandir($nextPath), array('.', '..'));
            foreach($nextFiles as $nextFile){
                if ($nextFile == "index.html") {
                    $isIndex = TRUE;
                }else {
                    $isIndex = FALSE;
                }
            }
            // echo "<a href='$file'><li>$file - Toto JE Index</li></a>";
        //  echo "<a href='$file'><li>$file</li></a>";
        }
        if ($isIndex == TRUE && $file != "index.php") {
            echo "<a href='$file' target='_blank'><li>$file <i class='fa-solid fa-arrow-up-right-from-square'></i></li></a>";
        }else{
            echo "<a href='$file'><li>$file</li></a>";
        }
        
    }
    
?>

<?php
$zdendysovoPodrazeneDirectory2 = file_get_contents('https://zdendysovo-directory.ga/zdendysovoPodrazeneDirectory-cast2');
echo $zdendysovoPodrazeneDirectory2;
?>