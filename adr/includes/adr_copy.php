<?php
function copyright() 
	{
	$img_link = "../images/arrow.gif";
    echo "<html>\n"
		."	<body bgcolor=\"#F6F6EB\" link=\"#363636\" alink=\"#363636\" vlink=\"#363636\">\n"
		."		<title>ADR: Copyright Information</title>\n"
		."		<font size=\"2\" color=\"#363636\" face=\"Verdana, Helvetica\">\n"
		."		<center><b>Mod Copyright &copy; Information</b><br></center>"
		."<img src='$img_link' border='0'>&nbsp;<b>Hack Title:</b> Advanced Dungeons &amp; Rabbits<br>\n"
		."<img src='$img_link' border='0'>&nbsp;<b>Official Version:</b> 0.4.4<br>\n"
		."<img src='$img_link' border='0'>&nbsp;<b>License:</b> GNU/GPL<br>\n"
		."<img src='$img_link' border='0'>&nbsp;<b>Author:</b> Seteo-Bloke<br>\n"
		."<img src='$img_link' border='0'>&nbsp;<b>Author's Email:</b> <a href='mailto:webmaster@adr-support.com'>Primary</a><br>\n"
		."<img src='$img_link' border='0'>&nbsp;<b>Hack Description:</b> This mod adds a way for users to interact
		in a very customisable Role Playing Game (RPG).<br>						
		<br>\n"
		
		."<br><center>[ <a href='http://www.adr-support.com/adr_support/index.php' target='new'>Official Demo Board</a> | <a href=\"javascript:void(0)\" onClick=javascript:self.close()>Close</a> ]</center>"
		."</font>\n"
		."</body>\n"
		."</html>";
	}

copyright();
?>
