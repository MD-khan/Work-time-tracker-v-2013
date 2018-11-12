<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Adding two numbers</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
* {
margin:0;
padding:0;
}
body {
background:#fff;
}
p {
margin:2em;
}
</style>
<script type="text/javascript">

function calc(n1,n2) {
var n1=parseInt(n1.value);
var n2=parseInt(n2.value);
if (isNaN(n1)) {n1=0;}
if (isNaN(n2)) {n2=0;}
	document.getElementById('total').value=n1+n2;
}
window.onload=function() {
	var n1=document.getElementById('n1');
	var n2=document.getElementById('n2');
	n1.onkeyup=function() {calc(n1,n2);}
	n2.onkeyup=function() {calc(n1,n2);}
}
</script>
</head>
<body>
<form action="#">
<p><label>Number 1: <input id="n1"></label><label> Number 2: <input id="n2"></label></p>
<p>Number 1 + Number 2 = <input id="total"></p>
</form>
</body>
</html>