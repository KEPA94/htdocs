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

	<li class="dropdown">
		<a class="dropdown-toggle" href="#">
			DESCOPERA
		</a>
		<ul class="dropdown-menu">
			<li class="dropdown">
				<a class="dropdown-toggle" href=""><i class="fa fa-area-chart"></i> Analize</a>	
				<ul class="dropdown-menu">
					<li><a href="{SITE_URL}/harta/fondul_funciar#go">Fondul funciar</a></li>
					<li><a href="{SITE_URL}/harta/fructe#go">Fructe</a></li>
					<li><a href="{SITE_URL}/harta/legume#go">Legume</a></li>
					<li><a href="{SITE_URL}/harta/cereale#go">Cereale</a></li>
					<li><a href="{SITE_URL}/harta/carne_animale#go">Carne si animale</a></li>
				</ul>	
			</li>
			<li><a href="{SITE_URL}/harta#"><i class="fa fa-map"></i> Harta Romaniei</a></li>
			<li><a href="{SITE_URL}/servicii#go"><i class="fa fa-wrench"></i> Servicii</a></li>
			<li><a href="{SITE_URL}/cerere_personalizata#go"><i class="	fa fa-commenting-o"></i> Fa o cerere personalizata</a></li>
		</ul>
	</li>	
	
	<li class="dropdown">
	<a class="dropdown-toggle" href="#">DESPRE NOI</a>
		<ul class="dropdown-menu">
				<!--{PAGINI}
				<li><a href="{SITE_URL}/info/view/{seo_url}#go">{page_title}</a></li>
				{/PAGINI}-->
		</ul>
	</li>	

	<li>{LOGIN_MENU}</li>

	<li>
	<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/ro.png" width="16" height="11" alt="lang"> ROMANA</a>
		<ul class="dropdown-langs dropdown-menu">
			<li><a tabindex="-1" href="{BASE_URL}/en.php"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/gb.png" width="16" height="11" alt="lang"> ENGLISH</a></li>
			<li><a tabindex="-1" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/de.png" width="16" height="11" alt="lang"> GERMAN</a></li>
			<li><a tabindex="-1" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/fr.png" width="16" height="11" alt="lang"> FRENCH</a></li>
			<li><a tabindex="-1" href="#"><img class="flag-lang" src="{BASE_URL}/design/application/assets/images/flags/it.png" width="16" height="11" alt="lang"> ITALIAN</a></li>
		</ul>
	</li>



</ul>