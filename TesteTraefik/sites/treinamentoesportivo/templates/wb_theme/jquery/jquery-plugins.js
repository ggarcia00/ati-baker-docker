$(document).ready(function()
{

        if($(".jcalendar").length) {
            $.insert(WB_URL+"/include/jscalendar/calendar-system.css");
          }

        if($(".jsadmin").length) {
            $.insert(WB_URL+"/modules/jsadmin/backend.css");
          }

	//Add external link class to external links -
	$('a[href^="http://"]').filter(function() {
		//Compare the anchor tag's host name with location's host name
	    return this.hostname && this.hostname !== location.hostname;
	  }).addClass("external").attr("target", "_blank");

	/* Add internal link class to external links -   */
	$('a[href^="http://"]').filter(function() {
		//Compare the anchor tag's host name with location's host name
	    return this.hostname && this.hostname == location.hostname;
	  }).addClass("internal");

});