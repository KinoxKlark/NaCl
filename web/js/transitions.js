
	/*
	 *	Permet la transition entre les pages
	 *	- string type : type de la transition
			box-to-full
			slide-from-top
	 *	- obj : obj si nécéssaire
	 *	- link : lien vers la page
	 */
	
	function transBoxToFull(obj, link)
	{
		var box = $('<div>', {});
		box.width(obj.width());
		box.height(obj.height());
		box.css('background-color', obj.css('background-color'));
		box.css('position', 'absolute');
		var offset = obj.offset();
		box.css('top', offset.top+'px');
		box.css('left', offset.left+'px');
		box.css('z-index', 1000);
		
		$('body').append(box);
		
		box.animate({
			width:$(window).width(),
			height:$(window).height(),
			top:0,
			left:0,
		}, 100, null, function(){
			window.location.href=link;
		});
		
		return false;
	}
	
	function transSlideFromTop(link, color)
	{
		if(typeof color === "undefined")
			color = '#fff';
		var box = $('<div>', {width:$(window).width(), height:0, top:0, left:0});
		box.css('background-color', color);
		box.css('position', 'absolute');
		box.css('z-index', 1000);
		box.css('box-shadow', '0 5px 10px #ddd');
		
		$('body').append(box);
		
		box.animate({
			width:$(window).width(),
			height:$(window).height(),
			top:0,
			left:0,
		}, 100, null, function(){
			window.location.href=link;
		});
		
		return false;
	}
	
	function transHistoryBack(color)
	{
		if(typeof color === "undefined")
			color = '#fff';
		var box = $('<div>', {width:0, height:$(window).height(), top:0, left:0});
		box.css('background-color', color);
		box.css('position', 'absolute');
		box.css('z-index', 1000);
		box.css('box-shadow', '0 5px 10px #ddd');
		
		$('body').append(box);
		
		box.animate({
			width:$(window).width(),
			height:$(window).height(),
			top:0,
			left:0,
		}, 100, null, function(){
			window.history.back(); return false;
		});
		
		return false;
	}