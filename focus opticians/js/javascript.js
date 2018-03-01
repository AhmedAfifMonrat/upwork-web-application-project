// JavaScript Document
function hide_panel()
{
	$("#welcome_text").fadeOut("slow");
	$("#hide_bar").fadeOut("slow");
	$("#show_bar").fadeIn("slow");
	
	
	
	
}
function show_panel()
{
	$("#show_bar").fadeOut("slow");
	$("#welcome_text").fadeIn("slow");
	$("#hide_bar").fadeIn("slow");
	
	
}
function owner()
{
document.getElementById('about').style.backgroundImage="url('images/about.jpg')";
$("#slide").hide();
}
function testimonial()
{
document.getElementById('about').style.backgroundImage="url('images/client.jpg')";
$("#slide").show();
}
function focus_page()
{
document.getElementById('about').style.backgroundImage="url('images/focus.jpg')";
$("#slide").hide();
}
function mikki()
{
document.getElementById('about').style.backgroundImage="url('images/mikki.jpg')";
$("#slide").hide();
}