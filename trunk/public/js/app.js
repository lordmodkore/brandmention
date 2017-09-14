/**
 * Calendar app page
 */
(function ($) {
  'use strict';

  var colorClass;

  function externalEvents(elm) {
    var eventObject = {
      title: $.trim(elm.text()),
      className: elm.data('class')
    };
    elm.data('eventObject', eventObject);
    elm.draggable({
      zIndex: 999,
      revert: true,
      revertDuration: 0
    });
  }

  $('.add-event').click(function (e) {
    var markup = $('<div class=\'external-event event-primary\' data-class=\'event-primary\'>New event</div>');
    $('.external-events').append(markup);
    externalEvents(markup);
    e.preventDefault();
    e.stopPropagation();
  });

  $('#external-events div.external-event').each(function () {
    externalEvents($(this));
  });

  $('.fullcalendar').fullCalendar({
    height: $(window).height() - $('.header').height() - $('.content-footer').height() - 25,
    editable: true,
    defaultView: 'month',
    header: {
      left: 'today prev,next',
      right: 'title month,agendaWeek,agendaDay'
    },
    buttonIcons: {
      prev: ' fa fa-caret-left',
      next: ' fa fa-caret-right',
    },
    droppable: true,
    axisFormat: 'h:mm',
    columnFormat: {
      month: 'dddd',
      week: 'ddd M/D',
      day: 'dddd M/d',
      agendaDay: 'dddd D'
    },
    allDaySlot: false,
    drop: function (date) {
      var originalEventObject = $(this).data('eventObject');
      var copiedEventObject = $.extend({}, originalEventObject);
      copiedEventObject.start = date;
      $('.fullcalendar').fullCalendar('renderEvent', copiedEventObject, true);
      if ($('#drop-remove').is(':checked')) {
        $(this).remove();
      }
    },
    defaultDate: moment().format('YYYY-MM-DD'),
    viewRender: function (view, element) {
      if (!$('.fc-toolbar .fc-left .fc-t-events').length) {
        $('.fc-toolbar .fc-left').prepend($('<button type="button" class="fc-button fc-state-default fc-corner-left fc-corner-right fc-t-events"><i class="icon-list"></i></button>').on('click', function () {
          $('.events-sidebar').toggleClass('hide');
        }));
      }
    },
    events: [{
      title: 'Go Shopping',
      start: moment().format('YYYY-MM-DD'),
      className: 'event-success'
    }, {
      title: 'Launch Product',
      start: moment(moment().format('YYYY-MM-DD')).subtract(1, 'day').format('YYYY-MM-DD'),
      className: 'event-primary'
    }, {
      title: 'Meeting',
      start: moment(moment().format('YYYY-MM-DD')).subtract(6, 'day').format('YYYY-MM-DD'),
      end: moment(moment().format('YYYY-MM-DD')).subtract(3, 'day').format('YYYY-MM-DD'),
      className: 'event-info'
    }, {
      title: 'Lunch',
      start: moment(moment().format('YYYY-MM-DD')).add(4, 'day').format('YYYY-MM-DD'),
      className: 'event-warning'
    }, {
      title: 'Go to link',
      url: 'http://nyasha.me/',
      start: moment(moment().format('YYYY-MM-DD')).add(8, 'day').format('YYYY-MM-DD'),
      className: 'event-danger'
    }]
  });
})(jQuery);
/**
 * Products commerce page
 */
(function ($) {
  'use strict';

  var elem = document.querySelector('.tile-container');

  var iso = new Isotope(elem, {
    itemSelector: '.tile',
    masonry: {
      columnWidth: '.tile-sizer'
    },
    transitionDuration: '0.15s'
  });

  $('.tile-container').imagesLoaded().always(function () {}).progress(function (instance, image) {
    if (image.isLoaded) {
      iso.layout();
    }
  }).done(function () {
    iso.layout();
  });

  $(window).smartresize(function () {
    iso.layout();
  });

  $('[data-toggle=layout-small-menu]').on('click', function () {
    iso.layout();
  });

})(jQuery);
/**
 * Travel app page
 */
(function ($) {
  'use strict';

  var latitude = 35.784,
    longitude = -78.670,
    map_zoom = 6,
    is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1,
    marker_url = (is_internetExplorer11) ? 'images/cd-icon-location.png' : 'images/cd-icon-location.svg';

  var map_options = {
    scrollwheel: false,
    center: new google.maps.LatLng(latitude, longitude),
    zoom: map_zoom,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('google-container'), map_options);

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(latitude, longitude),
    map: map,
    visible: true,
    icon: marker_url,
  });

  var elem = document.querySelector('.tile-container');

  var iso = new Isotope(elem, {
    itemSelector: '.tile',
    masonry: {
      columnWidth: '.tile-sizer'
    },
    transitionDuration: '0.15s'
  });

  $('.tile-container').imagesLoaded().always(function () {}).progress(function (instance, image) {
    if (image.isLoaded) {
      iso.layout();
    }
  }).done(function () {
    iso.layout();
  });

  $(window).smartresize(function () {
    iso.layout();
  });
})(jQuery);
/**
 * C3 charts page
 */
(function ($) {
  'use strict';
  var chart = c3.generate({
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 50, 20, 10, 40, 15, 25]
      ]
    }
  });

  setTimeout(function () {
    chart.load({
      columns: [
        ['data1', 230, 190, 300, 500, 300, 400]
      ]
    });
  }, 1000);

  setTimeout(function () {
    chart.load({
      columns: [
        ['data3', 130, 150, 200, 300, 200, 100]
      ]
    });
  }, 1500);

  setTimeout(function () {
    chart.unload({
      ids: 'data1'
    });
  }, 2000);

  var chart2 = c3.generate({
    bindto: '#chart2',
    data: {
      columns: [
        ['data1', 30, 200, 100, 400, 150, 250],
        ['data2', 130, 100, 140, 200, 150, 50]
      ],
      type: 'bar'
    },
    bar: {
      width: {
        ratio: 0.5
      }
    }
  });
})(jQuery);
/**
 * ChartJS chart page
 */
(function ($) {
  'use strict';

  var helpers = Chart.helpers;

  // Define global settings
  Chart.defaults.global.responsive = true;
  Chart.defaults.global.scaleFontFamily = $.staticApp.font;
  Chart.defaults.global.scaleFontSize = 10;
  Chart.defaults.global.tooltipFillColor = $.staticApp.primary;
  Chart.defaults.global.tooltipFontFamily = $.staticApp.font;
  Chart.defaults.global.tooltipFontSize = 12;
  Chart.defaults.global.tooltipTitleFontFamily = $.staticApp.font;
  Chart.defaults.global.tooltipTitleFontSize = 13;
  Chart.defaults.global.tooltipTitleFontStyle = '700';
  Chart.defaults.global.tooltipCornerRadius = 0;

  // Polar chart
  var polarChartData = [{
    value: Math.random(),
    color: $.staticApp.danger
  }, {
    value: Math.random(),
    color: $.staticApp.info
  }, {
    value: Math.random(),
    color: $.staticApp.warning
  }, {
    value: Math.random(),
    color: $.staticApp.bodyBg
  }, {
    value: Math.random(),
    color: $.staticApp.dark
  }, {
    value: Math.random(),
    color: $.staticApp.primary
  }];
  var polar = $('.polar').get(0).getContext('2d');
  var myPolarArea = new Chart(polar).PolarArea(polarChartData, {
    segmentShowStroke: false,
    scaleBackdropColor: 'rgba(255,255,255,1)',
    scaleShowLine: false,
  });

  //Radar chart
  var radarChartData = {
    labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Partying', 'Running'],
    datasets: [{
      fillColor: 'rgba(220,220,220,1)',
      strokeColor: 'rgba(220,220,220,1)',
      pointColor: 'rgba(220,220,220,1)',
      pointStrokeColor: '#fff',
      data: [65, 59, 90, 81, 56, 55, 40]
    }, {
      fillColor: 'rgba(151,187,205,1)',
      strokeColor: 'rgba(151,187,205,1)',
      pointColor: 'rgba(151,187,205,1)',
      pointStrokeColor: '#fff',
      data: [28, 48, 40, 19, 96, 27, 100]
    }]
  };
  var radar = $('.radar').get(0).getContext('2d');
  var myRadar = new Chart(radar).Radar(radarChartData, {
    pointDotRadius: 0,
    pointLabelFontFamily: '\'Roboto\'',
    pointLabelFontSize: 10
  });

  // Doughnut chart
  var doughnutData = [{
    value: 280,
    color: $.staticApp.danger,
    highlight: LightenDarkenColor($.staticApp.danger),
    label: 'Danger'
  }, {
    value: 70,
    color: $.staticApp.success,
    highlight: LightenDarkenColor($.staticApp.success),
    label: 'Success'
  }, {
    value: 100,
    color: $.staticApp.warning,
    highlight: LightenDarkenColor($.staticApp.warning),
    label: 'Warning'
  }, {
    value: 40,
    color: $.staticApp.bodyBg,
    highlight: LightenDarkenColor($.staticApp.bodyBg),
    label: 'Body'
  }, {
    value: 120,
    color: $.staticApp.dark,
    highlight: LightenDarkenColor($.staticApp.dark),
    label: 'Dark'
  }];
  var donut = $('.doughnut').get(0).getContext('2d');
  var myDoughnut = new Chart(donut).Doughnut(doughnutData, {
    percentageInnerCutout: 60,
  });
  var legendHolder = document.createElement('div');
  legendHolder.innerHTML = myDoughnut.generateLegend();
  // Include a html legend template after the module doughnut itself
  helpers.each(legendHolder.firstChild.childNodes, function (legendNode, index) {
    helpers.addEvent(legendNode, 'mouseover', function () {
      var activeSegment = myDoughnut.segments[index];
      activeSegment.save();
      activeSegment.fillColor = activeSegment.highlightColor;
      myDoughnut.showTooltip([activeSegment]);
      activeSegment.restore();
    });
  });
  helpers.addEvent(legendHolder.firstChild, 'mouseout', function () {
    myDoughnut.draw();
  });
  $('.doughnut').parent().append(legendHolder.firstChild);

  // Bar graph
  var getRandomArbitrary = function () {
    return Math.round(Math.random() * 100);
  };
  var barChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      fillColor: 'rgba(220,220,220,1)',
      strokeColor: 'rgba(220,220,220,1)',
      highlightFill: 'rgba(220,220,220,1)',
      highlightStroke: 'rgba(220,220,220,1)',
      data: [getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary()]
    }, {
      fillColor: 'rgba(151,187,205,1)',
      strokeColor: 'rgba(151,187,205,1)',
      highlightFill: 'rgba(151,187,205,1)',
      highlightStroke: 'rgba(151,187,205,1)',
      data: [getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary()]
    }]
  };
  var bar = $('.bar').get(0).getContext('2d');
  var myBar = new Chart(bar).Bar(barChartData, {
    scaleShowGridLines: false,
    barShowStroke: false
  });

  // Line chart
  var lineChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
      label: 'My First dataset',
      fillColor: 'rgba(220,220,220,0.2)',
      strokeColor: 'rgba(220,220,220,1)',
      pointColor: 'rgba(220,220,220,1)',
      pointStrokeColor: '#fff',
      pointHighlightFill: '#fff',
      pointHighlightStroke: 'rgba(220,220,220,1)',
      data: [getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary()]
    }, {
      label: 'My Second dataset',
      fillColor: 'rgba(151,187,205,0.2)',
      strokeColor: 'rgba(151,187,205,1)',
      pointColor: 'rgba(151,187,205,1)',
      pointStrokeColor: '#fff',
      pointHighlightFill: '#fff',
      pointHighlightStroke: 'rgba(151,187,205,1)',
      data: [getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary(), getRandomArbitrary()]
    }]
  };
  var line = $('.line').get(0).getContext('2d');
  var myLine = new Chart(line).Line(lineChartData, {
    scaleShowGridLines: false,
    bezierCurve: false,
    pointDotRadius: 2,
    datasetStrokeWidth: 1,
  });

  // Pie chart
  var pieData = [{
    value: 300,
    color: $.staticApp.danger,
    highlight: LightenDarkenColor($.staticApp.danger, 20),
    label: 'Danger'
  }, {
    value: 50,
    color: $.staticApp.success,
    highlight: LightenDarkenColor($.staticApp.success, 20),
    label: 'Success'
  }, {
    value: 100,
    color: $.staticApp.warning,
    highlight: LightenDarkenColor($.staticApp.warning, 20),
    label: 'Warning'
  }, {
    value: 40,
    color: $.staticApp.bodyBg,
    highlight: LightenDarkenColor($.staticApp.bodyBg, 20),
    label: 'Body'
  }, {
    value: 120,
    color: $.staticApp.dark,
    highlight: LightenDarkenColor($.staticApp.dark, 20),
    label: 'Dark'
  }];
  var pie = $('.pie').get(0).getContext('2d');
  var myPie = new Chart(pie).Pie(pieData, {
    segmentShowStroke: false
  });
})(jQuery);
/**
 * Easypie chart page
 */
