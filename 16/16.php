
<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/16.less', 'css/16.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>16</title>
       <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $url_path?>/css/bootstrap-theme.min.css">
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path?>/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/16.css">
        <script src="<?php echo $url_path ?>/js/16.js"></script>
    </head>
    <body>
        <?php include './16-content.php';?>
    </body>
</html>
