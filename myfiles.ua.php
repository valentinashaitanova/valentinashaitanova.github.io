<html><?php
function d_filelist_simple($dir)
{
    $dh = opendir($dir);
    if (!$dh) return d_error("Cannot open $dir");
    // use as little memory as possible using strings
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