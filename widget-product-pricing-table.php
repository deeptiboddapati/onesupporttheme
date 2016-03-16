<?php

//get benefits function 
$titletag= 'h3';
$oneheading = 'Section 1';
$outerdivid ="accordion";
$content = " Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
Ut enim ad minim veniam, quis nostrud exercitation ullamco 
laboris nisi ut aliquip ex ea commodo consequat. 
Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$oneheadingoutput = wrapit_ost('h3', $oneheading);
$contentoutput = wrapit_ost('div',wrapit_ost('p',$content));


$twoheading ="Section 2";
$twoheadingoutput =wrapit_ost('h3', $twoheading);
$outeroutputcontent = $oneheadingoutput.$contentoutput.$twoheadingoutput.$contentoutput;
$outeroutput = wrapit_ost('div', $outeroutputcontent,NULL, 'accordion');

$choice = get_field( 'name', $acfw ); 
if($choice =='onesupport') {
	$output = "<h2><span class='support'>One</span>Support</h2>";
}
elseif($choice =='oneprotect') {
	$output = "<h2><span class='protect'>One</span>Protect</h2>";
}
else{
$output = "<h2><span class='security'>One</span>Security</h2>";
$output.=$outeroutput;
}

echo $output;
?>