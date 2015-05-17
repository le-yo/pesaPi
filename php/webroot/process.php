<html>
<head>

	<title>Domain purchase integration</title>
	<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<center>
	<br>
	<br>
<form class="form-horizontal" action="process.php">
	<fieldset>

		<!-- Form Name -->
		<legend>Search &gt; Find &gt; Pay &gt; Own Domains</legend>

		<!-- Button Drop Down -->
		<div class="control-group">
			<label class="control-label" for="buttondropdown">Search</label>
			<div class="controls">
				<div class="input-append">
					<input id="buttondropdown" name="buttondropdown" class="input-xlarge" placeholder="domain" type="text" required="">
					<div class="btn-group">
						<button class="btn dropdown-toggle" data-toggle="dropdown">
							.com
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="#">.net</a></li>
							<li><a href="#">.org</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="singlebutton"></label>
			<div class="controls">
				<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
			</div>
		</div>

	</fieldset>
</form>
</center>

</body>

</html>
