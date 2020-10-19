<html>
<title>Query</title>
<body>
    <style>
			#form {
				margin: 100px auto;
				width: 600px;
			   height: 50px;
			}
			#form #logo {
				font-size: 35px;
				font-weight: bold;
				padding:20px 0px 20px 0px;
				text-align: center;
			}

			#form #q {
				padding:10px;
				border:1px solid #dddddd;
			}
			<br>
			#form #a {
				padding:500px 0px 20px 0px;
				border:0px solid #dddddd;
			}
		</style>
	</head>
<body>

<style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 15px;
    background: #22a4cf;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 12px 20px;
    margin-top: 10px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
</style>
    
    
    
    
<form enctype="multipart/form-data" method="POST" action="hasilquery.php">
Keyword : <br>
<input type="text" name="katakunci"><br>
<input type=submit><a href="index.php">Kembali</a>
</form>