 $(document).ready(function() {
 jQuery(function($){


	$(document).on('ready ajaxSuccess ', function() {
	    $('select:not(mondernized)').each(function(i, e) {
	        if (!($(e).data('convert') == 'no')) {


	            //get some initial data...
	            var xSelect = $(e).attr('id');
	            var xLabel = $("#" + xSelect + " option:selected").text();
	            var xClass = $(e).data('class');



	            $(e).hide().addClass('mondernized')
	            $(e).parent().append('<div class="btn-group" id="select-group-' + i + '" /></div>');
	            var select = $('#select-group-' + i);


	            select.html('<a class="btn dropdown-toggle ' + xClass + '" data-toggle="dropdown" href="javascript:;">' + xLabel + ' <span class="caret"></span></a><ul class="dropdown-menu"></ul><input type="hidden" value="' + $(e).val() + '" name="' + $(e).attr('name') + '" id="' + $(e).attr('id') + '" class="' + $(e).attr('class') + '" />');
	            $(e).find('option').each(function(o, q) {
	                select.find('.dropdown-menu').append('<li><a href="javascript:;" data-title="' + $(q).text() + '" data-value="' + $(q).attr('value') + '">' + $(q).text() + '</a></li>');
	                if ($(q).attr('selected')) select.find('.dropdown-menu li:eq(' + o + ')').click();



	            });
	            select.find('.dropdown-menu a').click(function() {
	                select.find('input[type=hidden]').live().val($(this).data('value')).change();
	                select.find('.btn:eq(0)').html($(this).text() + ' <span class="caret"></span>');
	            });
	        }






	    });

	});
 });
 });