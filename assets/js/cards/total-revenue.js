// -----------------------------------------------------------------------------
// Title: Total Revenue
// ID: #total-revenue
// Location: dashboard.financials.html
// Dependency File(s):
// assets/vendor/css/c3.css
// assets/vendor/c3/c3.min.js
// assets/vendor/d3/dist/c3.min.js
// Docs: http://c3js.org/
// -----------------------------------------------------------------------------

(function(window, document, $, undefined) {
	  "use strict";
	$(function() {
		var chart = c3.generate({
			bindto: "#total-revenue",
			data: {
				columns: [
					["Cobrado", 50],
					["Por Cobrar", 50]
				],

				type: "donut",
				onclick: function(d, i) {
					console.log("onclick", d, i);
				},
				onmouseover: function(d, i) {
					console.log("onmouseover", d, i);
				},
				onmouseout: function(d, i) {
					console.log("onmouseout", d, i);
				}
			},
			donut: {
				label: {
					show: false
				},
				title: "Cartera Total",
				width: 30
			},

			legend: {
				hide: true
			},
			color: {
				pattern: [
					QuantumPro.APP_COLORS.info,
					QuantumPro.APP_COLORS.accent
				]
			}
		});

	});
})(window, document, window.jQuery);
