$(document).ready(function() {
	// Get page name
	var getPage = window.location.pathname.split( '/' );
	getPage = getPage[getPage.length-1];
	getPage = getPage.split( '&' );
	getPage = getPage[0];

	// Menu set active to get page element
	if ($(".sidebar").length > 0){
		$('a[href~="'+getPage+'"]').parent('li').addClass('active');
	}
	
	// Redirect form "/" to index
	if (getPage.length < 1)
		location.href="index"; 

});