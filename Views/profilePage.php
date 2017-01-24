<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Templating</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="ui grid">
		<div class="ui ten wide column">
			<h1>{{company}}</h1>
			<h2>{{catchPhrase}}</h2>
			<p>At {{company}}, we create {{productAdjective}} {{productName}} made of {{productMaterial}}.</p>
			<p>Find out more on <a href="{{ur}}">{{url}}</a></p>
			<div class="ui one column centered grid">
				<div class="ui center aligned segment">
					<img src="{{companyImg}}" alt="company image">
					<h3>{{productName}}</h3>
					<div>Material : {{productMaterial}}</div>
					<div>Color : {{color}}</div>
					<h3>{{price}} $ only!</h3>
					<button class="ui teal button">Take my money</button>
				</div>
			</div>
		</div>
		<div class="ui two wide column">
			<div>
				<img src="{{profileImg}}" alt="company image">
			</div>
			<h3>{{userName}}</h3>
			<h3>{{job}}</h3>
			<h3>Contact info</h3>
			<div>{{email}}</div>
			<div>{{telephone}}</div>
			<div>{{address}}</div>
		</div>
	</div>
	
</body>
</html>