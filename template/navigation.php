<nav class="navbar navbar-default" role="navigation">
		
		<button id="btn-debug" class="btn btn-default">Debug</button>

		<ul class="nav navbar-nav">
		<li<?php if($page_id == 3) {echo ' class="active"';} ?>><a href="index.php?page='home'">home</a></li>
		<li<?php if($page_id == 4) {echo ' class="active"';} ?>><a href="index.php?page='shows'">shows</a></li>
	</ul>
</nav>
