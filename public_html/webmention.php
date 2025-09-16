<H2>Webmentions</H2>
<?php

require_once __DIR__ . '/WebmentionIoClient.class.php';
$wm = new WebmentionIoClient();
$wm->setUrl('https://tilde.club/~artlung/');
try {
    $wm->getWebmentions()->printDL();
} catch (Exception $e) {
    echo '<p>Failed to get webmentions. Oh no.</p>';
}
?>

<FORM action="https://webmention.io/artlung.com/webmention" method="post">
    <P>Send a webmention. Write a page on your site and enter a url for it below:</P>
    <P>
        <INPUT type="text" name="source">
    </P>
    <P>
        <INPUT type="submit" name="submit" value="Send webmention">
    </P>
    <INPUT type="hidden" name="format" value="html">
    <INPUT type="hidden" name="target" value="https://tilde.club/~artlung/">
</FORM>
