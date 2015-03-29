$.fn.PinterestishGrid = function() {
	/* Seletores de DOM reutilizáveis */
	var wrapper = $(this);
	var caixas = wrapper.children();

	/* Cálculo de variáveis */
	var num_max_caixas = Math.floor(wrapper.width() / caixas.outerWidth(true));
	var margem_wrapper = (wrapper.width() - (num_max_caixas * caixas.outerWidth(true))) / 2;
	var margem_caixas = ((wrapper.width() / num_max_caixas) - caixas.width()) / 2;

	/* Posicionamento das caixas */
	caixas.each(function(index, el) {
		if (index >= num_max_caixas) {
			var divisor = Math.floor(index / num_max_caixas);
			var index = index - (num_max_caixas * divisor);
		}

		var pos_top = 0;
		$("[data-index='" + index + "']").each(function(index, el) {
			pos_top += $(this).outerHeight(true);
		});
		var pos_left = ($(this).outerWidth(true) * index) + margem_wrapper;

		$(this).attr('data-index', index);

		$(this).css({
			left: pos_left,
			top: pos_top,
			position: 'absolute',
			float: 'none'
		});
	});

	/* Estilização pós-reflow */
	wrapper.css('position', 'relative');;
}