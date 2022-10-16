jQuery(document).ready(function($){
	var $listWrap = $("#tablelistbox");
	var $priceWrap = $("#pricelistframe");
	var $searchWrap = $("#searchbox");
	var $selects = $searchWrap.find("select");
	var $submit = $("#price-search");
	var theCls = "the-price";
	var hdnCls = "hidden";

	var hdnLoadingCls = "hidden-loading";
	$listWrap.find("." + hdnLoadingCls).removeClass(hdnLoadingCls);


	var reachScorllIfSp = function(){
		if( $searchWrap.hasClass('sp-searchbox') ){
			var parentScrollTo = $searchWrap.offset().top;
			var currentScroll = $(window).scrollTop();
			if( currentScroll < parentScrollTo ){
				$("html,body").animate({
					scrollTop: parentScrollTo, 
				}, {
					duration: 400, 
				});
			}
		}
	};

	var reachScroll = function(reach, cell){
		var timer;
		var itvlNum = 0;
		$(cell).addClass(theCls);
		$priceWrap.stop().animate({
			scrollTop: reach,
		}, {
			duration: 500,
			complete: function(){
				timer = setInterval(function(){
					itvlNum++;
					if( itvlNum >= 5 && $(cell).hasClass(theCls) ){
						clearInterval(timer);
						return;
					}
					$(cell).toggleClass(theCls);
				}, 300);
			}
		});
	};

	$submit.on('click', function(){
		$priceWrap.find('td').removeClass(theCls);

		var vals = {};
		var errors = "";
		$.each($selects, function(k, ele){
			var sidx = $(ele).prop('selectedIndex');
			var name = $(ele).attr("name");
			var $cOpt = $( $(ele).find('option').get(sidx) );
			var v = ( "conditions" === name && $cOpt.length ) ? $cOpt.html() : $(ele).val();
			var isEmpty = ( 0 === sidx && ( "--" === v || "" === v ) );
			if(isEmpty){
				var label = $(ele).parent().parent().children('th').html();
				errors += label + "を選択してください\n";
			}
			vals[name] = v;
		});

		if(errors){
			alert(errors);
			return;
		}

		var $reachWrap = {};
		var point = { 
			x: {
				s: 'thead th:not(.none)', 
				f: function(idx){ return ( $(this).html() === condition_val ) ? idx : null; }, 
			}, 
			y: {
				s: 'tbody th', 
				f: function(idx){ return ( $(this).html() === color_val ) ? idx : null }, 
			}, 
		};
		var reachAdjust = 8;

		var applyCellReach = true;


		var ct_id = "#ct-" + vals.ct;
		var clarity = vals.clarity;
		var cut = vals.cut;
		var color = vals.color;
		var reach_id = ct_id + "-" + clarity;

		$reachWrap = $(reach_id);

		point.x.s = 'thead th';
		point.x.f = function(idx){ return ( $(this).hasClass(cut) ) ? idx : null; };
		point.y.s = 'tbody td[class="color"]';
		point.y.f = function(idx){ return ( $(this).html() === color ) ? idx : null; };

		reachAdjust = 5;

		applyCellReach = false;


		if( !$reachWrap.length ) return;

		var x = $reachWrap.find(point.x.s).map(point.x.f).get(0);
		var y = $reachWrap.find(point.y.s).map(point.y.f).get(0);

		var cell = $reachWrap.find("tbody tr").eq(y).find("td").eq(x);

		reachScorllIfSp();

		applyCellReach = ( y > 0 && applyCellReach ) || false;

		var reach = ( applyCellReach ) ? $(cell).position().top : $reachWrap.position().top;
		reach = reach - $priceWrap.position().top;
		reach = $priceWrap.scrollTop() + reach - reachAdjust;

		reachScroll(reach, cell);

	});

});