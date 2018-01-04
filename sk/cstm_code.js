// JavaScript Document

$("button").click(function(){
  $(".subdiv").toggleClass("active");
});

$(".menu-anim").mouseenter(function(){
	$(this).addClass("hop");
});
$(".menu-anim").mouseleave(function(){
	$(this).removeClass("hop");
});

$('.datepicker').datepicker({
	format: 'dd/mm/yyyy',
});

