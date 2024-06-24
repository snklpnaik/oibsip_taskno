<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script>

    function Sankalp(a) {
		var x = a.n1.value;
		var y = a.n2.value;
		var per = (x/y)*100;
		var perr = parseFloat(per).toFixed( 2 );
		a.n3.value = perr;	
	}
	</script>
</head>

<body>
<form method="post" action="">
<input type="text" name="n1" id="n1" size="5"> / <input type="text" name="n2" id="n2" size="5"> = <input type="text" name="n3" id="n3" size="5" onFocus="Sankalp(this.form)">

</form>
</body>
 </html>
