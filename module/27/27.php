<?php

$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
    require_once($dir_block.'/libs/lessc.inc.php');
}

$less = new lessc;
$less->compileFile('less/27.less', 'css/27.css');

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <title>MD27</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href ="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="./package/css/swiper.min.css">
        <link href="css/27.css" rel="stylesheet" type="text/css" />
        <script src="js/scripts.js" ></script>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="./package/js/swiper.min.js"></script>
        <script src="js/javascript.js" ></script>
      
        

        
        
    </head>
    <body>
        <?php include './27-content.php'; ?>
    </body>
    

</html>
