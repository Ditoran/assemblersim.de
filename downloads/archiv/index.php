<?php
$myDirectory = opendir(".");

while($entryName = readdir($myDirectory)) {
	$dirArray[] = $entryName;
}

closedir($myDirectory);

$indexCount	= count($dirArray);
sort($dirArray);

print("<h1>&Auml;ltere Versionen</h1>");

print("<table border=1 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<tr><th>Filename</th><th>Filesize</th></tr>\n");

for($index=0; $index < $indexCount; $index++) {
    if (substr("$dirArray[$index]", 0, 1) != "." && $dirArray[$index]!= "index.php"){
		print("<tr><td><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
		print("<td>");
		print(filesize($dirArray[$index]));
		print(" bytes");
		print("</td>");
		print("</tr>\n");
	}
}
print("</table>\n");
?>