(function ($) {
  'use strict';

  $('.bounce').easyPieChart({
    size: 180,
    lineWidth: 8,
    barColor: 'rgba(0,0,0,.1)',
    trackColor: 'rgba(0,0,0,.1)',
    lineCap: 'butt',
    easing: 'easeOutBounce',
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });

  $('.visitor').easyPieChart({
    size: 180,
    lineWidth: 15,
    barColor: 'rgba(0,0,0,.1)',
    trackColor: false,
    lineCap: 'round',
    easing: 'easeOutBounce',
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });

  $('.newvisitor').easyPieChart({
    size: 180,
    lineWidth: 15,
    barColor: 'rgba(0,0,0,.1)',
    trackColor: 'rgba(0,0,0,.1)',
    lineCap: 'butt',
    easing: 'easeOutBounce',
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });

  $('.signup').easyPieChart({
    size: 180,
    lineWidth: 8,
    barColor: 'rgba(0,0,0,.1)',
    trackColor: 'rgba(0,0,0,.1)',
    lineCap: 'butt',
    easing: 'easeOutBounce',
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });

  $('.downtime').easyPieChart({
    size: 180,
    lineWidth: 8,
    barColor: 'rgba(0,0,0,.1)',
    trackColor: 'rgba(0,0,0,.1)',
    lineCap: 'round',
    easing: 'easeOutBounce',
    scaleColor: false,
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });

  $('.purge').easyPieChart({
    size: 180,
    lineWidth: 2,
    barColor: 'rgba(0,0,0,.1)',
    trackColor: 'rgba(0,0,0,.1)',
    lineCap: 'round',
    easing: 'easeOutBounce',
    scaleColor: false,
    onStep: function (from, to, percent) {
      $(this.el).find('.percent').text(Math.round(percent));
    }
  });

  $('.piechart').each(function () {
    var canvas = $(this).find('canvas');
    $(this).css({
      'width': canvas.width(),
      'height': canvas.height()
    });
  });
})(jQuery);
/**
 * Flot chart page
 */
(function ($) {
  'use strict';

  var data = [],
    totalPoints = 300,
    updateInterval = 300,
    previousPoint = null,
    plot;

  // Define data points
  var browserData = [{
    label: 'IE',
    data: 15,
    color: $.staticApp.danger
  }, {
    label: 'Safari',
    data: 14,
    color: $.staticApp.info
  }, {
    label: 'Chrome',
    data: 34,
    color: $.staticApp.warning
  }, {
    label: 'Opera',
    data: 13,
    color: $.staticApp.bodyBg
  }, {
    label: 'Firefox',
    data: 24,
    color: $.staticApp.dark
  }];

  var getRandomArbitrary = function () {
    return Math.round(Math.random() * 100);
  };

  var visits = [
    [0, getRandomArbitrary()],
    [1, getRandomArbitrary()],
    [2, getRandomArbitrary()],
    [3, getRandomArbitrary()],
    [4, getRandomArbitrary()],
    [5, getRandomArbitrary()],
    [6, getRandomArbitrary()],
    [7, getRandomArbitrary()],
    [8, getRandomArbitrary()]
  ];
  var visitors = [
    [0, getRandomArbitrary()],
    [1, getRandomArbitrary()],
    [2, getRandomArbitrary()],
    [3, getRandomArbitrary()],
    [4, getRandomArbitrary()],
    [5, getRandomArbitrary()],
    [6, getRandomArbitrary()],
    [7, getRandomArbitrary()],
    [8, getRandomArbitrary()]
  ];

  var plotdata = [{
    data: visits,
    color: $.staticApp.primary
  }, {
    data: visitors,
    color: $.staticApp.info
  }];

  var barData = [{
    data: [
      [1391761856000, 80],
      [1394181056000, 40],
      [1396859456000, 20],
      [1399451456000, 20],
      [1402129856000, 50]
    ],
    bars: {
      show: true,
      barWidth: 7 * 24 * 60 * 60 * 1000,
      fill: true,
      lineWidth: 0,
      order: 1,
      fillColor: $.staticApp.info
    }
  }, {
    data: [
      [1391761856000, 50],
      [1394181056000, 30],
      [1396859456000, 10],
      [1399451456000, 70],
      [1402129856000, 30]
    ],
    bars: {
      show: true,
      barWidth: 7 * 24 * 60 * 60 * 1000,
      fill: true,
      lineWidth: 0,
      order: 2,
      fillColor: $.staticApp.danger
    }
  }, {
    data: [
      [1391761856000, 30],
      [1394181056000, 60],
      [1396859456000, 40],
      [1399451456000, 40],
      [1402129856000, 40]
    ],
    bars: {
      show: true,
      barWidth: 7 * 24 * 60 * 60 * 1000,
      fill: true,
      lineWidth: 0,
      order: 3,
      fillColor: $.staticApp.success
    }
  }];

  function getRandomData() {
    if (data.length > 0) {
      data = data.slice(1);
    }
    // Do a random walk
    while (data.length < totalPoints) {
      var prev = data.length > 0 ? data[data.length - 1] : 50,
        y = prev + Math.random() * 10 - 5;
      if (y < 0) {
        y = 0;
      } else if (y > 100) {
        y = 100;
      }
      data.push(y);
    }
    // Zip the generated y values with the x values
    var res = [];
    for (var i = 0; i < data.length; ++i) {
      res.push([i, data[i]]);
    }
    return res;
  }

  function showTooltip(x, y, contents) {
    $('<div id=\'tooltip\'>' + contents + '</div>').css({
      top: y - 10,
      left: x + 20
    }).appendTo('body').fadeIn(200);
  }

  function update() {
    plot.setData([getRandomData()]);
    plot.draw();
    setTimeout(update, updateInterval);
  }

  // Pie chart
  $.plot($('.pie'), browserData, {
    series: {
      pie: {
        show: true,
        innerRadius: 0.5,
        stroke: {
          width: 0
        },
        label: {
          show: false,
        }
      }
    },
    legend: {
      show: true
    },
  });

  // Bar graph
  $.plot($('.bar'), barData, {
    grid: {
      hoverable: false,
      clickable: false,
      labelMargin: 8,
      color: $.staticApp.border,
      borderWidth: 0,
    },
    xaxis: {
      mode: 'time',
      timeformat: '%b',
      tickSize: [1, 'month'],
      monthNames: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
      tickLength: 0,
      axisLabel: 'Month',
      axisLabelUseCanvas: true,
      axisLabelFontSizePixels: 12,
      axisLabelFontFamily: 'Roboto',
      axisLabelPadding: 5
    }
  });

  // Realtime updating line chart
  plot = $.plot('.realtime', [getRandomData()], {
    colors: [$.staticApp.dark],
    lines: {
      lineWidth: 1,
    },
    grid: {
      color: $.staticApp.border,
      borderWidth: 0,
      hoverable: true
    },
    yaxis: {
      min: 0,
      max: 100
    }
  });

  // Line chart
  /*jshint -W030 */
  $('.line').length && $.plot($('.line'), plotdata, {
    series: {
      lines: {
        show: true,
        lineWidth: 0,
      },
      splines: {
        show: true,
        tension: 0.5,
        lineWidth: 1,
        fill: 0.2,
      },
      shadowSize: 0
    },
    grid: {
      color: $.staticApp.border,
      borderWidth: 1,
      hoverable: true,
    },
  });

  // Chart tooltip
  $('.chart, .chart-sm').bind('plothover', function (event, pos, item) {
    if (item) {
      if (previousPoint !== item.dataIndex) {
        previousPoint = item.dataIndex;
        $('#tooltip').remove();
        var x = item.datapoint[0],
          y = item.datapoint[1];
        showTooltip(item.pageX, item.pageY, y + ' at ' + x);
      }
    } else {
      $('#tooltip').remove();
      previousPoint = null;
    }
  });

  update(); // Update realtime chart
})(jQuery);
/**
 * Nvd3 chart page
 */
