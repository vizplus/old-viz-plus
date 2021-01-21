<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>{title}</title>
	<meta name="description" content="{description}">
	<meta property="og:description" content="{description}">
	<meta name="twitter:description" content="{description}">
	<meta name="viewport" content="width=device-width">
	{head_addon}

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/app.css?{css_change_time}">
	<script type="text/javascript" src="/cash.min.js"></script>
	<script type="text/javascript" src="/app.js?{script_change_time}"></script>
</head>
<body>
<div class="horizontal-view vertical-view">
	{content}
</div>
</body>
</html>