(function(window, document, $, undefined) {
  "use strict";
    $(function() {

      // ==============================================================
      // Traffic Sources Week
      // ==============================================================
      new Chartist.Line(
        "#traffic-week", {
          labels: ["LUN", "MAR", "MIE", "JUE", "VIE", "SAB"],
          series: [
            [0, 2, 3.5, 0, 6, 1, 4],
            [0, 4, 0, 4, 0, 4, 0]
          ]
        }, {
          high: 8,
          low: 0,
          showArea: true,
          fullWidth: true,
          axisY: {
            onlyInteger: true,
            offset: 20,
            labelInterpolationFnc: function(value) {
              return value / 1 + "k";
            }
          }
        }
      );

      // ==============================================================
      // Traffic Sources Month
      // ==============================================================

      new Chartist.Line(
        "#traffic-month", {
          labels: ["0", "4", "8", "12", "16", "20", "24", "28", "31"],
          series: [
            [0, 2, 3.5, 4, 8, 3, 4, 6, 2, 6],
            [0, 6, 5.5, 3, 3, 11, 7, 4, 7, 9]
          ]
        }, {
          high: 15,
          low: 0,
          showArea: true,
          fullWidth: true,

          axisY: {
            onlyInteger: true,
            offset: 20,
            labelInterpolationFnc: function(value) {
              return value / 1 + "k";
            }
          }
        }
      );

      // ==============================================================
      // Traffic Sources Year
      // ==============================================================

      new Chartist.Line(
        "#traffic-year", {
          labels: [
            "ENE",
            "FEB",
            "MAR",
            "ABR",
            "MAY",
            "JUN",
            "JUL",
            "AGO",
            "SEPT",
            "OCT",
            "NOV",
            "DIC"
          ],
          series: [
            [0, 2, 3.5, 4, 8, 3, 4, 6, 2, 6, 4.7, 3, 5],
            [0, 6, 5.5, 3, 3, 11, 7, 4, 7, 9, 10, 12, 13]
          ]
        }, {
          high: 15,
          low: 0,
          showArea: true,
          fullWidth: true,

          axisY: {
            onlyInteger: true,
            offset: 20,
            labelInterpolationFnc: function(value) {
              return value / 1 + "k";
            }
          }
        }
      );
      // ==============================================================
      // Trigger init of charts inside bootstrap tabs
      // ==============================================================

      $('a[data-toggle="pill"]').on("shown.bs.tab", function(event) {
				$(".ct-chart").each(function(i, e) {
					setTimeout(function() {
						e.__chartist__.update();
					}, 50);
				});
	});
    });

})(window, document, window.jQuery);
