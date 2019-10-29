<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/5.less', 'css/5.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>5</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="<?php echo $url_path ?>/css/bootstrap-v3.3.7.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/5.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/swiper.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles-slider.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <script src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/23.js"></script>
    </head>
    <body>
        <?php include '5-content.php'; ?>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/wowslider.js"></script>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/wowslider-engine.js"></script> 
    </body>
</html>