(function ($) {
  'use strict';

  // Line chart
  function sinAndCos() {
    var sin = [],
      sin2 = [],
      cos = [];
    for (var i = 0; i < 100; i++) {
      sin.push({
        x: i,
        y: Math.sin(i / 10)
      });
      sin2.push({
        x: i,
        y: Math.sin(i / 10) * 0.25 + 0.5
      });
      cos.push({
        x: i,
        y: 0.5 * Math.cos(i / 10)
      });
    }
    return [{
      values: sin,
      key: 'Sine Wave',
      color: $.staticApp.primary
    }, {
      values: cos,
      key: 'Cosine Wave',
      color: $.staticApp.danger
    }, {
      values: sin2,
      key: 'Another sine wave',
      color: $.staticApp.info
    }];
  }
  nv.addGraph(function () {
    var lineChart = nv.models.lineChart();
    var height = 300;
    lineChart.useInteractiveGuideline(true);
    lineChart.xAxis.tickFormat(d3.format(',r'));
    lineChart.yAxis.axisLabel('Voltage (v)').tickFormat(d3.format(',.2f'));
    d3.select('.line svg').attr('perserveAspectRatio', 'xMinYMid').datum(sinAndCos()).transition().duration(500).call(lineChart);
    nv.utils.windowResize(lineChart.update);
    return lineChart;
  });

  // Historical bar chart
  var historicalBarChart = [{
    key: 'Cumulative Return',
    values: [{
      'label': 'A Label',
      'value': -29.765957771107
    }, {
      'label': 'B Label',
      'value': 0
    }, {
      'label': 'C Label',
      'value': 32.807804682612
    }, {
      'label': 'D Label',
      'value': 196.45946739256
    }, {
      'label': 'E Label',
      'value': 0.19434030906893
    }, {
      'label': 'F Label',
      'value': -98.079782601442
    }, {
      'label': 'G Label',
      'value': -13.925743130903
    }, {
      'label': 'H Label',
      'value': -5.1387322875705
    }]
  }];
  nv.addGraph(function () {
    var barChart = nv.models.discreteBarChart().x(function (d) {
        return d.label;
      })
      .y(function (d) {
        return d.value;
      }).staggerLabels(true)
      .showValues(true)
      .duration(350);
    d3.select('.bar svg').datum(historicalBarChart).call(barChart);
    nv.utils.windowResize(barChart.update);
    return barChart;
  });

  // Scatter chart
  var i, j, scatterChart;
  nv.addGraph(function () {
    scatterChart = nv.models.scatterChart().showDistX(true)
      .showDistY(true).duration(350).color(d3.scale.category10().range());
    scatterChart.xAxis.tickFormat(d3.format('.02f'));
    scatterChart.yAxis.tickFormat(d3.format('.02f'));
    var myData = randomData(4, 40);
    d3.select('.scatter svg').datum(myData).call(scatterChart);
    nv.utils.windowResize(scatterChart.update);
    return scatterChart;
  });

  function randomData(groups, points) {
    var data = [],
      shapes = ['circle', 'cross', 'triangle-up', 'triangle-down', 'diamond', 'square'],
      random = d3.random.normal();
    for (i = 0; i < groups; i++) {
      data.push({
        key: 'Group ' + i,
        values: []
      });
      for (j = 0; j < points; j++) {
        data[i].values.push({
          x: random(),
          y: random(),
          size: Math.random(),
          shape: (Math.random() > 0.95) ? shapes[j % 6] : 'circle'
        });
      }
    }
    return data;
  }

  // Multibar chart
  var long_short_data = [{
    'key': 'Series 1',
    'color': $.staticApp.primary,
    'values': [{
      'label': 'Group A',
      'value': -1.8746444827653
    }, {
      'label': 'Group B',
      'value': -8.0961543492239
    }, {
      'label': 'Group C',
      'value': -0.57072943117674
    }, {
      'label': 'Group D',
      'value': -2.4174010336624
    }, {
      'label': 'Group E',
      'value': -0.72009071426284
    }, {
      'label': 'Group F',
      'value': -0.77154485523777
    }, {
      'label': 'Group G',
      'value': -0.90152097798131
    }, {
      'label': 'Group H',
      'value': -0.91445417330854
    }, {
      'label': 'Group I',
      'value': -0.055746319141851
    }]
  }, {
    'key': 'Series 2',
    'color': $.staticApp.info,
    'values': [{
      'label': 'Group A',
      'value': 25.307646510375
    }, {
      'label': 'Group B',
      'value': 16.756779544553
    }, {
      'label': 'Group C',
      'value': 18.451534877007
    }, {
      'label': 'Group D',
      'value': 8.6142352811805
    }, {
      'label': 'Group E',
      'value': 7.8082472075876
    }, {
      'label': 'Group F',
      'value': 5.259101026956
    }, {
      'label': 'Group G',
      'value': 0.30947953487127
    }, {
      'label': 'Group H',
      'value': 0
    }, {
      'label': 'Group I',
      'value': 0
    }]
  }];
  var multiChart;
  nv.addGraph(function () {
    multiChart = nv.models.multiBarHorizontalChart().x(function (d) {
        return d.label;
      }).y(function (d) {
        return d.value;
      }).margin({
        top: 30,
        right: 20,
        bottom: 50,
        left: 175
      }).showValues(true)
      .duration(350).showControls(true);
    multiChart.yAxis.tickFormat(d3.format(',.2f'));
    d3.select('.multi svg').datum(long_short_data).call(multiChart);
    nv.utils.windowResize(multiChart.update);
    return multiChart;
  });
})(jQuery);
/**
 * Rickshaw chart page
 */
(function ($) {
  'use strict';

  // Chart 1
  var data = [{
    x: -1893456000,
    y: 92228531
  }, {
    x: -1577923200,
    y: 106021568
  }, {
    x: -1262304000,
    y: 123202660
  }, {
    x: -946771200,
    y: 132165129
  }, {
    x: -631152000,
    y: 151325798
  }, {
    x: -315619200,
    y: 179323175
  }, {
    x: 0,
    y: 203211926
  }, {
    x: 315532800,
    y: 226545805
  }, {
    x: 631152000,
    y: 248709873
  }, {
    x: 946684800,
    y: 281421906
  }, {
    x: 1262304000,
    y: 308745538
  }];
  var graph = new Rickshaw.Graph({
    element: document.querySelector('#chart'),
    series: [{
      color: $.staticApp.primary,
      data: data
    }]
  });
  var axes = new Rickshaw.Graph.Axis.Time({
    graph: graph
  });
  graph.render();

  // Chart2
  var graph2 = new Rickshaw.Graph({
    element: document.querySelector('#chart2'),
    series: [{
      data: [{
        x: -1893456000,
        y: 92228531
      }, {
        x: -1577923200,
        y: 106021568
      }, {
        x: -1262304000,
        y: 123202660
      }, {
        x: -946771200,
        y: 132165129
      }, {
        x: -631152000,
        y: 151325798
      }, {
        x: -315619200,
        y: 179323175
      }, {
        x: 0,
        y: 203211926
      }, {
        x: 315532800,
        y: 226545805
      }, {
        x: 631152000,
        y: 248709873
      }, {
        x: 946684800,
        y: 281421906
      }, {
        x: 1262304000,
        y: 308745538
      }],
      color: $.staticApp.danger
    }]
  });
  var x_axis = new Rickshaw.Graph.Axis.Time({
    graph: graph2
  });
  var y_axis = new Rickshaw.Graph.Axis.Y({
    graph: graph2,
    orientation: 'left',
    tickFormat: Rickshaw.Fixtures.Number.formatKMBT,
    element: document.getElementById('y_axis'),
  });
  graph2.render();

  $(window).smartresize(function () {
    graph.configure({
      width: $('#chart').parent().width()
    });
    graph.render();
    graph2.configure({
      width: $('#chart2').parent().width() - 40
    });
    graph2.render();
  });
})(jQuery);
$.staticApp = {
  name: 'Reactor',
  author: 'Nyasha',
  version: '1.0.0',
  year: (new Date()).getFullYear(),
  font: 'Arial, "Helvetica Neue", Helvetica, sans-serif',
  'default': $('<div>').appendTo('body').addClass('bg-default').css('background-color'),
  primary: $('<div>').appendTo('body').addClass('bg-primary').css('background-color'),
  success: $('<div>').appendTo('body').addClass('bg-success').css('background-color'),
  warning: $('<div>').appendTo('body').addClass('bg-warning').css('background-color'),
  danger: $('<div>').appendTo('body').addClass('bg-danger').css('background-color'),
  info: $('<div>').appendTo('body').addClass('bg-info').css('background-color'),
  white: $('<div>').appendTo('body').addClass('bg-white').css('background-color'),
  dark: $('<div>').appendTo('body').addClass('bg-dark').css('background-color'),
  border: '#e4e4e4',
  bodyBg: $('body').css('background-color'),
  textColor: '#6B6B6B'
};
/**
 * Form masks demo
 */
(function ($) {
  'use strict';

  $.mask.definitions['~'] = '[+-]';
  $('#date').mask('99/99/9999');
  $('#phone').mask('(999) 999-9999');
  $('#phoneExt').mask('(999) 999-9999? x99999');
  $('#iphone').mask('+33 999 999 999');
  $('#tin').mask('99-9999999');
  $('#ssn').mask('999-99-9999');
  $('#product').mask('a*-999-a999', {
    placeholder: ' '
  });
  $('#eyescript').mask('~9.99 ~9.99 999');
  $('#po').mask('PO: aaa-999-***');
  $('#pct').mask('99%');
  $('#phoneAutoclearFalse').mask('(999) 999-9999', {
    autoclear: false
  });
  $('#phoneExtAutoclearFalse').mask('(999) 999-9999? x99999', {
    autoclear: false
  });
  $('input').blur(function () {
    $('#info').html('Unmasked value: ' + $(this).mask());
  }).dblclick(function () {
    $(this).unmask();
  });
})(jQuery);
/**
 * Form plugins demo
 */
