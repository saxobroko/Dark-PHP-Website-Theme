<?php
if ($searchenabled=='True') 
	echo '<form name="cse" novalidate="novalidate" id="searchbox" action="/search.php" method="get" class="searchplace w3-hide-small searchbox sbx-google">';
	echo '<div role="search" class="sbx-google__wrapper">';
	echo '<input type="text" name="q" placeholder="' . $searchplaceholder . '" title="Search For Things" autocomplete="on" class="sbx-google__input" data-callback="YourOnSubmitFn">';
	echo '<input type="hidden" name="ie" value="utf-8" />';
	echo '<input type="hidden" name="hl" value="en" />';
	echo '<button aria-label="Submit" type="submit" style="position:absolute;margin:auto;top:0;" title="Submit" class="sbx-google__submit"><svg class="icon icon-search"><use xlink:href="/images/symbols.svg#icon-search"></use></svg></button>';
	echo '<button aria-label="Clear" type="reset" title="Clear the search query." class="sbx-google__reset"><svg class="icon icon-close"><use xlink:href="/images/symbols.svg#icon-close"></use></svg></button>';
	echo '</div>';
	echo '</form>';
echo '<script>document.querySelector(\'.searchbox [type="reset"]\').addEventListener(\'click\', function() {  this.parentNode.querySelector(\'input\').focus();});</script>';