<?php 
if($_GET['rel']!='tab'){
	include 'header.php';
	echo "<div id='content'>";
}
?>
<a we href='asp.js'>menu2 content in menu2.php</a>
<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'footer.php';
}?>