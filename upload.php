<html>
<title>Form Upload</title>
<body>
    <div style="margin:auto;width:300px;height:400px;margin-top:100px;">
        <div id='logo'style="font-size: 35px;font-weight: bold;padding:20px 0px 20px 0px;text-align: center;">
					UPLOAD FILE PDF
		</div>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
File yang di upload : <input type="file" name="fupload"><br>
Deskripsi File : <br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload style="border-radius: 10px;margin-left: 10px;margin-top: 10px; height:40px; padding: 12px 25px; background: #73AD21; font-size: 15px;font-weight : bold; font-family: 'Lucida Console', Courier, monospace; color : white; border: white 0 solid;">
<a href="index.php" style="border-radius: 10px;margin-left: 10px; height:40px; padding: 12px 25px; background: #73AD21; font-size: 15px;font-weight : bold; font-family: 'Lucida Console', Courier, monospace; color : white; border: white 0 solid;">Kembali</a>
</form>
</div>
</body>
</html>