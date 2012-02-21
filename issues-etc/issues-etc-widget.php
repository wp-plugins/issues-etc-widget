<?php
/*
Plugin Name: Issues Etc Widget
Plugin URIzzz: http://www.jonathonellis.com/issuesetc
Description: This plugin will display the Issues Etc Widget in your sidebar.  After you have installed and activated this plugin, simply go to your widgets and place the "Issues Etc. Widget" wherever you want in your sidebar.
Author: Jonathon Ellis
Version: 1
Author URI: http://www.jonathonellis.com/
*/
 
function showIssuesEtcWidget()
{
  echo("<div><br /><script type=\"text/javascript\" src=\"http://cdn.widgetserver.com/syndication/subscriber/InsertWidget.js\"></script><script type=\"text/javascript\">if (WIDGETBOX) WIDGETBOX.renderWidget('a36afb7b-c4ef-4f3d-b2fe-803a940666f8');</script>
<noscript>Get the <a href=\"http://www.widgetbox.com/widget/issues-etc-button\">Issues, Etc. Button</a> widget and many other <a href=\"http://www.widgetbox.com/\">great free widgets</a> at <a href=\"http://www.widgetbox.com\">Widgetbox</a>! Not seeing a widget? (<a href=\"http://support.widgetbox.com/\">More info</a>)</noscript></div>");
}


function widget_issuesEtc() {
?>
  <!--<h2 class="widgettitle">Issues Etc.</h2>-->
  <?php showIssuesEtcWidget(); ?>
<?php
}
 
function widget_issuesEtc_init()
{
  register_sidebar_widget(__('Issues Etc. Widget'), 'widget_issuesEtc');
}
add_action("plugins_loaded", "widget_issuesEtc_init");


?>