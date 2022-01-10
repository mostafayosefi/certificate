	$('.dropdownIndLink').click(function(){
		$(this).children().last().toggleClass('rotate')
  $(this).next(".dropdown-menu").toggle();
  $('html').addClass("pFixed");
});

	let prospBtn = $('.infoSelectMob')

	prospBtn.click(function(){
		$('.myinfoNavMob').toggleClass("prospDropdownMenuOpen")
	})