(function ($) {
  'use strict';

  // Color picker
  $('.color-picker').colorpicker();
  $('.color-picker2').colorpicker({
    horizontal: true
  });

  // Timepicker
  $('.time-picker').timepicker();

  // Clockpicker
  $('.clockpicker').clockpicker({
    donetext: 'Done'
  });

  // Input tags
  $('#tags').tagsInput({
    width: 'auto'
  });

  // Chosen plugin
  $('.chosen').chosen({
    width: '100%'
  });
  $('.chosen-select').chosen({
    disable_search_threshold: 10,
    width: '100%'
  });

  // Checkbo plugin
  $('.checkbo').checkBo();

  // Telephone input plugin
  $('.telephone-input').intlTelInput();

  // Touchspin plugin
  $('.spinner1').TouchSpin({
    initval: 0,
    buttondown_class: 'btn btn-primary',
    buttonup_class: 'btn btn-primary'
  });
  $('.spinner2').TouchSpin({
    initval: 0,
    buttondown_class: 'btn btn-default',
    buttonup_class: 'btn btn-default'
  });

  // Daterange picker
  $('.drp').daterangepicker({
    format: 'YYYY-MM-DD',
    startDate: '2015-01-01',
    endDate: '2015-12-31'
  });

  // Multiselect plugin
  $('#pre-selected-options').multiSelect();
  $('#optgroup').multiSelect({
    selectableOptgroup: true
  });

  // Maxlength plugin
  $('#maxlength').maxlength({
    threshold: 20
  });
  $('#maxlengthConf').maxlength({
    alwaysShow: true,
    threshold: 10,
    warningClass: 'label label-info',
    limitReachedClass: 'label label-warning',
    placement: 'top',
    preText: 'used ',
    separator: ' of ',
    postText: ' chars.'
  });

  // Labelauty plugin
  $('.to-labelauty').labelauty({
    minimum_width: '155px',
    class: 'labelauty btn-block'
  });
  $('.to-labelauty-icon').labelauty({
    label: false
  });

  //Twitter typeahead plugin
  var statesList = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'];
  var states = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    // `states` is an array of state names defined in "The Basics"
    local: statesList
  });
  var bestPictures = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: '../data/post_1960.json',
    remote: {
      url: '../data/films/queries/%QUERY.json',
      wildcard: '%QUERY'
    }
  });
  $('.typeahead-states').typeahead({
    hint: true,
    highlight: true,
    minLength: 1
  }, {
    name: 'states',
    source: states
  });
  $('.typeahead-oscars').typeahead(null, {
    name: 'best-pictures',
    display: 'value',
    source: bestPictures
  });

  // Select2 plugin
  $('.select2').select2();

  // Selectize plugin
  $('#input-tags').selectize({
    delimiter: ',',
    persist: false,
    create: function (input) {
      return {
        value: input,
        text: input
      };
    }
  });
  $('#select-beast').selectize({
    create: true,
    sortField: 'text'
  });
})(jQuery);
/**
 * Form fileupload demo
 */
(function ($) {
  'use strict';

  // Initialize the jQuery File Upload widget:
  $('#fileupload').fileupload({
    // Uncomment the following to send cross-domain cookies:
    //xhrFields: {withCredentials: true},
    url: 'server/php/'
  });

  // Enable iframe cross-domain access via redirect option:
  $('#fileupload').fileupload('option', 'redirect', window.location.href.replace(/\/[^\/]*$/, '/cors/result.html?%s'));
  if (window.location.hostname === 'blueimp.github.io') {
    // Demo settings:
    $('#fileupload').fileupload('option', {
      url: '//jquery-file-upload.appspot.com/',
      disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
      maxFileSize: 999000,
      acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
    });

    if ($.support.cors) {
      $.ajax({
        url: '//jquery-file-upload.appspot.com/',
        type: 'HEAD'
      }).fail(function () {
        $('<div class="alert alert-danger"/>').text('Upload server currently unavailable - ' + new Date()).appendTo('#fileupload');
      });
    }
  } else {
    $('#fileupload').addClass('fileupload-processing');
    $.ajax({
      // Uncomment the following to send cross-domain cookies:
      //xhrFields: {withCredentials: true},
      url: $('#fileupload').fileupload('option', 'url'),
      dataType: 'json',
      context: $('#fileupload')[0]
    }).always(function () {
      $(this).removeClass('fileupload-processing');
    }).done(function (result) {
      $(this).fileupload('option', 'done').call(this, $.Event('done'), {
        result: result
      });
    });
  }
})(jQuery);
/**
 * Form wizard demo
 */
(function ($) {
  'use strict';

  // Credit card form
  $('#wizardForm').card({
    container: '.credit-card'
  });

  // Checkbo plugin
  $('.checkbo').checkBo();

  // Jquery validator
  var $validator = $('#wizardForm').validate({
    rules: {
      emailfield: {
        required: true,
        email: true,
        minlength: 3
      },
      namefield: {
        required: true,
        minlength: 3
      },
      passwordfield: {
        required: true,
        minlength: 6
      },
      cpasswordfield: {
        required: true,
        minlength: 6,
        equalTo: '#passwordfield'
      },
      description: {
        required: true
      },
      number: {
        required: true
      },
      name: {
        required: true
      },
      expiry: {
        required: true
      },
      cvc: {
        required: true
      }
    }
  });

  function checkValidation() {
    var $valid = $('#wizardForm').valid();
    if (!$valid) {
      $validator.focusInvalid();
      return false;
    }
  }

  // Twitter bootstrap wizard
  $('#rootwizard').bootstrapWizard({
    tabClass: '',
    'nextSelector': '.button-next',
    'previousSelector': '.button-previous',
    onNext: checkValidation,
    onLast: checkValidation,
    onTabClick: checkValidation
  });
})(jQuery);
/**
 * Form WYSIWYG demo
 */
(function ($) {
  'use strict';

  // Summernote
  $('.summernote').summernote();

  // Bootstrap
  $('.bootstrap-wysiwyg').wysihtml5({
    toolbar: {
      fa: true
    }
  });
})(jQuery);
(function ($) {
  'use strict';

  $.extend(true, $.fn.dataTable.defaults, {
    'sDom': '<\'row\'<\'col-sm-6\'l <\'toolbar\'>><\'col-sm-6\'f>r><\'table-responsive\'t><\'datatable-bottom\'<\'pull-left\'i><\'pull-right\'p>>',
    'sPaginationType': 'bootstrap',
    'oLanguage': {
      'sSearch': '',
      'sSearchPlaceholder': 'Search'
    },
  });

  /* Default class modification */
  $.extend($.fn.dataTableExt.oStdClasses, {
    'sWrapper': 'dataTables_wrapper form-inline',
    'sFilterInput': 'form-control',
    'sLengthSelect': 'form-control',
  });

  /* API method to get paging information */
  $.fn.dataTableExt.oApi.fnPagingInfo = function (oSettings) {
    return {
      'iStart': oSettings._iDisplayStart,
      'iEnd': oSettings.fnDisplayEnd(),
      'iLength': oSettings._iDisplayLength,
      'iTotal': oSettings.fnRecordsTotal(),
      'iFilteredTotal': oSettings.fnRecordsDisplay(),
      'iPage': oSettings._iDisplayLength === -1 ?
        0 : Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
      'iTotalPages': oSettings._iDisplayLength === -1 ?
        0 : Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
    };
  };

  /* Bootstrap style pagination control */
  $.extend($.fn.dataTableExt.oPagination, {
    'bootstrap': {
      'fnInit': function (oSettings, nPaging, fnDraw) {
        var oLang = oSettings.oLanguage.oPaginate;
        var fnClickHandler = function (e) {
          e.preventDefault();
          if (oSettings.oApi._fnPageChange(oSettings, e.data.action)) {
            fnDraw(oSettings);
          }
        };

        $(nPaging).append(
          '<ul class=\'pagination no-margin\'>' +
          '<li class=\'prev disabled\'><a href=\'#\' title=\'' + oLang.sPrevious + '\'>←</a></li>' +
          '<li class=\'next disabled\'><a href=\'#\' title=\'' + oLang.sNext + '\'>→</a></li>' +
          '</ul>'
        );
        var els = $('a', nPaging);
        $(els[0]).bind('click.DT', {
          action: 'previous'
        }, fnClickHandler);
        $(els[1]).bind('click.DT', {
          action: 'next'
        }, fnClickHandler);
      },

      'fnUpdate': function (oSettings, fnDraw) {
        var iListLength = 4;
        var oPaging = oSettings.oInstance.fnPagingInfo();
        var an = oSettings.aanFeatures.p;
        var i, ien, j, sClass, iStart, iEnd, iHalf = Math.floor(iListLength / 2);

        if (oPaging.iTotalPages < iListLength) {
          iStart = 1;
          iEnd = oPaging.iTotalPages;
        } else if (oPaging.iPage <= iHalf) {
          iStart = 1;
          iEnd = iListLength;
        } else if (oPaging.iPage >= (oPaging.iTotalPages - iHalf)) {
          iStart = oPaging.iTotalPages - iListLength + 1;
          iEnd = oPaging.iTotalPages;
        } else {
          iStart = oPaging.iPage - iHalf + 1;
          iEnd = iStart + iListLength - 1;
        }

        for (i = 0, ien = an.length; i < ien; i++) {
          // Remove the middle elements
          $('li:gt(0)', an[i]).filter(':not(:last)').remove();

          // Add the new list items and their event handlers
          for (j = iStart; j <= iEnd; j++) {
            sClass = (j === oPaging.iPage + 1) ? 'class=\'active\'' : '';
            /*jshint -W083 */
            $('<li ' + sClass + '><a href=\'#\'>' + j + '</a></li>')
              .insertBefore($('li:last', an[i])[0])
              .on('click', function (e) {
                e.preventDefault();
                oSettings._iDisplayStart = (parseInt($('a', this).text(), 10) - 1) * oPaging.iLength;
                fnDraw(oSettings);
              });
          }

          // Add / remove disabled classes from the static elements
          if (oPaging.iPage === 0) {
            $('li:first', an[i]).addClass('disabled');
          } else {
            $('li:first', an[i]).removeClass('disabled');
          }

          if (oPaging.iPage === oPaging.iTotalPages - 1 || oPaging.iTotalPages === 0) {
            $('li:last', an[i]).addClass('disabled');
          } else {
            $('li:last', an[i]).removeClass('disabled');
          }
        }
      }
    }
  });

  /*
   * TableTools Bootstrap compatibility
   * Required TableTools 2.1+
   */
  if ($.fn.DataTable.TableTools) {
    // Set the classes that TableTools uses to something suitable for Bootstrap
    $.extend(true, $.fn.DataTable.TableTools.classes, {
      'container': 'DTTT btn-group',
      'buttons': {
        'normal': 'btn btn-default',
        'disabled': 'disabled'
      },
      'collection': {
        'container': 'DTTT_dropdown dropdown-menu',
        'buttons': {
          'normal': '',
          'disabled': 'disabled'
        }
      },
      'print': {
        'info': 'DTTT_print_info modal'
      },
      'select': {
        'row': 'active'
      }
    });

    // Have the collection use a bootstrap compatible dropdown
    $.extend(true, $.fn.DataTable.TableTools.DEFAULTS.oTags, {
      'collection': {
        'container': 'ul',
        'button': 'li',
        'liner': 'a'
      }
    });
  }

})(jQuery);
/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 *
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */
/*jshint browser: true, strict: true, undef: true */
/*global define: false */
(function (window) {
  'use strict';
  // class helper functions from bonzo https://github.com/ded/bonzo
  function classReg(className) {
      return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
    }
    // classList support for class management
    // altho to be fair, the api sucks because it won't accept multiple classes at once
  var hasClass, addClass, removeClass;
  if ('classList' in document.documentElement) {
    hasClass = function (elem, c) {
      return elem.classList.contains(c);
    };
    addClass = function (elem, c) {
      elem.classList.add(c);
    };
    removeClass = function (elem, c) {
      elem.classList.remove(c);
    };
  } else {
    hasClass = function (elem, c) {
      return classReg(c).test(elem.className);
    };
    addClass = function (elem, c) {
      if (!hasClass(elem, c)) {
        elem.className = elem.className + ' ' + c;
      }
    };
    removeClass = function (elem, c) {
      elem.className = elem.className.replace(classReg(c), ' ');
    };
  }

  function toggleClass(elem, c) {
    var fn = hasClass(elem, c) ? removeClass : addClass;
    fn(elem, c);
  }
  var classie = {
    // full names
    hasClass: hasClass,
    addClass: addClass,
    removeClass: removeClass,
    toggleClass: toggleClass,
    // short names
    has: hasClass,
    add: addClass,
    remove: removeClass,
    toggle: toggleClass
  };
  // transport
  if (typeof define === 'function' && define.amd) {
    // AMD
    define(classie);
  } else {
    // browser global
    window.classie = classie;
  }
})(window);
'use strict';

