<html><head><title>Resource Box Generator</title>
<style type="text/css">
.boxit {width: 300px;}
.floatleft {float: left;}
.clearright {clear: left;}
.clearleft {clear:left;}
div {padding:20px;}
</style>
</head><body>
<?php 
function show_form($dp_resourcetemplate="", $dp_firstkeyword="", $dp_secondkeyword=""){// was first, last, interest ?>
<form action="resourcebox.php" method="POST"> <?php // was form.php ?>
<div id="dp_resourcetemplate" class="floatleft">
<label>Resource Template:</label><br />
<textarea rows="5" cols="50" name="dp_resourcetemplate"><?php echo $dp_resourcetemplate?></textarea>
<br /></div><div class="floatleft boxit"><p>Insert your default resource box, but where you would like a random choice from your first or second keyword list use either $firstkeyword or $secondkeyword.</p></div>
<div id="dp_firstkeyword" class="floatleft clearleft">
<label>First Keyword (one per line, with link):</label><br />
<textarea cols="50" rows="5" name="dp_firstkeyword"><?php echo $dp_firstkeyword?></textarea>
<br /></div>
<div id="dp_secondkeyword" class="floatleft">
<label>Second Keyword (one per line, with link):</label><br />
<textarea cols="50" rows="5" name="dp_secondkeyword"><?php echo $dp_secondkeyword?></textarea>
<br /></div>
<div class="floatleft clearright"><br /><input type="submit"></div>
</form>
<?php } //end of show_form() function

if($_SERVER['REQUEST_METHOD']!='POST') {
 show_form();
} else {
if (empty($_POST['dp_firstkeyword']) ||
    empty($_POST['dp_secondkeyword'])  ||
    empty($_POST['dp_resourcetemplate'])) {
	echo "<p>You did not fill in all of the fields, please try again.</p>\n";
        $dp_resourcetemplate = $_POST['dp_resourcetemplate'];
        $dp_firstkeyword = explode("\n", trim(str_ireplace("\r\n", "\n", $_POST['dp_firstkeyword'])));
        $dp_secondkeyword = explode("\n", trim(str_ireplace("\r\n", "\n", $_POST['dp_secondkeyword'])));
        show_form($dp_resourcetemplate, implode("\n", $dp_firstkeyword), implode("\n", $dp_secondkeyword));
	}
else {
	$dp_resourcetemplate = trim($_POST['dp_resourcetemplate']);
	$dp_firstkeyword = explode("\n", trim(str_ireplace("\r\n", "\n", $_POST['dp_firstkeyword'])));
	$dp_secondkeyword = explode("\n", trim(str_ireplace("\r\n", "\n", $_POST['dp_secondkeyword'])));
	show_form($dp_resourcetemplate, implode("\n", $dp_firstkeyword), implode("\n", $dp_secondkeyword));
	?>
	<br /><br />
	<div style="clear:left;">
	<textarea rows="10" cols="120"><?php
	foreach ($dp_firstkeyword as $dpfirstkey) {
		foreach ($dp_secondkeyword as $dpsecondkey) {
		echo str_ireplace(array('$firstkeyword','$secondkeyword'), array($dpfirstkey, $dpsecondkey),$dp_resourcetemplate) . "\n\n"; 
	} } ?></textarea></span>
<?php }}?>
</body></html>
