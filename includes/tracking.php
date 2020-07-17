<?php
if ($googleanalytics=="Yes") {
	print "<!-- Global site tag (gtag.js) - Google Analytics -->\n";
	print "<script async src=\"https://www.googletagmanager.com/gtag/js?id=" . $googletrackingid ."\"></script>\n";
	print "<script>\n";
	print "  window.dataLayer = window.dataLayer || [];\n";
	print "  function gtag(){dataLayer.push(arguments);}\n";
	print "  gtag('js', new Date());\n";
	print "\n";
	echo "  gtag('config', '" . $googletrackingid . "');\n";
	print "</script>\n";
}
?>
