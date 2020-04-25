<!DOCTYPE html>

<!--
Author: Kaya Unal
Website: ae10.co
Contributing : Ozan Ertürk
Contact: k@ae10.co/kayaunal92@gmail.com
-->


<html lang="tr">

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

    <title>COVID19 | Haritası</title>
    <meta name="description" content="COVID19 | Grafiksel Artış Haritası">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">




    <link href="{{ asset('css/plugins.bundle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet">
    <script type="js" src="{{ asset('js/global/plugins.bundle.js') }}"></script>

</head>

<body class="kt-page--loading-enabled kt-page--loading kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

@foreach ($data as $user)
    <p>This is user {{ $user->id }}</p>
    <p></p>
@endforeach



<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-container ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title">COVID-19 Güncel Grafiksel Artış Haritası</h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <span class="kt-subheader__desc">V1.0</span>

                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="https://covid19.ae10.co/dataset/dataset.php" class="btn kt-subheader__btn-primary">
                            JSON API
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Content Head -->

        <!-- begin:: Content -->
        <div class="kt-container  kt-grid__item kt-grid__item--fluid">
            <div class="alert alert-light alert-elevate" role="alert">
                <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                <div class="alert-text">
                    Başkent Üniversitesi İnternet Programcılığı(BILP202) Projesidir Tüm Hakları Saklı Değildir Saklı Olanlar Var Ama !
                </div>
            </div>

            <div class="kt-portlet kt-portlet--tab">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
											<span class="kt-portlet__head-icon kt-hidden">
											    <i class="la la-gear"></i>
											</span>
                        <h3 class="kt-portlet__head-title">
                            Çizgi Grafik
                        </h3>
                        <div class="kt-portlet__head-toolbar" style="margin-left:15px;">
                            Son 30 Güne Ait Günlük Veriler
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div id="kt_morris_1" style="height:500px;"></div>
                </div>
            </div>

            <!--begin::Portlet-->

            <div class="kt-portlet kt-portlet--tab">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
													<span class="kt-portlet__head-icon kt-hidden">
														<i class="la la-gear"></i>
													</span>
                        <h3 class="kt-portlet__head-title">
                            Çubuk Grafik
                        </h3>
                        <div class="kt-portlet__head-toolbar" style="margin-left:15px;">
                            Son 30 Güne Ait Günlük Veriler
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div id="kt_morris_3" style="height:300px;"></div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">

                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Durum Analizi
                                </h3>
                            </div>
                        </div>
                        <div class="kt-portlet__body" style="height:350px">
                            <div class="accordion accordion-light accordion-toggle-plus" id="accordionExample3">

                                <div class="card">
                                    <div class="card-header" id="headingOne3">
                                        <div class="card-title" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                            Basit İstatistik
                                        </div>
                                    </div>
                                    <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordionExample3">
                                        <div class="card-body">

                                            Türkiye'de en çok COVID-19 testinin yapıldığın gün <b></b> tarihinde <b></b>'dir. Test sonucunda <b></b>
                                            hasta pozitif çıkmıştır.
                                            <br><br>



                                            Türkiye'de en çok görülen pozitif vaka <b></b> tarihinde <b></b>'dir. Aynı gün, toplamda <b></b> test yapılmıştır.
                                            <br><br>



                                            Türkiye'de en çok iyileşen hasta sayısı <b></b> tarihinde <b><</b> kişidir. Aynı gün <b></b> hasta hayatını kaybetmiştir.
                                            <br><br>



                                            Türkiye'de aynı gün en çok vefat eden hasta sayısı <b></b> tarihinde <b></b> kişidir.
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>

                    <!--end::Portlet-->

                </div>

                <div class="col-lg-6">

                    <div class="kt-portlet kt-portlet--tab">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
													<span class="kt-portlet__head-icon kt-hidden">
														<i class="la la-gear"></i>
													</span>
                                <h3 class="kt-portlet__head-title">
                                    Pasta Grafik
                                </h3>
                                <div class="kt-portlet__head-toolbar" style="margin-left:15px;">
                                    Son 30 Güne Ait Günlük Veriler
                                </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div id="kt_amcharts_12" style="height:300px;"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Günlük Veriler
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        Son 30 Güne Ait Günlük Veriler
                    </div>

                </div>

                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-datatable" id="ajax_data"></div>
                </div>
            </div>
        </div>

        <!-- end:: Content -->
    </div>
</div>
</div>
</div>
</div>

<!-- end:: Page -->

<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
<!-- end::Scrolltop -->

<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#374afb",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<script src="js/plugins.bundle.js" type="text/javascript"></script>
<script src="js/scripts.bundle.js" type="text/javascript"></script>

<script src="js/amchart.js" type="text/javascript"></script>
<script src="//www.amcharts.com/lib/3/pie.js" type="text/javascript"></script>

<script src="js/data-ajax.js" type="text/javascript"></script>




</body>
</html>
