(function(window, document, $, undefined) {
    "use strict";
    $(function() {

        if ($('#morris_area').length) {
            // Use Morris.Area instead of Morris.Line
            Morris.Area({
                element: 'morris_area',
                behaveLikeLine: true,
                data: [
                    { x: '2011 Q1', y: 4, z: 3 },
                    { x: '2011 Q2', y: 2, z: 1 },
                    { x: '2011 Q3', y: 2, z: 3 },
                    { x: '2011 Q4', y: 4, z: 1 }
                ],
                xkey: 'x',
                ykeys: ['y', 'z'],
                labels: ['Y', 'Z'],
                 lineColors: ['#5969ff', '#ff407b'],
                   resize: true,
                   gridTextSize: '14px'

                
            });

        }




        if ($('#morris_line').length) {
            // Use Morris.Area instead of Morris.Line
            Morris.Line({
                element: 'morris_line',
                behaveLikeLine: true,
                data: [
                    { y: '2006', a: 10, b: 20 },
                    { y: '2007', a: 65, b: 45 },
                    { y: '2008', a: 50, b: 40 },
                    { y: '2009', a: 75, b: 65 },
                    { y: '2010', a: 50, b: 40 },
                    { y: '2011', a: 75, b: 65 },
                    { y: '2012', a: 100, b: 90 }
                ],

                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                   lineColors: ['#5969ff', '#ff407b'],
                     resize: true,
                        gridTextSize: '14px'
            });

        }

        if ($('#morris_bar').length) {
            Morris.Bar({
                element: 'morris_bar',
                data: [
                    { x: '2011 Q1', y: 0 },
                    { x: '2011 Q2', y: 1 },
                    { x: '2011 Q3', y: 2 },
                    { x: '2011 Q4', y: 3 },
                    { x: '2012 Q1', y: 4 },
                    { x: '2012 Q2', y: 5 },
                    { x: '2012 Q3', y: 6 },
                    { x: '2012 Q4', y: 7 },
                    { x: '2013 Q1', y: 8 }
                ],
                xkey: 'x',
                ykeys: ['y'],
                labels: ['Y'],
                   barColors: ['#5969ff'],
                     resize: true,
                        gridTextSize: '14px'

            });
        }


        if ($('#morris_stacked').length) {
            // Use Morris.Bar
            Morris.Bar({
                element: 'morris_stacked',
                data: [
                    { x: '2011 Q1', y: 3, z: 2, a: 3 },
                    { x: '2011 Q2', y: 2, z: null, a: 1 },
                    { x: '2011 Q3', y: 0, z: 2, a: 4 },
                    { x: '2011 Q4', y: 2, z: 4, a: 3 }
                ],
                xkey: 'x',
                ykeys: ['y', 'z', 'a'],
                labels: ['Y', 'Z', 'A'],
                stacked: true,
                   barColors: ['#5969ff', '#ff407b', '#25d5f2'],
                     resize: true,
                        gridTextSize: '14px'
            });
        }


        if ($('#morris_udateing').length) {
            var nReloads = 0;

            function data(offset) {
                var ret = [];
                for (var x = 0; x <= 360; x += 10) {
                    var v = (offset + x) % 360;
                    ret.push({
                        x: x,
                        y: Math.sin(Math.PI * v / 180).toFixed(4),
                        z: Math.cos(Math.PI * v / 180).toFixed(4)
                    });
                }
                return ret;
            }
            var graph = Morris.Line({
                element: 'morris_udateing',
                data: data(0),
                xkey: 'x',
                ykeys: ['y', 'z'],
                labels: ['sin()', 'cos()'],
                parseTime: false,
                ymin: -1.0,
                ymax: 1.0,
                hideHover: true,
                lineColors: ['#5969ff', '#ff407b'],
                  resize: true
            });

            function update() {
                nReloads++;
                graph.setData(data(5 * nReloads));
                $('#reloadStatus').text(nReloads + ' reloads');
            }
            setInterval(update, 100);
        }


        if ($('#morris_donut').length) {
            Morris.Donut({
                element: 'morris_donut',
                data: [
                    { value: 70, label: 'foo' },
                    { value: 15, label: 'bar' },
                    { value: 10, label: 'baz' },
                    { value: 5, label: 'A really really long label' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                     "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750"
                               
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#HTML').length) {
            Morris.Donut({
                element: 'HTML',
                data: [
                    { value: 90, label: 'HTML' },
                    { value: 10, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#ea6228",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#MY').length) {
            Morris.Donut({
                element: 'MY',
                data: [
                    { value: 85, label: 'MySQL' },
                    { value: 15, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#005e86",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#CSS').length) {
            Morris.Donut({
                element: 'CSS',
                data: [
                    { value: 87, label: 'CSS' },
                    { value: 13, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#2aa3d9",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#boot').length) {
            Morris.Donut({
                element: 'boot',
                data: [
                    { value: 85, label: 'Bootstrap' },
                    { value: 15, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#2aa3d9",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#PHP').length) {
            Morris.Donut({
                element: 'PHP',
                data: [
                    { value: 90, label: 'PHP' },
                    { value: 10, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#697ab1",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#IONIC').length) {
            Morris.Donut({
                element: 'IONIC',
                data: [
                    { value: 70, label: 'IONIC' },
                    { value: 30, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#4c8af0",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#MVC').length) {
            Morris.Donut({
                element: 'MVC',
                data: [
                    { value: 50, label: 'ASP.NET MVC' },
                    { value: 50, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#1871b2",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }
        if ($('#ANDROID').length) {
            Morris.Donut({
                element: 'ANDROID',
                data: [
                    { value: 50, label: 'ANDROID STUDIO' },
                    { value: 50, label: 'NOT' }
                ],
             
                labelColor: '#2e2f39',
                   gridTextSize: '14px',
                colors: [
                        "#8dbf53",
                        "#d9d9d9"                 
                ],

                formatter: function(x) { return x + "%" },
                  resize: true
            });
        }





    });

})(window, document, window.jQuery);