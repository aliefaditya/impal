<!DOCTYPE html>
<html>
<body>

<p>Click the button to display a random number.</p>

<button onclick="coba()">Try it</button>

<p id="demo"></p>

<script>
function coba() {
		var randomString = function(length) {
			
			var text = "";
		
			var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			
			for(var i = 0; i < length; i++) {
			
				text += possible.charAt(Math.floor(Math.random() * possible.length));
			
			}
			
			return text;
		}

		// random string length
		var random = randomString(10);
		
		// insert random string to the field
		document.getElementById("demo").innerHTML = random;
		
	}
</script>

</body>
</html>