<?php 
	// $w->data is the path to the data directory
	require_once('workflows.php');
	// $absolute_path = '~/Google\ Drive/Developer/git\ repositories/';
	$w = new Workflows();

?><?php
	
	$settings_file = 'settings_file.json;';

	if ( !file_exists( $settings_file ) ):
		firstRun();
		die();
	endif;

	/**
	 * A function to run when first downloaded.  It basically sets up a new data directory and
	 * file if one is not already there.
	 * 
	 * @return ???
	 */
	function firstRun()
	{
		$data_directory = $w->data();
		$settings_file  = 'settings_file.json;';

		# Make sure the data directory exists
		// if the directory doesn't exist
		if ( !file_exists( $data_directory ) && !is_dir( $data_directory ) ):
			// Make a new directory
			mkdir($w->data());
		endif;

		# Make sure the directory contains a settings file
		// if the settings file does NOT exist
		if ( !file_exists( $settings_file ) ):
			// Create a settings file & open it in a text editor (sublime text)
			exec('touch ' . $settings_file . '/settings_file.json; open settings_file.json;');
		endif;

		// Use those and query github to get a list of all of the gists, and bring those back into an array.
							### HOW TO DO?
		
		// Use a foreach statement on each row, make sure that you have use the $key => $value
		// in that statement:
		// 		Do a preg_match on the name of the gist to see if "#snippet" is in the name. 
		// 		If there isn't a match, then unset($gists[$key]); You should then have all of
		// 		your gists that match the snippet.
		foreach ( $variable as $key => $value ) 
		{
			# code...
		}
		
	}

	$settings_data = json_decode(file_get_contents($settings_file), true);
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