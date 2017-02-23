<!DOCTYPE  HTML>
<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script>
$(document).ready(function(){
alert('hello');
$('#demo1').autocomplete({
source:'x.php'
});
});
</script>
</head>
<body>
<input type="text" id="demo1"/>
</body>
</html>