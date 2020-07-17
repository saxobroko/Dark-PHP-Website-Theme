<?php
if ($cookieswarning=="Yes") {
print "<link rel=\"stylesheet\" type=\"text/css\" href=\"/css/cookieconsent.min.css\" />\n";
print "<script src=\"/js/cookieconsent.min.js\"></script>\n";
print "<script>\n";
print "window.addEventListener(\"load\", function(){\n";
print "window.cookieconsent.initialise({\n";
print "  \"palette\": {\n";
print "    \"popup\": {\n";
print "      \"background\": \"#232323\"\n";
print "    },\n";
print "    \"button\": {\n";
print "      \"background\": \"#bbb6b6\"\n";
print "    }\n";
print "  },\n";
print "  \"theme\": \"classic\",\n";
print "  \"position\": \"bottom-right\",\n";
print "  \"content\": {\n";
print "    \"message\": \"This website uses cookies to help you get the best experience.\"\n";
print "  }\n";
print "})});\n";
print "</script>";
}
?>
