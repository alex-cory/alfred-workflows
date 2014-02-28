<?php 
	
	include_once 'workflows.php';
	$absolute_path = '~/Google\ Drive/Developer/git\ repositories/';
	
?><?php

	function firstRun()
	{
		// $dirname = $_POST["search"];
		// $filename = '/folder/' . $dirname . '/';
		$data_directory = $absolute_path . 'TESTER/;'
		// Make sure the data directory exists
		if (!file_exists($data_directory) && !is_dir($data_directory))
		{
			exec('cd ' . $absolute_path . '; mkdir TESTER;');
			exit;
		}

		$settings_file = $absolute_path . 'TESTER/settings_file.txt;';
		// Make sure the directory contains a settings file
		if (!file_exists($settings_file))
		{
			exec('touch settings_file.json; subl settings_file.json;');
			# Create a settings file & open it in a text editor
			# 	Just use some exec($cmd) functions to do this
			# 	It'll be easiest to have the settings file be 
			# 	some json (so you can use json_decode) with just 
			# 	a user: and key: fields.
		}

		// Use those and query github to get a list of all of the gists, and bring those back into an array.
							### HOW TO DO?
		
		// Use a foreach statement on each row, make sure that you have use the $key => $value
		// in that statement:
		// 		Do a preg_match on the name of the gist to see if "#snippet" is in the name. 
		// 		If there isn't a match, then unset($gists[$key]); You should then have all of
		// 		your gists that match the snippet.
		foreach ($variable as $key => $value) {
			# code...
		}


		
	}
/*
Use the add_result (or whatever the object method is) from the workflow library to add all of the results to the workflow object constructed (see how David's library works). Then "echo $w->toxml()"; That should provide you with the feedback. Use the raw URL of the gist as the argument.
 
Then, try to run the workflow. If you get a list of gists in Alfred, you're on the right track.
 
Now, go back and change the script filter to have "argument required" in there, and change the command to `php snippets.php {query}`. Now, look into having some fun with $argv processing in the PHP script in order to filter out more results.
 
Create a new action in Alfred that runs a script.
Have it be PHP. Then, have the contents akin to something like:
echo file_get_contents("{query}");
 
Then, add in a copy to clipboard action in Alfred. For the contents, have it be, simply {query}. Then check the box that says "automatically paste to ...".
 
That should be it.
*/


/*
BY: Shawn Rice
http://goo.gl/776q4P
*/

?>