/* cfacalgmu custom scripts */

jQuery(document).ready(function(){

	// Debug
	//alert('custom js file loaded');

	// Modify href of site logo to go to main CFA site
	jQuery(".header-logo a").prop("href", "https://cfa.gmu.edu")

	// Modify href of site title to go to main CFA site
	jQuery(".site-name a").prop("href", "https://cfa.gmu.edu")

	// Modify href of main nav home link to go to main CFA site
	jQuery(".gmuw_main_nav_home a").prop("href", "https://cfa.gmu.edu")

	// Modify site title to be on two lines
	jQuery(".site-name a").html("CENTER FOR THE ARTS<br />EVENT CALENDAR")

});
