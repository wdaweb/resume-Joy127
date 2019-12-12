// JavaScript Document
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});

function lo(x)
{
	location.replace(x)
}

function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)

	// x這個選擇器淡入，如果y存在，則y淡入,如果y和url都在,則y連結到url
	// if 函式 如果程式只有一行，不需要 {}，二行以上還是需要加上 {} 才可以
}

function cl(x)
{
	$(x).fadeOut();
}