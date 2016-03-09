<?php

$things = ['Music', 'DJing', 'Herpetology', 'Raves', 'Doing bad things with my friends'];

?>
<html>
<head>
	<title>Favorite Things</title>
</head>
<body>
	<h1>A short list that attempts to define me as a person</h1>
	<div>
		<?php foreach($things as $thing): ?>
			<tr><td><?= $thing; ?></td></tr>
		<?php endforeach; ?>
	</div>
</body>
</html>