<?php 
// Contents
// - Main
// - Meta Tags
// - Search
// - Sidebar

// Some settings
$cookieswarning = "Yes"; // Yes or No // Default is 'Yes'
$copyrightstartyear = "2019"; // The year you want the copyright year in footer to start as
$googleanalytics = "No"; // Yes or No // This enables Google Analytics on your site
$googletrackingid = ""; // Google analytics tracking id

// /includes/meta.php
$appname = "App"; 
$apppreview = "/images/logo.png"; // Image shown when shared on social media
$apppreviewalttext = "Logo for " . $appname; // Shown if image can't load
$appurl = "https://example.com"; // The url of your website
$fbappid = ""; // Facebook app id // Leave blank if unknown or not wanted
$twitterusername = ""; // Username of twitter account // Leave blank if unknown or not wanted
$starturl = "/"; // The first page you want viewers to see after downloading
$favicon = "/images/logo.png"; // Favicon image // Needs to be square and not transparent
$author = "John Doe"; // Your Name
$description = "A fancy website"; // Description

// Search
$searchenabled = "True"; // True or False // https://cse.google.com
$searchid = ""; 
$searchplaceholder = "Submit your search..."; // The writing you want the search box to say before a user types

// /includes/sidebar.php
$logourl = "/images/logo.png"; // Make sure this image is square
$logoalttext = "Default Logo"; // Text to show if image can't load or for screen readers
$page1 = "Home";
$page2 = "Page2";
$page3 = "Page3";
$page4 = "Page4"; // Only 4 Pages are shown in mobile sidebar
$page5 = "Page5";
$page6 = "Page6";
$page1url = "/#"; // Default is https://example.com/#
$page2url = "/#";
$page3url = "/#";
$page4url = "/#";
$page5url = "/#";
$page6url = "/#";
$allowinstallforchrome = "Yes"; // Yes or No // This lets users download app to homescreen https://web.dev/codelab-make-installable/
?>