"use strict";

var KTDatatableRemoteAjaxDemo = function() {
  
    var demo = function() {

        var datatable = $('.kt-datatable').KTDatatable({
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'https://covid19.ae10.co/dataset/dataset.php',
                        map: function(raw) {
                            var dataSet = raw;
                            if (typeof raw.data !== 'undefined') {
                                dataSet = raw.data;
                            }
                            return dataSet;
                        },
                    },
                },
                pageSize: 10,
                serverPaging: false,
                serverFiltering: true,
                serverSorting: true,
            },

            layout: {
                scroll: false,
                footer: false,
            },

            sortable: true,

            pagination: true,

            search: {
                input: $('#generalSearch'),
            },

            columns: [
                
                {
                    field: 'date',
                    title: 'Tarih',
                    type : 'date',
                    textAlign: 'center',
                },
                
                {
                    field: 'cases',
                    title: 'Vaka Sayısı',
                    sortable: 'asc',
                    type: 'number',
                    selector: false,
                    textAlign: 'center',
                }, 
                
                {
                    field: 'tests',
                    title: 'Test Sayısı',
                    type: 'number',
                    textAlign: 'center',
                },
                
                
                
                {
                    field: 'deaths',
                    title: 'Vefat Sayısı',
                    textAlign: 'center',
                    
                },
                
                {
                    field: 'recovered',
                    title: 'İyileşen Kişi Sayısı',
                    textAlign: 'center',
                   
                },
                
                {
                    field: 'totalCases',
                    title: 'Toplam Vaka Sayısı',
                    textAlign: 'center',
                },
                
                
                {
                    field: 'totalDeaths',
                    title: 'Toplam Vefat Eden Kişi Sayısı',
                    textAlign: 'center',
                    
                }, 
                {
                    field: 'totalRecovered',
                    title: 'Toplam İyileşen Kişi Sayısı',
                    textAlign: 'center',
                }, 
                
                {
                    field: 'totalTests',
                    title: 'Toplam Yapılan Test Sayısı',
                    textAlign: 'center',
                },
                
                {
                    field: 'totalIntubated',
                    title: 'Toplam Entübe Hasta Sayısı',
                    textAlign: 'center',
                },
                
                {
                    field: 'totalIntensiveCare',
                    title: 'Toplam Yoğun Bakım Hasta Sayısı',
                    textAlign: 'center',
                },
                
                ],

        });

    };

    return {
        // public functions
        init: function() {
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableRemoteAjaxDemo.init();
});
