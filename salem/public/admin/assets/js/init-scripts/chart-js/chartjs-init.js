( function ( $ ) {
    "use strict";
    var td1 = document.getElementById('taskArr1').value;
    var td2 = document.getElementById('taskArr2').value;
    var td3 = document.getElementById('taskArr3').value;
    var td4 = document.getElementById('taskArr4').value;
    var td5 = document.getElementById('taskArr5').value;
    var td6 = document.getElementById('taskArr6').value;
    var td7 = document.getElementById('taskArr7').value;
    var td8 = document.getElementById('taskArr8').value;
    var td9 = document.getElementById('taskArr9').value;
    var td10 = document.getElementById('taskArr10').value;
    var td11 = document.getElementById('taskArr11').value;
    var td12 = document.getElementById('taskArr12').value;
    //Team chart
    var ctx = document.getElementById( "team-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو", "يوليو","أغسطس", "سبتمبر","أكتوبر", "نوفمبر","ديسمبر" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                data: [td1, td2, td3, td4, td5, td6, td7, td8, td9, td10, td11, td12 ],
                label: "Expense",
                backgroundColor: 'rgba(0,103,255,.15)',
                borderColor: 'rgba(0,103,255,0.5)',
                borderWidth: 3.5,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(0,103,255,0.5)',
                    }, ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                position: 'top',
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },


            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'Month'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'Value'
                    }
                        } ]
            },
            title: {
                display: false,
            }
        }
    } );

    var id1 = document.getElementById('productArr1').value;
    var id2 = document.getElementById('productArr2').value;
    var id3 = document.getElementById('productArr3').value;
    var id4 = document.getElementById('productArr4').value;
    var id5 = document.getElementById('productArr5').value;
    var id6 = document.getElementById('productArr6').value;
    var id7 = document.getElementById('productArr7').value;
    var id8 = document.getElementById('productArr8').value;
    var id9 = document.getElementById('productArr9').value;
    var id10 = document.getElementById('productArr10').value;
    var id11 = document.getElementById('productArr11').value;
    var id12 = document.getElementById('productArr12').value;

    var od1 = document.getElementById('offerArr1').value;
    var od2 = document.getElementById('offerArr2').value;
    var od3 = document.getElementById('offerArr3').value;
    var od4 = document.getElementById('offerArr4').value;
    var od5 = document.getElementById('offerArr5').value;
    var od6 = document.getElementById('offerArr6').value;
    var od7 = document.getElementById('offerArr7').value;
    var od8 = document.getElementById('offerArr8').value;
    var od9 = document.getElementById('offerArr9').value;
    var od10 = document.getElementById('offerArr10').value;
    var od11 = document.getElementById('offerArr11').value;
    var od12 = document.getElementById('offerArr12').value;
    //Sales chart
    var ctx = document.getElementById( "sales-chart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو", "يوليو","أغسطس", "سبتمبر","أكتوبر", "نوفمبر","ديسمبر" ],
            type: 'line',
            defaultFontFamily: 'Montserrat',
            datasets: [ {
                label: "المنتجات",
                data: [id1, id2, id3, id4, id5, id6, id7, id8, id9, id10, id11, id12 ],
                backgroundColor: 'transparent',
                borderColor: 'rgba(220,53,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(220,53,69,0.75)',
                    }, {
                label: "العروض",
                data: [od1, od2, od3, od4, od5, od6, od7, od8, od9, od10, od11, od12 ],
                backgroundColor: 'transparent',
                borderColor: 'rgba(40,167,69,0.75)',
                borderWidth: 3,
                pointStyle: 'circle',
                pointRadius: 5,
                pointBorderColor: 'transparent',
                pointBackgroundColor: 'rgba(40,167,69,0.75)',
                    } ]
        },
        options: {
            responsive: true,

            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                titleFontFamily: 'Montserrat',
                bodyFontFamily: 'Montserrat',
                cornerRadius: 3,
                intersect: false,
            },
            legend: {
                display: false,
                labels: {
                    usePointStyle: true,
                    fontFamily: 'Montserrat',
                },
            },
            scales: {
                xAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: false,
                        labelString: 'الشهر'
                    }
                        } ],
                yAxes: [ {
                    display: true,
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'القيمة'
                    }
                        } ]
            },
            title: {
                display: false,
                text: 'Normal Legend'
            }
        }
    } );







    // //line chart
    // var ctx = document.getElementById( "lineChart" );
    // ctx.height = 150;
    // var myChart = new Chart( ctx, {
    //     type: 'line',
    //     data: {
    //         labels: [ "January", "February", "March", "April", "May", "June", "July" ],
    //         datasets: [
    //             {
    //                 label: "My First dataset",
    //                 borderColor: "rgba(0,0,0,.09)",
    //                 borderWidth: "1",
    //                 backgroundColor: "rgba(0,0,0,.07)",
    //                 data: [ 22, 44, 67, 43, 76, 45, 12 ]
    //                         },
    //             {
    //                 label: "My Second dataset",
    //                 borderColor: "rgba(0, 123, 255, 0.9)",
    //                 borderWidth: "1",
    //                 backgroundColor: "rgba(0, 123, 255, 0.5)",
    //                 pointHighlightStroke: "rgba(26,179,148,1)",
    //                 data: [ 16, 32, 18, 26, 42, 33, 44 ]
    //                         }
    //                     ]
    //     },
    //     options: {
    //         responsive: true,
    //         tooltips: {
    //             mode: 'index',
    //             intersect: false
    //         },
    //         hover: {
    //             mode: 'nearest',
    //             intersect: true
    //         }

    //     }
    // } );


    // //bar chart
    // var ctx = document.getElementById( "barChart" );
    // //    ctx.height = 200;
    // var myChart = new Chart( ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: [ "January", "February", "March", "April", "May", "June", "July" ],
    //         datasets: [
    //             {
    //                 label: "My First dataset",
    //                 data: [ 65, 59, 80, 81, 56, 55, 40 ],
    //                 borderColor: "rgba(0, 123, 255, 0.9)",
    //                 borderWidth: "0",
    //                 backgroundColor: "rgba(0, 123, 255, 0.5)"
    //                         },
    //             {
    //                 label: "My Second dataset",
    //                 data: [ 28, 48, 40, 19, 86, 27, 90 ],
    //                 borderColor: "rgba(0,0,0,0.09)",
    //                 borderWidth: "0",
    //                 backgroundColor: "rgba(0,0,0,0.07)"
    //                         }
    //                     ]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [ {
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //                             } ]
    //         }
    //     }
    // } );

    // //radar chart
    // var ctx = document.getElementById( "radarChart" );
    // ctx.height = 160;
    // var myChart = new Chart( ctx, {
    //     type: 'radar',
    //     data: {
    //         labels: [ [ "Eating", "Dinner" ], [ "Drinking", "Water" ], "Sleeping", [ "Designing", "Graphics" ], "Coding", "Cycling", "Running" ],
    //         datasets: [
    //             {
    //                 label: "My First dataset",
    //                 data: [ 65, 59, 66, 45, 56, 55, 40 ],
    //                 borderColor: "rgba(0, 123, 255, 0.6)",
    //                 borderWidth: "1",
    //                 backgroundColor: "rgba(0, 123, 255, 0.4)"
    //                         },
    //             {
    //                 label: "My Second dataset",
    //                 data: [ 28, 12, 40, 19, 63, 27, 87 ],
    //                 borderColor: "rgba(0, 123, 255, 0.7",
    //                 borderWidth: "1",
    //                 backgroundColor: "rgba(0, 123, 255, 0.5)"
    //                         }
    //                     ]
    //     },
    //     options: {
    //         legend: {
    //             position: 'top'
    //         },
    //         scale: {
    //             ticks: {
    //                 beginAtZero: true
    //             }
    //         }
    //     }
    // } );


    // //pie chart
    // var ctx = document.getElementById( "pieChart" );
    // ctx.height = 300;
    // var myChart = new Chart( ctx, {
    //     type: 'pie',
    //     data: {
    //         datasets: [ {
    //             data: [ 45, 25, 20, 10 ],
    //             backgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0, 123, 255,0.5)",
    //                                 "rgba(0,0,0,0.07)"
    //                             ],
    //             hoverBackgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0, 123, 255,0.5)",
    //                                 "rgba(0,0,0,0.07)"
    //                             ]

    //                         } ],
    //         labels: [
    //                         "green",
    //                         "green",
    //                         "green"
    //                     ]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // } );

    // //doughut chart
    // var ctx = document.getElementById( "doughutChart" );
    // ctx.height = 150;
    // var myChart = new Chart( ctx, {
    //     type: 'doughnut',
    //     data: {
    //         datasets: [ {
    //             data: [ 45, 25, 20, 10 ],
    //             backgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0, 123, 255,0.5)",
    //                                 "rgba(0,0,0,0.07)"
    //                             ],
    //             hoverBackgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0, 123, 255,0.5)",
    //                                 "rgba(0,0,0,0.07)"
    //                             ]

    //                         } ],
    //         labels: [
    //                         "green",
    //                         "green",
    //                         "green",
    //                         "green"
    //                     ]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // } );

    // //polar chart
    // var ctx = document.getElementById( "polarChart" );
    // ctx.height = 150;
    // var myChart = new Chart( ctx, {
    //     type: 'polarArea',
    //     data: {
    //         datasets: [ {
    //             data: [ 15, 18, 9, 6, 19 ],
    //             backgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.8)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0,0,0,0.2)",
    //                                 "rgba(0, 123, 255,0.5)"
    //                             ]

    //                         } ],
    //         labels: [
    //                         "green",
    //                         "green",
    //                         "green",
    //                         "green"
    //                     ]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // } );

    // // single bar chart
    // var ctx = document.getElementById( "singelBarChart" );
    // ctx.height = 150;
    // var myChart = new Chart( ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: [ "Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat" ],
    //         datasets: [
    //             {
    //                 label: "My First dataset",
    //                 data: [ 40, 55, 75, 81, 56, 55, 40 ],
    //                 borderColor: "rgba(0, 123, 255, 0.9)",
    //                 borderWidth: "0",
    //                 backgroundColor: "rgba(0, 123, 255, 0.5)"
    //                         }
    //                     ]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [ {
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //                             } ]
    //         }
    //     }
    // } );




} )( jQuery );
