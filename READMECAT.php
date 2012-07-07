<?php
$fn = "README";
if (isset($_POST['content']))
{
    $content = stripslashes($_POST['content']);
    $fp = fopen($fn,"w") or die ("Error opening file in write mode!");
    fputs($fp,$content);
    fclose($fp) or die ("Error closing file!");
}
?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <textarea rows="40" cols="150" name="content"><?php readfile($fn); ?></textarea>
    <br/><input type="submit" value="SaveCAT"> 
</form>