function LightenDarkenColor(col, amt) {

  var usePound = false;

  if (col[0] === '#') {
    col = col.slice(1);
    usePound = true;
  }

  var num = parseInt(col, 16);

  var r = (num >> 16) + amt;

  if (r > 255) r = 255;
  else if (r < 0) r = 0;

  var b = ((num >> 8) & 0x00FF) + amt;

  if (b > 255) {
    b = 255;
  } else if (b < 0) {
    b = 0;
  }

  var g = (num & 0x0000FF) + amt;

  if (g > 255) {
    g = 255;
  } else if (g < 0) {
    g = 0;
  }

  return (usePound ? '#' : '') + (g | (b << 8) | (r << 16)).toString(16);

}
(function () {
  // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
  if (!String.prototype.trim) {
    (function () {
      // Make sure we trim BOM and NBSP
      var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
      String.prototype.trim = function () {
        return this.replace(rtrim, '');
      };
    })();
  }
  [].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
    // in case the input is already filled..
    if (inputEl.value.trim() !== '') {
      classie.add(inputEl.parentNode, 'input--filled');
    }
    // events:
    inputEl.addEventListener('focus', onInputFocus);
    inputEl.addEventListener('blur', onInputBlur);
  });

  function onInputFocus(ev) {
    classie.add(ev.target.parentNode, 'input--filled');
  }

  function onInputBlur(ev) {
    if (ev.target.value.trim() === '') {
      classie.remove(ev.target.parentNode, 'input--filled');
    }
  }
})();
/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransforms-csstransforms3d-svg-touch-shiv-cssclasses-teststyles-testprop-testallprops-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function A(a){j.cssText=a}function B(a,b){return A(m.join(a+";")+(b||""))}function C(a,b){return typeof a===b}function D(a,b){return!!~(""+a).indexOf(b)}function E(a,b){for(var d in a){var e=a[d];if(!D(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function F(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:C(f,"function")?f.bind(d||b):f}return!1}function G(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+o.join(d+" ")+d).split(" ");return C(b,"string")||C(b,"undefined")?E(e,b):(e=(a+" "+p.join(d+" ")+d).split(" "),F(e,b,c))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m=" -webkit- -moz- -o- -ms- ".split(" "),n="Webkit Moz O ms",o=n.split(" "),p=n.toLowerCase().split(" "),q={svg:"http://www.w3.org/2000/svg"},r={},s={},t={},u=[],v=u.slice,w,x=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},y={}.hasOwnProperty,z;!C(y,"undefined")&&!C(y.call,"undefined")?z=function(a,b){return y.call(a,b)}:z=function(a,b){return b in a&&C(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=v.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(v.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(v.call(arguments)))};return e}),r.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:x(["@media (",m.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},r.csstransforms=function(){return!!G("transform")},r.csstransforms3d=function(){var a=!!G("perspective");return a&&"webkitPerspective"in g.style&&x("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},r.svg=function(){return!!b.createElementNS&&!!b.createElementNS(q.svg,"svg").createSVGRect};for(var H in r)z(r,H)&&(w=H.toLowerCase(),e[w]=r[H](),u.push((e[w]?"":"no-")+w));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)z(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},A(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=m,e._domPrefixes=p,e._cssomPrefixes=o,e.testProp=function(a){return E([a])},e.testAllProps=G,e.testStyles=x,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+u.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

  $.noty.layouts.top = {
    name: 'top',
    options: {},
    container: {
      object: '<ul class="app-noty-top" />',
      selector: 'ul.app-noty-top',
      style: function () {}
    },
    parent: {
      object: '<li />',
      selector: 'li',
      css: {}
    },
    css: {
      display: 'none'
    },
    addClass: ''
  };

  $.noty.layouts.topLeft = {
    name: 'topLeft',
    options: {},
    container: {
      object: '<ul class="app-noty-top-left" />',
      selector: 'ul.app-noty-top-left',
      style: function () {}
    },
    parent: {
      object: '<li />',
      selector: 'li',
      css: {}
    },
    css: {
      display: 'none',
      width: '300px'
    },
    addClass: ''
  };

  $.noty.layouts.topRight = {
    name: 'topRight',
    options: {},
    container: {
      object: '<ul class="app-noty-top-right" />',
      selector: 'ul.app-noty-top-right',
      style: function () {}
    },
    parent: {
      object: '<li />',
      selector: 'li',
      css: {}
    },
    css: {
      display: 'none',
      width: '300px'
    },
    addClass: ''
  };
  //
  $.noty.layouts.bottom = {
    name: 'bottom',
    options: {},
    container: {
      object: '<ul class="app-noty-bottom" />',
      selector: 'ul.app-noty-bottom',
      style: function () {}
    },
    parent: {
      object: '<li />',
      selector: 'li',
      css: {}
    },
    css: {
      display: 'none'
    },
    addClass: ''
  };

  $.noty.layouts.bottomLeft = {
    name: 'bottomLeft',
    options: {},
    container: {
      object: '<ul class="app-noty-bottom-left" />',
      selector: 'ul.app-noty-bottom-left',
      style: function () {}
    },
    parent: {
      object: '<li />',
      selector: 'li',
      css: {}
    },
    css: {
      display: 'none',
      width: '300px'
    },
    addClass: ''
  };

  $.noty.layouts.bottomRight = {
    name: 'bottomRight',
    options: {},
    container: {
      object: '<ul class="app-noty-bottom-right" />',
      selector: 'ul.app-noty-bottom-right',
      style: function () {}
    },
    parent: {
      object: '<li />',
      selector: 'li',
      css: {}
    },
    css: {
      display: 'none',
      width: '300px'
    },
    addClass: ''
  };
(function($) {
  $.fn.sameHeight = function(width) {
    return this.each(function() {
      $(this).each(function() {
        if ($(this).find('.card').prop('style')['height'].length) {
          $(this).find('.card').css('height', '');
        }
        if ($(window).width() <= width) {
          $(this).find('.card').css('height', '');
        } else {
          $(this).find('.card').height($(this).height());
        }
      });
    });
  }
}(jQuery));
 /**
  * selectFx.js v1.0.0
  * http://www.codrops.com
  *
  * Licensed under the MIT license.
  * http://www.opensource.org/licenses/mit-license.php
  *
  * Copyright 2014, Codrops
  * http://www.codrops.com
  */
 ;
 (function (window) {
   'use strict';
   /**
    * based on from https://github.com/inuyaksa/jquery.nicescroll/blob/master/jquery.nicescroll.js
    */
   function hasParent(e, p) {
     if (!e) return false;
     var el = e.target || e.srcElement || e || false;
     while (el && el != p) {
       el = el.parentNode || false;
     }
     return (el !== false);
   };
   /**
    * extend obj function
    */
   function extend(a, b) {
       for (var key in b) {
         if (b.hasOwnProperty(key)) {
           a[key] = b[key];
         }
       }
       return a;
     }
     /**
      * SelectFx function
      */
   function SelectFx(el, options) {
       this.el = el;
       this.options = extend({}, this.options);
       extend(this.options, options);
       this._init();
     }
     /**
      * SelectFx options
      */
   SelectFx.prototype.options = {
       // if true all the links will open in a new tab.
       // if we want to be redirected when we click an option, we need to define a data-link attr on the option of the native select element
       newTab: true,
       // when opening the select element, the default placeholder (if any) is shown
       stickyPlaceholder: true,
       // callback when changing the value
       onChange: function (val) {
         return false;
       }
     }
     /**
      * init function
      * initialize and cache some vars
      */
   SelectFx.prototype._init = function () {
       // check if we are using a placeholder for the native select box
       // we assume the placeholder is disabled and selected by default
       var selectedOpt = this.el.querySelector('option[selected]');
       this.hasDefaultPlaceholder = selectedOpt && selectedOpt.disabled;
       // get selected option (either the first option with attr selected or just the first option)
       this.selectedOpt = selectedOpt || this.el.querySelector('option');
       // create structure
       this._createSelectEl();
       // all options
       this.selOpts = [].slice.call(this.selEl.querySelectorAll('li[data-option]'));
       // total options
       this.selOptsCount = this.selOpts.length;
       // current index
       this.current = this.selOpts.indexOf(this.selEl.querySelector('li.cs-selected')) || -1;
       // placeholder elem
       this.selPlaceholder = this.selEl.querySelector('span.cs-placeholder');
       // init events
       this._initEvents();
     }
     /**
      * creates the structure for the select element
      */
   SelectFx.prototype._createSelectEl = function () {
       var self = this,
         options = '',
         createOptionHTML = function (el) {
           var optclass = '',
             classes = '',
             link = '';
           if (el.selectedOpt && !this.foundSelected && !this.hasDefaultPlaceholder) {
             classes += 'cs-selected ';
             this.foundSelected = true;
           }
           // extra classes
           if (el.getAttribute('data-class')) {
             classes += el.getAttribute('data-class');
           }
           // link options
           if (el.getAttribute('data-link')) {
             link = 'data-link=' + el.getAttribute('data-link');
           }
           if (classes !== '') {
             optclass = 'class="' + classes + '" ';
           }
           return '<li ' + link + ' data-option data-value="' + el.value + '"><span ' + optclass + '>' + el.textContent + '</span></li>';
         };
       [].slice.call(this.el.children).forEach(function (el) {
         if (el.disabled) {
           return;
         }
         var tag = el.tagName.toLowerCase();
         if (tag === 'option') {
           options += createOptionHTML(el);
         } else if (tag === 'optgroup') {
           options += '<li class="cs-optgroup"><span>' + el.label + '</span><ul>';
           [].slice.call(el.children).forEach(function (opt) {
             options += createOptionHTML(opt);
           });
           options += '</ul></li>';
         }
       });
       var opts_el = '<div class="cs-options"><ul>' + options + '</ul></div>';
       this.selEl = document.createElement('div');
       this.selEl.className = this.el.className;
       this.selEl.tabIndex = this.el.tabIndex;
       this.selEl.innerHTML = '<span class="cs-placeholder">' + this.selectedOpt.textContent + '</span>' + opts_el;
       this.el.parentNode.appendChild(this.selEl);
       this.selEl.appendChild(this.el);
     }
     /**
      * initialize the events
      */
   SelectFx.prototype._initEvents = function () {
       var self = this;
       // open/close select
       this.selPlaceholder.addEventListener('click', function () {
         self._toggleSelect();
       });
       // clicking the options
       this.selOpts.forEach(function (opt, idx) {
         opt.addEventListener('click', function () {
           if (self._isDisabled()) {
             return;
           }
           self.current = idx;
           self._changeOption();
           // close select elem
           self._toggleSelect();
         });
       });
       // close the select element if the target itÂ´s not the select element or one of its descendants..
       document.addEventListener('click', function (ev) {
         var target = ev.target;
         if (self._isOpen() && target !== self.selEl && !hasParent(target, self.selEl)) {
           self._toggleSelect();
         }
       });
       // keyboard navigation events
       this.selEl.addEventListener('keydown', function (ev) {
         var keyCode = ev.keyCode || ev.which;
         switch (keyCode) {
           // up key
         case 38:
           ev.preventDefault();
           self._navigateOpts('prev');
           break;
           // down key
         case 40:
           ev.preventDefault();
           self._navigateOpts('next');
           break;
           // space key
         case 32:
           ev.preventDefault();
           if (self._isOpen() && typeof self.preSelCurrent != 'undefined' && self.preSelCurrent !== -1) {
             self._changeOption();
           }
           self._toggleSelect();
           break;
           // enter key
         case 13:
           ev.preventDefault();
           if (self._isOpen() && typeof self.preSelCurrent != 'undefined' && self.preSelCurrent !== -1) {
             self._changeOption();
             self._toggleSelect();
           }
           break;
           // esc key
         case 27:
           ev.preventDefault();
           if (self._isOpen()) {
             self._toggleSelect();
           }
           break;
         }
       });
     }
     /**
      * navigate with up/dpwn keys
      */
   SelectFx.prototype._navigateOpts = function (dir) {
       if (!this._isOpen()) {
         this._toggleSelect();
       }
       var tmpcurrent = typeof this.preSelCurrent != 'undefined' && this.preSelCurrent !== -1 ? this.preSelCurrent : this.current;
       if (dir === 'prev' && tmpcurrent > 0 || dir === 'next' && tmpcurrent < this.selOptsCount - 1) {
         // save pre selected current - if we click on option, or press enter, or press space this is going to be the index of the current option
         this.preSelCurrent = dir === 'next' ? tmpcurrent + 1 : tmpcurrent - 1;
         // remove focus class if any..
         this._removeFocus();
         // add class focus - track which option we are navigating
         classie.add(this.selOpts[this.preSelCurrent], 'cs-focus');
       }
     }
     /**
      * open/close select
      * when opened show the default placeholder if any
      */
   SelectFx.prototype._toggleSelect = function () {
       // remove focus class if any..
       this._removeFocus();
       if (this._isOpen()) {
         if (this.current !== -1) {
           // update placeholder text
           this.selPlaceholder.textContent = this.selOpts[this.current].textContent;
         }
         classie.remove(this.selEl, 'cs-active');
       } else {
         if (this.hasDefaultPlaceholder && this.options.stickyPlaceholder) {
           // everytime we open we wanna see the default placeholder text
           this.selPlaceholder.textContent = this.selectedOpt.textContent;
         }
         classie.add(this.selEl, 'cs-active');
       }
     }
     /**
      * change option - the new value is set
      */
   SelectFx.prototype._changeOption = function () {
       // if pre selected current (if we navigate with the keyboard)...
       if (typeof this.preSelCurrent != 'undefined' && this.preSelCurrent !== -1) {
         this.current = this.preSelCurrent;
         this.preSelCurrent = -1;
       }
       // current option
       var opt = this.selOpts[this.current];
       // update current selected value
       this.selPlaceholder.textContent = opt.textContent;
       // change native select elementÂ´s value
       this.el.value = opt.getAttribute('data-value');
       // remove class cs-selected from old selected option and add it to current selected option
       var oldOpt = this.selEl.querySelector('li.cs-selected');
       if (oldOpt) {
         classie.remove(oldOpt, 'cs-selected');
       }
       classie.add(opt, 'cs-selected');
       // if thereÂ´s a link defined
       if (opt.getAttribute('data-link')) {
         // open in new tab?
         if (this.options.newTab) {
           window.open(opt.getAttribute('data-link'), '_blank');
         } else {
           window.location = opt.getAttribute('data-link');
         }
       }
       // callback
       this.options.onChange(this.el.value);
     }
     /**
      * returns true if select element is disabled
      */
   SelectFx.prototype._isDisabled = function (opt) {
       return classie.has(this.selEl, 'cs-select-disabled');
     }
     /**
      * returns true if select element is opened
      */
   SelectFx.prototype._isOpen = function (opt) {
       return classie.has(this.selEl, 'cs-active');
     }
     /**
      * removes the focus class from the option
      */
   SelectFx.prototype._removeFocus = function (opt) {
       var focusEl = this.selEl.querySelector('li.cs-focus')
       if (focusEl) {
         classie.remove(focusEl, 'cs-focus');
       }
     }
     /**
      * add to global namespace
      */
   window.SelectFx = SelectFx;
 })(window);
(function ($, sr) {

  'use strict';

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
    var timeout;

    return function debounced() {
      var obj = this,
        args = arguments;

      function delayed() {
        if (!execAsap) {
          func.apply(obj, args);
        }
        timeout = null;
      }

      if (timeout) {
        clearTimeout(timeout);
      } else if (execAsap) {
        func.apply(obj, args);
      }

      timeout = setTimeout(delayed, threshold || 100);
    };
  };
  // smartresize 
  jQuery.fn[sr] = function (fn) {
    return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
  };

})(jQuery, 'smartresize');
/**
 * Main scripts file
 */
(function ($) {
  'use strict';
  /* Define some variables */
  var $window = $(window),
    app = $('.app'),
    isChatOpen = false,
    isSearchOpen = false,
    offscreenDirection,
    offscreenDirectionClass,
    rapidClickCheck = false,
    isOffscreenOpen = false,
    psTarg = $('.no-touch .sidebar-panel');

  /* Preloader */
  function preloader() {
    $(window).on('load', function () {
      if ($('body > .pageload').length) {
        if ($('body').hasClass('page-loaded')) {
          return;
        }
        $('body').addClass('page-loaded').removeClass('page-loading');
        $('body > .pageload').fadeOut();
      }
    });
  }

  /* Scrollable areas with perfect scrollbar */
  function scrollable() {
    $('.scrollable').perfectScrollbar({
      wheelPropagation: true,
      suppressScrollX: true
    });
  }

  function apps() {
    $('.message-list .message-list-item a, .message-toolbar .icon-close').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      app.toggleClass('message-open');
    });
    $('.contacts-list li, .contact-toolbar .icon-close').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      app.toggleClass('contact-open');
    });
  }

  /* Small menu */
  function smallMenu() {
    $('[data-toggle=layout-small-menu]').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      app.toggleClass('layout-small-menu');
      if (app.hasClass('layout-small-menu')) {
        destroyScrollbars();
        if ($('.quick-launch-apps').is(':visible')) {
          $('.quick-launch-apps').addClass('hide').next().removeClass('hide');
        }
      } else if (!psTarg.hasClass('ps-container')) {
        initScrollbars();
      }
    });
  }

  /* Chat panel */
  function toggleChatSidebar() {
    if (isChatOpen) {
      app.removeClass('layout-chat-open');
    } else {
      app.addClass('layout-chat-open');
    }
    isChatOpen = !isChatOpen;
  }

  function chatPanel() {
    var toggleChat = $('[data-toggle=layout-chat-open], [data-toggle=chat-dismiss]'),
      toggleChatBox = $('.chat-users .chat-group a, .chat-back'),
      chatSidebar = $('.app > .chat-panel');
    toggleChat.on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      toggleChatSidebar();
    });
    toggleChatBox.on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      chatSidebar.toggleClass('conversation-open');
    });
    $('.chat-input').keydown(function (e) {
      if (e.keyCode === 13) {
        e.preventDefault();
        var message = $(this).text();
        if (message === '') {
          return;
        }
        $('.chat-conversation-content').append('<div class=\'chat-conversation-user them\'><div class=\'chat-conversation-message\'><p>' + $(this).text() + '</p></div></div>');
        $(this).text('');
      }
    });
  }

  /* Header search */
  function searchPredictToggle() {
    var val = $('.search-input').val();
    if (val.length > 0) {
      $('.search-predict').removeClass('hide');
    } else {
      $('.search-predict').addClass('hide');
    }
  }

  function headerSearch() {
    $('.search-input').focus(function () {
      searchPredictToggle();
    });
    $('.search-input').keyup(function () {
      searchPredictToggle();
    });
    $('.search-input').focusout(function () {
      $('.search-predict').addClass('hide');
    });
    $('[data-toggle=search]').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (isSearchOpen) {
        $('.main-panel > .header').removeClass('search-open');
        $('.search-form').addClass('hide');
        $('.search-close-icon').addClass('hide');
        $('.search-open-icon').removeClass('hide');
      } else {
        $('.main-panel > .header').addClass('search-open');
        $('.search-form').removeClass('hide').find('.search-input')[0].focus();
        $('.search-close-icon').removeClass('hide');
        $('.search-open-icon').addClass('hide');
      }
      isSearchOpen = !isSearchOpen;
    });
  }

  /* Quick launch */
  function quickLaunch() {
    $('[data-toggle=quick-launch]').on('click', function (e) {
      e.preventDefault();
      if ($('.quick-launch-apps').is(':visible')) {
        $('.quick-launch-apps').addClass('hide').next().removeClass('hide');
      } else {
        $('.quick-launch-apps').removeClass('hide').next().addClass('hide');
      }
    });
  }

  /* Scroll to top */
  function scrollToTop() {
    $('.scroll-up').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $('html,body').stop().animate({
        scrollTop: $('body').offset().top
      }, 1000);
      return false;
    });
  }

  /* Smooth scroll*/
  function smoothScroll() {
    $('.smooth-scroll').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').stop().animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  }

  /* active state */
  function activeState() {
    $('.toggle-active').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $(this).toggleClass('active');
    });
  }

  /* Ripple efect */
  function rippleEffect() {
    $('.ripple').on('click', function (e) {
      e.preventDefault();
      var $div = $('<div/>'),
        btnOffset = $(this).offset(),
        xPos = e.pageX - btnOffset.left,
        yPos = e.pageY - btnOffset.top;
      $div.addClass('ripple-effect');
      var $ripple = $('.ripple-effect');
      $ripple.css('height', $(this).height());
      $ripple.css('width', $(this).height());
      $div.css({
        top: yPos - $ripple.height() / 2,
        left: xPos - $ripple.width() / 2,
        background: $(this).data('ripple-color')
      }).appendTo($(this));
      window.setTimeout(function () {
        $div.remove();
      }, 1500);
    });
  }

  function cardControls() {
    /* Card controls */
    $('[data-toggle=card-collapse]').on('click', function (e) {
      var parent = $(this).parents('.card'),
        body = parent.children('.card-block');

      if (body.is(':visible')) {
        parent.addClass('card-collapsed');
        body.slideUp(200);
      } else if (!body.is(':visible')) {
        parent.removeClass('card-collapsed');
        body.slideDown(200);
      }
      e.preventDefault();
      e.stopPropagation();
    });

    $('[data-toggle=card-refresh]').on('click', function (e) {
      var parent = $(this).parents('.card');

      parent.addClass('card-refreshing');
      window.setTimeout(function () {
        parent.removeClass('card-refreshing');
      }, 3000);
      e.preventDefault();
      e.stopPropagation();
    });

    $('[data-toggle=card-remove]').on('click', function (e) {
      var parent = $(this).parents('.card');

      parent.addClass('animated zoomOut');

      parent.bind('animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd', function () {
        parent.remove();
      });

      e.preventDefault();
      e.stopPropagation();
    });
  }

  function accordion() {
    /* Accordion UI Element */
    var accordionBody = $('.accordion > .accordion-container > .accordion-body'),
      accordionTitleTarget = $('.accordion > .accordion-container > .accordion-title > a');

    if ($('.accordion').length) {
      accordionBody.hide();

      $('.accordion').each(function () {
        $(this).find('.accordion-body').first().show();
        $(this).find('.accordion-container').first().addClass('active');
      });
    }

    accordionTitleTarget.on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();

      var thisParent = $(this).parent();

      if (!$(this).closest('.accordion').hasClass('accordion-toggle')) {
        $(this).closest('.accordion').find('.accordion-body').slideUp();
        $(this).closest('.accordion').find('.accordion-container').removeClass('active');
      }

      if (thisParent.next().css('display') !== 'block') {
        thisParent.next().slideDown();
        thisParent.parent().addClass('active');

        return false;
      } else if (thisParent.next().css('display') === 'block') {

        thisParent.next().slideUp();
        thisParent.parent().removeClass('active');

        return false;
      }
      return false;

    });
  }

  /* Sidebar panel */
  function sidebarPanel() {
    $('[data-toggle=offscreen]').on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      offscreenDirection = $(this).data('move') ? $(this).data('move') : 'ltr';
      if (offscreenDirection === 'rtl') {
        offscreenDirectionClass = 'move-right';
      } else {
        offscreenDirectionClass = 'move-left';
      }
      if (rapidClickCheck) {
        return;
      }
      rapidClickCheck = true;
      toggleMenu();
    });
    $('.main-panel').on('click', function (e) {
      var target = e.target;
      if (isOffscreenOpen && target !== $('[data-toggle=offscreen]')) {
        toggleMenu();
      }
    });
    /* Sidebar sub-menus */
    $('.sidebar-panel nav a').on('click', function (e) {
      var $this = $(this),
        links = $this.parents('li'),
        parentLink = $this.closest('li'),
        otherLinks = $('.sidebar-panel nav li').not(links),
        subMenu = $this.next();
      if (!subMenu.hasClass('sub-menu')) {
        toggleMenu();
        return;
      }
      if (app.hasClass('layout-small-menu') && parentLink.parent().hasClass('nav') && $(window).width() > 768) {
        return;
      }
      otherLinks.removeClass('open');
      if (subMenu.is('ul') && (subMenu.height() === 0)) {
        parentLink.addClass('open');
      } else if (subMenu.is('ul') && (subMenu.height() !== 0)) {
        parentLink.removeClass('open');
      }
      if ($this.attr('href') === '#') {
        e.preventDefault();
      }
      updateScrollbars();
      if (subMenu.is('ul')) {
        return false;
      }
      e.stopPropagation();
      return true;
    });
    $('.sidebar-panel').find('> li > .sub-menu').each(function () {
      if ($(this).find('ul.sub-menu').length > 0) {
        $(this).addClass('multi-level');
      }
    });
    $('.sidebar-panel').find('.sub-menu').each(function () {
      $(this).parent('li').addClass('menu-accordion');
    });
  }

  function toggleMenu() {
    if (isChatOpen) {
      toggleChatSidebar();
    }
    if (isOffscreenOpen) {
      app.removeClass('move-left move-right');
      setTimeout(function () {
        app.removeClass('offscreen');
      }, 150);
    } else {
      app.addClass('offscreen ' + offscreenDirectionClass);
    }
    isOffscreenOpen = !isOffscreenOpen;
    rapidClickFix();
  }

  function rapidClickFix() {
    setTimeout(function () {
      rapidClickCheck = false;
    }, 150);
  }

  function initScrollbars() {
    if (app.hasClass('layout-small-menu') || app.hasClass('layout-static-sidebar') || app.hasClass('layout-boxed')) {
      return;
    }
    psTarg.perfectScrollbar({
      wheelPropagation: true,
      suppressScrollX: true
    });
  }

  function destroyScrollbars() {
    psTarg.perfectScrollbar('destroy').removeClass('ps-container ps-active-y ps-active-x');
  }

  function updateScrollbars() {
    if (psTarg.hasClass('ps-container') && !app.hasClass('layout-small-menu')) {
      psTarg.perfectScrollbar('update');
    }
  }
  initScrollbars();

  $(window).smartresize(function () {
    updateScrollbars();
  });

  function init() {
    smallMenu();
    sidebarPanel();
    chatPanel();
    headerSearch();
    quickLaunch();
    scrollToTop();
    smoothScroll();
    activeState();
    rippleEffect();
    preloader();
    scrollable();
    cardControls();
    accordion();
    apps();
  }
  init();
})(jQuery);
/**
 * Gmaps demo page
 */
