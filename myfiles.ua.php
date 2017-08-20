<!doctype HTML>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<title>MyFile.UA</title>
</head>
<style>
   body {
    background-image: url(/index/oboi1.jpg/); /* Путь к фоновому изображению */
    background-color: #c7b39b; 
    background-size: 100%;
    font-size: 64px;
    font-family: Arial;
}
</style>
<body>
<h1>y_o_u_m_a_n_a_g_e_r</h1>
<?php
function d_filelist_simple($dir)
{
    $dh = opendir($dir);
    if (!$dh) return d_error("Cannot open $dir");
    $files = '';
    for ($i = 0; $i < 2; $i++) {
        $f = readdir($dh);
        if ($f === false) return array('res' => '', 'cnt' => 0);
        if ($f === "." || $f === "..") continue;
        $files .= "$f/";
    }
    while (false !== ($f = readdir($dh))) $files .= "$f/";
    closedir($dh);
    return array('res' => $files, 'cnt' => substr_count($files, '/'));

   
?>
</body>
</html>