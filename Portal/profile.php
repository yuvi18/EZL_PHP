<h1>Profile</h1>
<div ng-controller='Verification'>
	<h2>Welcome {{level}} {{username}}</h2>
	<h3>Name: {{name}}</h3>
	<h3>Age: {{age}}</h\3>
	<h3>About Me:</h3>
	<p>{{bio}}</p>
	<h3>Likes:</h3>
	<ul>
		<li ng-repeat='x in likes'> {{likes[x]}}</li>

	</ul>
	<h3>Dislikes:</h3>
	<ul>
		<li ng-repeat='x in dislikes'> {{dislikes[x]}}</li>

	</ul>
	<h3>Comments:</h3>
	<div ng-repeat='x in comments'>
		<h4>{{x.submit_user}}</h4>
		<p>{{x.content}}</p>
		<h4>{{x.submit_date}}</h4>

	</div>
	<h3>Linked Accounts:</h3>
	<div ng-repeat='x in accounts'>
		<h4>{{x.type}}</h4>
		<p>{{x.url}}</p>
		<p>{{x.etc}}</p>

	</div>
</div>