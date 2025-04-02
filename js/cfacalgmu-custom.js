/* cfacalgmu custom scripts */

jQuery(document).ready(function(){

	// Debug
	//alert('custom js file loaded');

	// Modify href of site logo/title to go to main Hylton site
	jQuery(".site-logo a").prop("href", "https://cfa.gmu.edu")

	// Modify site title to be on two lines
	jQuery(".site-name a").html("CENTER FOR THE ARTS<br />EVENT CALENDAR")

});
