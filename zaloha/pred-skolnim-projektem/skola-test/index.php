<!DOCTYPE html>
<html lang="cs">

<head>
    <base href="https://zdendysovo-directory.ga/">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zdendysovo Directory</title>
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="item">
            <h1>Zdendysovo Main Directory</h1>
            <h2>Vyber složku:</h2>

        <?php
            chdir("x");
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
                }
                if(($isIndex == TRUE)) {
                    echo "<a href='$file' target='_blank'><li>$file <i class='fa-solid fa-arrow-up-right-from-square'></i></li></a>";
                }elseif($file != "index.php"){
                    echo "<a href='$file'><li>$file</li></a>";
                }
                
            }
        ?>

        </div>
        <div class="item">
            <iframe src="viewer.html" name="viewer" id="viewer" height="100%" width="100%"></iframe>
        </div>
    </div>

</body>

</html>