<!DOCTYPE html>
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
$less->compileFile('less/536.less', 'css/536.css');
?>
<html lang="vi" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Title - 536</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Basic usage demo">
    <meta name="author" content="David Deutsch">
    <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
    <script src="<?php echo $url_path ?>/js/536.js"></script>
    <link href="<?php echo $url_path ?>/css/536.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <?php include './536-content.php'; ?>
</body>
</html>