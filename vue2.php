<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Vue 2</title>
		<!-- development version, includes helpful console warnings -->
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	</head>
	<body>
		<div id="app-2">
			<span v-bind:title="message">
				Hover your mouse over me for a few seconds to see my dynamically bound title!
			</span>
		</div>
		<script type="text/javascript">
			var app2 = new Vue({
				el: '#app-2',
				data: {
					message: 'You loaded this page on ' + new Date().toLocaleString()
				}
			});
		</script>
	</body>
</html>