(function ($) {
  'use strict';

  var latitude = 35.784,
    longitude = -78.670,
    map_zoom = 6,
    is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1,
    marker_url = (is_internetExplorer11) ? 'images/cd-icon-location.png' : 'images/cd-icon-location.svg';

  var map_options = {
    scrollwheel: false,
    center: new google.maps.LatLng(latitude, longitude),
    zoom: map_zoom,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  var map = new google.maps.Map(document.getElementById('google-container'), map_options);

  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(latitude, longitude),
    map: map,
    visible: true,
    icon: marker_url,
  });
})(jQuery);
/**
 * JVectormap demo page
 */
(function ($) {
  'use strict';

  $('.world-map').vectorMap({
    map: 'world_mill_en',
    backgroundColor: 'transparent',
    zoomOnScroll: false,
    strokeWidth: 1,
    regionStyle: {
      initial: {
        fill: $.staticApp.dark,
        'fill-opacity': 0.2
      },
      hover: {
        'fill-opacity': 0.3
      }
    },
    markerStyle: {
      initial: {
        fill: $.staticApp.primary,
        stroke: $.staticApp.primary,
        'fill-opacity': 1,
        'stroke-width': 8,
        'stroke-opacity': 0.3,
        r: 5
      },
      hover: {
        r: 8,
        stroke: $.staticApp.primary,
        'stroke-width': 10
      }
    },
    markers: [{
      latLng: [41.90, 12.45],
      name: 'Vatican City'
    }, {
      latLng: [43.73, 7.41],
      name: 'Monaco'
    }, {
      latLng: [-0.52, 166.93],
      name: 'Nauru'
    }, {
      latLng: [-8.51, 179.21],
      name: 'Tuvalu'
    }, {
      latLng: [43.93, 12.46],
      name: 'San Marino'
    }, {
      latLng: [47.14, 9.52],
      name: 'Liechtenstein'
    }, {
      latLng: [35.88, 14.5],
      name: 'Malta'
    }, {
      latLng: [13.16, -61.23],
      name: 'Saint Vincent and the Grenadines'
    }, {
      latLng: [-4.61, 55.45],
      name: 'Seychelles'
    }, {
      latLng: [7.35, 134.46],
      name: 'Palau'
    }, {
      latLng: [42.5, 1.51],
      name: 'Andorra'
    }, {
      latLng: [6.91, 158.18],
      name: 'Federated States of Micronesia'
    }, {
      latLng: [1.3, 103.8],
      name: 'Singapore'
    }, {
      latLng: [1.46, 173.03],
      name: 'Kiribati'
    }, {
      latLng: [-21.13, -175.2],
      name: 'Tonga'
    }, {
      latLng: [-20.2, 57.5],
      name: 'Mauritius'
    }, {
      latLng: [26.02, 50.55],
      name: 'Bahrain'
    }]
  });
})(jQuery);
/**
 * Datatables editable demo page
 */
