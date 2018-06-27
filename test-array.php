<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vue</title>
		<!-- development version, includes helpful console warnings -->
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	</head>
	<body>
		<div id="app">
			{{ message }}
		</div>
		<script type="text/javascript">
			var app = new Vue({
				el: '#app',
				data: {
					message: 'Hello World!'
				}
			});
		</script>
	</body>
</html>