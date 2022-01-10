"use strict";
var KTDatatablesAdvancedFooterCalllback = function() {

	var init = function() {
		var table = $('#kt_datatable');

		// begin first table
		table.DataTable({
			responsive: true,
			pageLength: 10,
			lengthMenu: [[2, 5, 10, 25, -1], [2, 5, 10, 25, 'All']],
			footerCallback: function(row, data, start, end, display) {

				var column = 6;
				var api = this.api(), data;

			},

			columnDefs: [
				 {
					targets: [2,3],
					// width: '75px',
					render: function(data, type, full, meta) {
						var status = {
							1: {'title': 'در حال انجام', 'class': 'label-light-success'},
							2: {'title': 'تحویل داده شده', 'class': ' label-light-danger'},
							3: {'title': 'لغو شده', 'class': ' label-light-primary'},
							4: {'title': 'موفق', 'class': ' label-light-success'},
							5: {'title': 'اطلاعات', 'class': ' label-light-info'},
							6: {'title': 'خطار', 'class': ' label-light-danger'},
							7: {'title': 'هشدار', 'class': ' label-light-warning'},
						};
						if (typeof status[data] === 'undefined') {
							return data;
						}
						return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
					},
				},








            ],




		});
	};

	return {

		//main function to initiate the module
		init: function() {
			init();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesAdvancedFooterCalllback.init();
});
