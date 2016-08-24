<!--
NOTE

For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
Direct Link Example: 

<li>
<a href="#">HOME</a>
</li>
-->
<ul id="topMain" class="nav nav-pills nav-main top-links list-inline">
	<!--<li><a>Bine ai venit, <strong>{username}</strong></a></li>-->

	<li class=""><a href="#">ABOUT US</a></li>	
	<!--<li class=""><a href="#">HOW IT WORKS ?</a></li>	-->
	<li class=""><a href="{BASE_URL}/howitworks">START A BUSINESS</a></li>
	<!--<li class="dropdown">
	<a class="dropdown-toggle" href="#">DESPRE NOI</a>
		<ul class="dropdown-menu">
				{PAGINI}
				<li><a href="{SITE_URL}/info/view/{seo_url}#go">{page_title}</a></li>
				{/PAGINI}
		</ul>
	</li>-->	

	<li class=""><a href="{BASE_URL}/signin/">SIGN IN</a></li>
	<li class=""><a href="{BASE_URL}/signup/">SIGN UP</a></li>

	<li>
	<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/gb.png" width="16" height="11" alt="lang"> ENGLISH</a>
		<ul class="dropdown-langs dropdown-menu">
			<li><a tabindex="-1" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/de.png" width="16" height="11" alt="lang"> GERMAN</a></li>
			<li><a tabindex="-1" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/fr.png" width="16" height="11" alt="lang"> FRENCH</a></li>
			<li><a tabindex="-1" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/it.png" width="16" height="11" alt="lang"> ITALIAN</a></li>
			<li><a tabindex="-1" href="{BASE_URL}/ro.php"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/ro.png" width="16" height="11" alt="lang"> ROMANIAN</a></li>
		</ul>
	</li>
</ul>