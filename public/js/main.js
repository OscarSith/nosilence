$('#modal-new-slider form').on('submit', function() {
	$(this).find(':button:last').text('Subiendo imagen...').prop('disabled', true);
});
$('#content-images').on('click', '.btn-change-status', function (e) {
	if (confirm('Seguro de cambiar el estado?')) {
		var $this = $(this),
			id = $this.closest('.col-sm-4').data('id'),
			$form = $('#frmChangePictureStatus');

		$this.button('loading');
		$this.prop('disabled', true);
		$.ajax({
			url: $form.attr('action').replace(':ID', id),
			type: 'post',
			dataType: 'json',
			data: $form.serialize() + '&estado=' + $this.data('status')
		}).done(function(rec) {
			if (rec.estado == 'A') {
				$this.removeClass('btn-success').addClass('btn-warning').data('status', 'E').text('Inhabilitar');
			} else {
				$this.addClass('btn-success').removeClass('btn-warning').data('status', 'A').text('Habilitar');
			}
		}).always(function() {
			$this.prop('disabled', false).removeClass('disabled');
		});
	}
});
$('#content-images').on('click', '.btn-delete', function() {
	if (confirm('Seguro de eliminar esta Imagen?')) {
		var $this = $(this),
			$form = $('#frmDeletePicture');

		$this.button('loading');
		$this.prop('disabled', true);
		$.ajax({
			url: $form.attr('action').replace(':ID', $this.closest('.col-sm-4').data('id')),
			data: $form.serialize() + '&picture=' + $this.data('file'),
			type: 'POST',
			dataType: 'json'
		}).done(function(rec) {
			$this.closest('.col-sm-4').remove();
		}).always(function() {
			$this.prop('disabled', false).removeClass('disabled');
		});
	}
});

$('#btn-change-order').on('click', function() {
	var $this = $(this),
		$textfields = $('div.content-textfield'),
		$btnSave = $('#save-order-picture');

	if ($this.hasClass('active')) {
		$this.button('reset');
		$textfields.addClass('hidden');
		$textfields.closest('.caption').prev().css('opacity', '1').end().find(':button').prop('disabled', false);
		$btnSave.addClass('hidden');
	} else {
		$this.button('cancel');
		$textfields.removeClass('hidden');
		$textfields.closest('.caption').prev().css('opacity', '.3').end().find(':button').prop('disabled', true);
		$btnSave.removeClass('hidden');
	}
});

$('#save-order-picture').on('click', function() {
	var order = [],
		$this = $(this),
		$form = $('#frChangeOrder'),
		fields = $form.serializeArray(),
		data = {};

	$('#content-images').find(':input:not(:button)').each(function(id, el) {
		order.push({order: $(el).val(), id: $(el).closest('.thumbnail').parent().data('id')})
	});

	$this.button('loading').prop('disabled', true);
	data[fields[0].name] = fields[0].value;
	data.order = order;
	$.ajax({
		url: $form.attr('action'),
		data: data,
		type: 'post',
	}).done(function() {
		location.reload();
	}).fail(function() {
		$this.button('reset').prop('disabled', false);
	});
});