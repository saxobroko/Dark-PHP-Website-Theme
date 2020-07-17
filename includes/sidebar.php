<?php 
	$current = 'id="currentpage"';
?>
<style>.w3-bar-item{height:13.25%}#currentpage{background:#000}a{font-size:12px}.mobile-container{max-width: 480px; margin: auto; background-color: #555; height: 500px; color: white; border-radius: 10px;}.topnav{overflow: hidden; background-color: #333; position: sticky;}.topnav a{float: left; color: white; padding: 14px 16px; text-decoration: none; font-size: 17px;}.topnav a:hover{background-color: #ddd; color: black;}.sticky1{z-index: 1;}.sticky1{position: sticky; top: 0px;}.download{position:fixed;right:2%;bottom:5%;}.btn33 {transition: transform 0.3s;}.btn33:hover {transform: scale(1.2);}</style>
<a id="add-button" class="w3-button w3-hover-black" style="background-color: gray;position: fixed;z-index: 11;right: 406px;bottom: 0;" aria-label="Install"><b>Install</b></a>
<nav style="z-index: 10;" class="w3-hide-small w3-text-white w3-sidebar nobar side w3-bar-block w3-small w3-center">
<img style="width:100%;" draggable="false" src="<?php echo $logourl ?>" alt="<?php echo $logoalttext ?>">
<a <?php if ($thisPage==$page1) 
echo $current ?>target="_self" class="w3-bar-item btn33 w3-button w3-hover-black" href="<?php echo $page1url ?>" aria-label="<?php echo $page1 ?>">
<svg style="width:40px; filter: invert(100%);" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 28"><path d="M22 15.5v7.5c0 0.547-0.453 1-1 1h-6v-6h-4v6h-6c-0.547 0-1-0.453-1-1v-7.5c0-0.031 0.016-0.063 0.016-0.094l8.984-7.406 8.984 7.406c0.016 0.031 0.016 0.063 0.016 0.094zM25.484 14.422l-0.969 1.156c-0.078 0.094-0.203 0.156-0.328 0.172h-0.047c-0.125 0-0.234-0.031-0.328-0.109l-10.813-9.016-10.813 9.016c-0.109 0.078-0.234 0.125-0.375 0.109-0.125-0.016-0.25-0.078-0.328-0.172l-0.969-1.156c-0.172-0.203-0.141-0.531 0.063-0.703l11.234-9.359c0.656-0.547 1.719-0.547 2.375 0l3.813 3.187v-3.047c0-0.281 0.219-0.5 0.5-0.5h3c0.281 0 0.5 0.219 0.5 0.5v6.375l3.422 2.844c0.203 0.172 0.234 0.5 0.063 0.703z"></path></svg>
<p><?php echo $page1 ?></p>
</a>
<a <?php if ($thisPage==$page2) 
echo $current ?>target="_self" class="w3-bar-item btn33 w3-button w3-hover-black" href="<?php echo $page2url ?>" aria-label="<?php echo $page2 ?>">
<svg style="width:40px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path></svg>
<p><?php echo $page2 ?></p>
</a>
<a <?php if ($thisPage==$page3) 
echo $current ?>target="_self" class="w3-bar-item btn33 w3-button w3-hover-black" href="<?php echo $page3url ?>" aria-label="<?php echo $page3 ?>">
<svg style="width:40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M480 96H160C71.6 96 0 167.6 0 256s71.6 160 160 160c44.8 0 85.2-18.4 114.2-48h91.5c29 29.6 69.5 48 114.2 48 88.4 0 160-71.6 160-160S568.4 96 480 96zM256 276c0 6.6-5.4 12-12 12h-52v52c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-52H76c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h52v-52c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h52c6.6 0 12 5.4 12 12v40zm184 68c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48zm80-80c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z"></path></svg>
<p><?php echo $page3 ?></p>
</a>
<a <?php if ($thisPage==$page4) 
echo $current ?>target="_self" class="w3-bar-item btn33 w3-button w3-hover-black" href="<?php echo $page4url ?>" aria-label="<?php echo $page4 ?>">
<svg style="width:40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tools" class="svg-inline--fa fa-tools fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M501.1 395.7L384 278.6c-23.1-23.1-57.6-27.6-85.4-13.9L192 158.1V96L64 0 0 64l96 128h62.1l106.6 106.6c-13.6 27.8-9.2 62.3 13.9 85.4l117.1 117.1c14.6 14.6 38.2 14.6 52.7 0l52.7-52.7c14.5-14.6 14.5-38.2 0-52.7zM331.7 225c28.3 0 54.9 11 74.9 31l19.4 19.4c15.8-6.9 30.8-16.5 43.8-29.5 37.1-37.1 49.7-89.3 37.9-136.7-2.2-9-13.5-12.1-20.1-5.5l-74.4 74.4-67.9-11.3L334 98.9l74.4-74.4c6.6-6.6 3.4-17.9-5.7-20.2-47.4-11.7-99.6.9-136.6 37.9-28.5 28.5-41.9 66.1-41.2 103.6l82.1 82.1c8.1-1.9 16.5-2.9 24.7-2.9zm-103.9 82l-56.7-56.7L18.7 402.8c-25 25-25 65.5 0 90.5s65.5 25 90.5 0l123.6-123.6c-7.6-19.9-9.9-41.6-5-62.7zM64 472c-13.2 0-24-10.8-24-24 0-13.3 10.7-24 24-24s24 10.7 24 24c0 13.2-10.7 24-24 24z"></path></svg>
<p><?php echo $page4 ?></p>
</a>
<a <?php if ($thisPage==$page5) 
echo $current ?>target="_blank" class="w3-bar-item btn33 w3-button w3-hover-black" href="<?php echo $page5url ?>" rel="noopener" aria-label="<?php echo $page5 ?>">
<svg style="width:40px;height:40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-book-user fa-w-14 fa-5x"><path fill="currentColor" d="M448 358.4V25.6c0-16-9.6-25.6-25.6-25.6H96C41.6 0 0 41.6 0 96v320c0 54.4 41.6 96 96 96h326.4c12.8 0 25.6-9.6 25.6-25.6v-16q0-9.6-9.6-19.2c-3.2-16-3.2-60.8 0-73.6q9.6-4.8 9.6-19.2zM240 64a64 64 0 1 1-64 64 64 64 0 0 1 64-64zM128 281.6c0-31.81 30.09-57.6 67.2-57.6h5a103.25 103.25 0 0 0 79.7 0h4.95c37.11 0 67.2 25.79 67.2 57.6v19.2c0 10.61-10 19.2-22.4 19.2H150.4c-12.4 0-22.4-8.6-22.4-19.2zM380.8 448H96c-19.2 0-32-12.8-32-32s16-32 32-32h284.8z"></path></svg>
<p><?php echo $page5 ?></p>
</a>
<a <?php if ($thisPage==$page6) 
echo $current ?>target="_blank" class="w3-bar-item btn33 w3-button w3-hover-black" href="<?php echo $page6url ?>"  rel="noopener" aria-label="<?php echo $page6 ?>">
<svg style="width:40px; filter: invert(100%);" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M26.109 8.844c0 0.391-0.156 0.781-0.438 1.062l-13.438 13.438c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-7.781-7.781c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.609 10.25-10.266c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062z"></path></svg>
<p><?php echo $page6 ?></p>
</a>
</nav>
<div class="sticky1 w3-hide-large w3-hide-medium topnav">
    <a <?php if ($thisPage==$page1) 
echo $current ?> href="<?php echo $page1url ?>"><?php echo $page1 ?></a>
    <a <?php if ($thisPage==$page2) 
echo $current ?> href="<?php echo $page2url ?>"><?php echo $page2 ?></a>
    <a <?php if ($thisPage==$page3) 
echo $current ?> href="<?php echo $page3url ?>"><?php echo $page3 ?></a>
    <a <?php if ($thisPage==$page4) 
echo $current ?> href="<?php echo $page4url ?>"><?php echo $page4 ?></a>
</div>
<?php if ($allowinstallforchrome=='Yes') echo '<script>let deferredPrompt;const addBtn = document.querySelector(\'#add-button\');addBtn.style.display = \'none\';window.addEventListener(\'beforeinstallprompt\', (e) => {e.preventDefault();deferredPrompt = e;addBtn.style.display = \'block\';addBtn.addEventListener(\'click\', (e) => {addBtn.style.display = \'none\';deferredPrompt.prompt();deferredPrompt.userChoice.then((choiceResult) => {if (choiceResult.outcome === \'accepted\') {console.log(\'User accepted the A2HS prompt\');} else {console.log(\'User dismissed the A2HS prompt\');}deferredPrompt = null;});});});</script>' ?>