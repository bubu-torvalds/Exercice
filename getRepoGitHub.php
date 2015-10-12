<?php
require_once "bootstrap.php";
//$rest = new RestClient();

//3a8ce84d20bcf2c9dd6957af46aeb23516337c3b

$repos = json_decode(file_get_contents('https://api.github.com/users/bubu-torvalds/repos?access_token=3a8ce84d20bcf2c9dd6957af46aeb23516337c3b'));

if(!empty($repos->results)) {
	foreach ($repos->results as $repo) {
		echo $repo->id;
	}
}

