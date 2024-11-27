<?php


require_once 'WebmentionIoClient.class.php';

$wm = new WebmentionIoClient();
$readable = $wm->cacheFileIsReadable();
$writeable = $wm->cacheFileIsWritable();
$wm->setCacheFile('tmp.json'); // forces some other file

print "<h1>Webmentions</h1>\n";
print "<p>Cache file " . $wm->getCacheFile().  " is readable: " . ($readable ? "Yes" : "No") . "</p>\n";
print "<p>Cache file " . $wm->getCacheFile().  " is writeable: " . ($writeable ? "Yes" : "No") . "</p>\n";

$wm->setUrl('https://tilde.club/~artlung/');
$wm->getWebmentions();



