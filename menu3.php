<?php 
if($_GET['rel']!='tab'){
	include 'header.php';
	echo "<div id='content'>";
}
if($_POST['nama']){
	echo $_POST['nama'];
}
?>
<script>
$(function(){
	$.getScript('ajax.js');
});
</script>
<br>
<form rol='ajax'>
	<input type='text' name='nama' /><br>
	<input type='submit' value='Ok' />
</form>

<?php 
if($_GET['rel']!='tab'){
	echo "</div>";
	include 'footer.php';
}?>