<form action="" method="post">
<input type="checkbox" name="hobi[]" value="olahraga">OLAHRAGA<br/>
<input type="checkbox" name="hobi[]" value="berenang">BERENANG<br/>
<input type="checkbox" name="hobi[]" value="main sepeda">MAIN SEPEDA<br/>
<input type="checkbox" name="hobi[]" value="main gitar">MAIN GITAR<br/>
 <input type="reset" value="Delete Hobi" name="Delete"> <br> <br>


    Select untuk upload image:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"> <br><br>

    <input type="submit" name="kirim" value="kirim">
</form>

<?php 
if (isset($_POST['kirim'])){
	$data=$_POST["hobi"];

		foreach ($data as $nilai) {
			echo $nilai."<br/>";
		}	
}
?>