(function ($) {
  'use strict';

  var nEditing = null,
    oTable;

  function restoreRow(oTable, nRow) {
    var aData = oTable.fnGetData(nRow);
    var jqTds = $('>td', nRow);
    for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
      oTable.fnUpdate(aData[i], nRow, i, false);
    }
    oTable.fnDraw();
  }

  function editRow(oTable, nRow) {
    var aData = oTable.fnGetData(nRow);
    var jqTds = $('>td', nRow);
    jqTds[0].innerHTML = '<input type=\'text\' class=\'form-control\' value=\'' + aData[0] + '\'>';
    jqTds[1].innerHTML = '<input type=\'text\' class=\'form-control\' value=\'' + aData[1] + '\'>';
    jqTds[2].innerHTML = '<input type=\'text\' class=\'form-control\' value=\'' + aData[2] + '\'>';
    jqTds[3].innerHTML = '<input type=\'text\' class=\'form-control\' value=\'' + aData[3] + '\'>';
    jqTds[4].innerHTML = '<input type=\'text\' class=\'form-control\' value=\'' + aData[4] + '\'>';
    jqTds[5].innerHTML = '<a class=\'edit\' href=\'\'>Save</a>';
  }

  function saveRow(oTable, nRow) {
    var jqInputs = $('input', nRow);
    oTable.fnUpdate(jqInputs[0].value, nRow, 0, false);
    oTable.fnUpdate(jqInputs[1].value, nRow, 1, false);
    oTable.fnUpdate(jqInputs[2].value, nRow, 2, false);
    oTable.fnUpdate(jqInputs[3].value, nRow, 3, false);
    oTable.fnUpdate(jqInputs[4].value, nRow, 4, false);
    oTable.fnUpdate('<a class=\'edit\' href=\'\'>Edit</a>', nRow, 5, false);
    oTable.fnDraw();
  }

  oTable = $('.datatable').dataTable();

  $('.toolbar').append('<a id=\'new\' href=\'javascript:;\' class=\'btn btn-info m-l\'>Add new row</a>');

  $('#new').on('click', function (e) {
    e.preventDefault();
    var aiNew = oTable.fnAddData(['', '', '', '', '', '<a class=\'edit\' href=\'\'>Edit</a>', '<a class=\'delete\' href=\'\'>Delete</a>']);
    var nRow = oTable.fnGetNodes(aiNew[0]);
    editRow(oTable, nRow);
    nEditing = nRow;
  });

  $('.datatable').on('click', 'a.delete', function (e) {
    e.preventDefault();
    var nRow = $(this).parents('tr')[0];
    oTable.fnDeleteRow(nRow);
  });

  $('.datatable').on('click', 'a.edit', function (e) {
    e.preventDefault();
    var nRow = $(this).parents('tr')[0];
    if (nEditing !== null && nEditing !== nRow) {
      restoreRow(oTable, nEditing);
      editRow(oTable, nRow);
      nEditing = nRow;
    } else if (nEditing === nRow && this.innerHTML === 'Save') {
      saveRow(oTable, nEditing);
      nEditing = null;
    } else {
      editRow(oTable, nRow);
      nEditing = nRow;
    }
    return false;
  });
})(jQuery);
/**
 * Sweetalerts demo page
 */
(function ($) {
  'use strict';

  $('.demo1').on('click', function () {
    swal('Here\'s a message!');
  });

  $('.demo2').on('click', function () {
    swal({
      title: 'Auto close alert!',
      text: 'I will close in 2 seconds.',
      timer: 2000
    });
  });

  $('.demo3').on('click', function () {
    swal('Here\'s a message!', 'It\'s pretty, isn\'t it?');
  });

  $('.demo4').on('click', function () {
    swal('Good job!', 'You clicked the button!', 'success');
  });

  $('.demo5').on('click', function () {
    swal({
      title: 'Are you sure?',
      text: 'You will not be able to recover this imaginary file!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes, delete it!',
      closeOnConfirm: false,
    }, function () {
      swal('Deleted!', 'Your imaginary file has been deleted!', 'success');
    });
  });

  $('.demo6').on('click', function () {
    swal({
      title: 'Are you sure?',
      text: 'You will not be able to recover this imaginary file!',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#DD6B55',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel plx!',
      closeOnConfirm: false,
      closeOnCancel: false
    }, function (isConfirm) {
      if (isConfirm) {
        swal('Deleted!', 'Your imaginary file has been deleted!', 'success');
      } else {
        swal('Cancelled', 'Your imaginary file is safe :)', 'error');
      }
    });
  });

  $('.demo7').on('click', function () {
    swal({
      title: 'Sweet!',
      text: 'Here\'s a custom image.',
      imageUrl: 'images/avatar.jpg'
    });
  });

  $('.demo8').on('click', function () {
    swal({
      title: 'HTML <small>Title</small>!',
      text: 'A custom <span style=\"color:#F8BB86\">html<span> message.',
      html: true
    });
  });

  $('.demo9').on('click', function () {
    swal({
      title: 'An input!',
      text: 'Write something interesting:',
      type: 'input',
      showCancelButton: true,
      closeOnConfirm: false,
      animation: 'slide-from-top',
      inputPlaceholder: 'Write something'
    }, function (inputValue) {
      if (inputValue === false) {
        return false;
      }
      if (inputValue === '') {
        swal.showInputError('You need to write something!');
        return false;
      }
      swal('Nice!', 'You wrote: ' + inputValue, 'success');
    });
  });

  $('.demo10').on('click', function () {
    swal({
      title: 'Ajax request example',
      text: 'Submit to run ajax request',
      type: 'info',
      showCancelButton: true,
      closeOnConfirm: false,
      showLoaderOnConfirm: true,
    }, function () {
      setTimeout(function () {
        swal('Ajax request finished!');
      }, 2000);
    });
  });
})(jQuery);
(function ($) {
  'use strict';

  $('.same-height-cards').sameHeight(991);
  $(window).smartresize(function () {
    $('.same-height-cards').sameHeight(991);
  });

  var getRandomArbitrary = function() {
    return Math.round(Math.random() * 100);
  };

  var visits = [
    [0, getRandomArbitrary()],
    [1, getRandomArbitrary()],
    [2, getRandomArbitrary()],
    [3, getRandomArbitrary()],
    [4, getRandomArbitrary()],
    [5, getRandomArbitrary()],
    [6, getRandomArbitrary()],
    [7, getRandomArbitrary()],
    [8, getRandomArbitrary()]
  ];
  var visitors = [
    [0, getRandomArbitrary()],
    [1, getRandomArbitrary()],
    [2, getRandomArbitrary()],
    [3, getRandomArbitrary()],
    [4, getRandomArbitrary()],
    [5, getRandomArbitrary()],
    [6, getRandomArbitrary()],
    [7, getRandomArbitrary()],
    [8, getRandomArbitrary()]
  ];

  var plotdata = [{
    data: visits,
    color: '#fff'
  }];

  // Line chart
  /*jshint -W030 */
  $('.dashboard-line').length && $.plot($('.dashboard-line'), plotdata, {
    series: {
      lines: {
        show: true,
        lineWidth: 0,
      },
      splines: {
        show: true,
        lineWidth: 1
      }
    },
    grid: {
      borderWidth: 1,
      color: 'rgba(255,255,255,0.2)',
    },
    yaxis: {
      color: 'rgba(255,255,255,0.1)',
    },
    xaxis: {
      mode: 'categories'
    }
  });

  var barDataO = [{
    data: [
      [1391761856000, 80],
      [1394181056000, 40],
      [1396859456000, 20],
      [1399451456000, 20],
      [1402129856000, 50]
    ],
    bars: {
      show: true,
      barWidth: 7 * 24 * 60 * 60 * 1000,
      fill: true,
      lineWidth: 0,
      order: 1,
      fillColor: $.staticApp.primary
    }
  }, {
    data: [
      [1391761856000, 50],
      [1394181056000, 30],
      [1396859456000, 10],
      [1399451456000, 70],
      [1402129856000, 30]
    ],
    bars: {
      show: true,
      barWidth: 7 * 24 * 60 * 60 * 1000,
      fill: true,
      lineWidth: 0,
      order: 2,
      fillColor: $.staticApp.success
    }
  }];

  $.plot($('.dashboard-barO'), barDataO, {
    grid: {
      hoverable: false,
      clickable: false,
      labelMargin: 8,
      color: $.staticApp.border,
      borderWidth: 0,
    },
    xaxis: {
      show: false
    },
    stack: true
  });






  var barData2 = [{
    data: visits,
    bars: {
      show: true,
      barWidth: 0.05,
      align: 'center',
      fill: true,
      lineWidth: 0,
      fillColor: '#fff'
    }
  }];

  $.plot($('.dashboard-bar2'), barData2, {
    grid: {
      borderWidth: 0,
      aboveData: true,
    },
    yaxis: {
      color: 'rgba(255,255,255,0.1)',
    },
    xaxis: {
      mode: 'categories',
      tickLength: 0,
      axisLabelUseCanvas: true,
      axisLabelFontSizePixels: 12,
      axisLabelFontFamily: 'Roboto',
      axisLabelPadding: 5,
      reserveSpace: true
    }
  });








  var plotdata2 = [{
    data: visits,
    color: $.staticApp.success
  }];

  // Line chart
  /*jshint -W030 */
  $('.dashboard-line2').length && $.plot($('.dashboard-line2'), plotdata2, {
    series: {
      lines: {
        show: true,
        lineWidth: 0,
        fill: false
      },
      points: {
        show: true,
        radius: 3,
        lineWidth: 1,
        fillColor: $.staticApp.success
      },
      splines: {
        show: true,
        //tension: 0.5,
        lineWidth: 1,
        //fill: 0.2,
      },
      shadowSize: 0
    },
    grid: {
      borderWidth: 0,
      hoverable: true,
    },
    xaxis: {
      show: false
    },
    yaxis: {
      show: false
    }
  });





  var data = [{
    label: 'IE',
    data: 34,
    color: $.staticApp.primary
  }, {
    label: 'Safari',
    data: 14,
    color: $.staticApp.info
  }, {
    label: 'Chrome',
    data: 15,
    color: $.staticApp.warning
  }];
  $.plot($('.pie-chart'), data, {
    series: {
      pie: {
        show: true,
        //innerRadius: 0.6,
        stroke: {
          width: 0
        },
        label: {
          show: false,
        }
      }
    },
    legend: {
      show: false
    }
  });


})(jQuery);

/**
 * Noty notifications demo page
 */
(function ($) {
  'use strict';

  $('.chosen-select').chosen({
    disable_search_threshold: 10
  });

  var i = -1,
    msgs = ['Your request has succeded!', 'Are you the six fingered man?', 'Inconceivable!', 'I do not think that means what you think it means.', 'Have fun storming the castle!'];

  $('.show-messenger').on('click', function () {
    var msg = $('#message').val(),
      type = $('#messenger-type').val().toLowerCase(),
      position = $('#position').val();
    if (!msg) {
      msg = getMessage();
    }
    if (!type) {
      type = 'error';
    }
    noty({
      theme: 'app-noty',
      text: msg,
      type: type,
      timeout: 3000,
      layout: position,
      closeWith: ['button', 'click'],
      animation: {
        open: 'in',
        close: 'out'
      },
    });
  });

  function getMessage() {
    i++;
    if (i === msgs.length) {
      i = 0;
    }
    return msgs[i];
  }
})(jQuery);