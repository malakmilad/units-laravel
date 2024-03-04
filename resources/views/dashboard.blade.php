@extends('layouts.dashborad.admin')
@section('page-title')
    Welcome
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <!-- Sales Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Sales <span>| Today</span></h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Revenue <span>| This Month</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>$3,264</h6>
                                    <span class="text-success small pt-1 fw-bold">8%</span> <span
                                        class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Customers <span>| This Year</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>1244</h6>
                                    <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                        class="text-muted small pt-2 ps-1">decrease</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->

                <!-- Reports -->
                <div class="col-12">
                    <div class="card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Reports <span>/Today</span></h5>

                            <!-- Line Chart -->
                            <div id="reportsChart" style="min-height: 365px;">
                                <div id="apexchartspf1s4x5g"
                                    class="apexcharts-canvas apexchartspf1s4x5g apexcharts-theme-light"
                                    style="width: 725px; height: 350px;"><svg id="SvgjsSvg1001" width="725"
                                        height="350" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable hovering-zoom" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <foreignObject x="0" y="0" width="725" height="350">
                                            <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                xmlns="http://www.w3.org/1999/xhtml"
                                                style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                <div class="apexcharts-legend-series" rel="1" seriesname="Sales"
                                                    data:collapsed="false" style="margin: 2px 5px;"><span
                                                        class="apexcharts-legend-marker" rel="1"
                                                        data:collapsed="false"
                                                        style="background: rgb(65, 84, 241) !important; color: rgb(65, 84, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                        data:default-text="Sales" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="2" seriesname="Revenue"
                                                    data:collapsed="false" style="margin: 2px 5px;"><span
                                                        class="apexcharts-legend-marker" rel="2"
                                                        data:collapsed="false"
                                                        style="background: rgb(46, 202, 106) !important; color: rgb(46, 202, 106); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                        data:default-text="Revenue" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                </div>
                                                <div class="apexcharts-legend-series" rel="3"
                                                    seriesname="Customers" data:collapsed="false"
                                                    style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                        rel="3" data:collapsed="false"
                                                        style="background: rgb(255, 119, 29) !important; color: rgb(255, 119, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                        class="apexcharts-legend-text" rel="3" i="2"
                                                        data:default-text="Customers" data:collapsed="false"
                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span>
                                                </div>
                                            </div>
                                            <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                            </style>
                                        </foreignObject>
                                        <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(45.63535118103027, 30)">
                                            <defs id="SvgjsDefs1002">
                                                <clipPath id="gridRectMaskpf1s4x5g">
                                                    <rect id="SvgjsRect1013" width="675.3646488189697"
                                                        height="272.6799995422363" x="-3" y="-1" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMaskpf1s4x5g"></clipPath>
                                                <clipPath id="nonForecastMaskpf1s4x5g"></clipPath>
                                                <clipPath id="gridRectMarkerMaskpf1s4x5g">
                                                    <rect id="SvgjsRect1014" width="689.3646488189697"
                                                        height="290.6799995422363" x="-10" y="-10" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1032" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1033" stop-opacity="0.3"
                                                        stop-color="rgba(65,84,241,0.3)" offset="0"></stop>
                                                    <stop id="SvgjsStop1034" stop-opacity="0.4"
                                                        stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1035" stop-opacity="0.4"
                                                        stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1054" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1055" stop-opacity="0.3"
                                                        stop-color="rgba(46,202,106,0.3)" offset="0"></stop>
                                                    <stop id="SvgjsStop1056" stop-opacity="0.4"
                                                        stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1057" stop-opacity="0.4"
                                                        stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                </linearGradient>
                                                <linearGradient id="SvgjsLinearGradient1076" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1077" stop-opacity="0.3"
                                                        stop-color="rgba(255,119,29,0.3)" offset="0"></stop>
                                                    <stop id="SvgjsStop1078" stop-opacity="0.4"
                                                        stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop>
                                                    <stop id="SvgjsStop1079" stop-opacity="0.4"
                                                        stop-color="rgba(255,255,255,0.4)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1009" x1="153.96876511206995" y1="0"
                                                x2="153.96876511206995" y2="270.6799995422363" stroke="#b6b6b6"
                                                stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs"
                                                x="153.96876511206995" y="0" width="1" height="270.6799995422363"
                                                fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                            </line>
                                            <g id="SvgjsG1082" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1083" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1085"
                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1086">00:00</tspan>
                                                        <title>00:00</title>
                                                    </text><text id="SvgjsText1088"
                                                        font-family="Helvetica, Arial, sans-serif" x="102.97917674137996"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1089">01:00</tspan>
                                                        <title>01:00</title>
                                                    </text><text id="SvgjsText1091"
                                                        font-family="Helvetica, Arial, sans-serif" x="205.95835348275992"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1092">02:00</tspan>
                                                        <title>02:00</title>
                                                    </text><text id="SvgjsText1094"
                                                        font-family="Helvetica, Arial, sans-serif" x="308.9375302241399"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1095">03:00</tspan>
                                                        <title>03:00</title>
                                                    </text><text id="SvgjsText1097"
                                                        font-family="Helvetica, Arial, sans-serif" x="411.91670696551984"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1098">04:00</tspan>
                                                        <title>04:00</title>
                                                    </text><text id="SvgjsText1100"
                                                        font-family="Helvetica, Arial, sans-serif" x="514.8958837068998"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1101">05:00</tspan>
                                                        <title>05:00</title>
                                                    </text><text id="SvgjsText1103"
                                                        font-family="Helvetica, Arial, sans-serif" x="617.8750604482798"
                                                        y="299.6799995422363" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="12px" font-weight="400"
                                                        fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1104">06:00</tspan>
                                                        <title>06:00</title>
                                                    </text></g>
                                                <line id="SvgjsLine1105" x1="0" y1="271.6799995422363"
                                                    x2="669.3646488189697" y2="271.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1120" class="apexcharts-grid">
                                                <g id="SvgjsG1121" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1130" x1="0" y1="0"
                                                        x2="669.3646488189697" y2="0" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1131" x1="0" y1="54.13599990844726"
                                                        x2="669.3646488189697" y2="54.13599990844726" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1132" x1="0" y1="108.27199981689452"
                                                        x2="669.3646488189697" y2="108.27199981689452" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1133" x1="0" y1="162.40799972534177"
                                                        x2="669.3646488189697" y2="162.40799972534177" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1134" x1="0" y1="216.54399963378904"
                                                        x2="669.3646488189697" y2="216.54399963378904" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1135" x1="0" y1="270.6799995422363"
                                                        x2="669.3646488189697" y2="270.6799995422363" stroke="#e0e0e0"
                                                        stroke-dasharray="0" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1122" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1123" x1="0" y1="271.6799995422363"
                                                    x2="0" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1124" x1="102.97917674137996" y1="271.6799995422363"
                                                    x2="102.97917674137996" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1125" x1="205.95835348275992" y1="271.6799995422363"
                                                    x2="205.95835348275992" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1126" x1="308.9375302241399" y1="271.6799995422363"
                                                    x2="308.9375302241399" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1127" x1="411.91670696551984" y1="271.6799995422363"
                                                    x2="411.91670696551984" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1128" x1="514.8958837068998" y1="271.6799995422363"
                                                    x2="514.8958837068998" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1129" x1="617.8750604482798" y1="271.6799995422363"
                                                    x2="617.8750604482798" y2="277.6799995422363" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick">
                                                </line>
                                                <line id="SvgjsLine1137" x1="0" y1="270.6799995422363"
                                                    x2="669.3646488189697" y2="270.6799995422363" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1136" x1="0" y1="1" x2="0"
                                                    y2="270.6799995422363" stroke="transparent" stroke-dasharray="0"
                                                    stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1015" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1016" class="apexcharts-series" seriesName="Sales"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1036"
                                                        d="M0 270.6799995422363L0 186.76919968414308C54.06406778922448 186.76919968414308 100.40469732284546 162.40799972534177 154.46876511206995 162.40799972534177C190.51147697155292 162.40799972534177 221.4052299939669 194.88959967041015 257.4479418534499 194.88959967041015C293.49065371293284 194.88959967041015 324.38440673534683 132.6331997756958 360.42711859482984 132.6331997756958C396.46983045431284 132.6331997756958 427.36358347672683 156.99439973449705 463.4062953362098 156.99439973449705C499.44900719569273 156.99439973449705 530.3427602181067 48.72239991760253 566.3854720775897 48.72239991760253C602.4281839370727 48.72239991760253 633.3219369594867 119.09919979858398 669.3646488189697 119.09919979858398C669.3646488189697 119.09919979858398 669.3646488189697 119.09919979858398 669.3646488189697 270.6799995422363M669.3646488189697 119.09919979858398C669.3646488189697 119.09919979858398 669.3646488189697 119.09919979858398 669.3646488189697 119.09919979858398 "
                                                        fill="url(#SvgjsLinearGradient1032)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskpf1s4x5g)"
                                                        pathTo="M 0 270.6799995422363L 0 186.76919968414308C 54.06406778922448 186.76919968414308 100.40469732284546 162.40799972534177 154.46876511206995 162.40799972534177C 190.51147697155292 162.40799972534177 221.4052299939669 194.88959967041015 257.4479418534499 194.88959967041015C 293.49065371293284 194.88959967041015 324.38440673534683 132.6331997756958 360.42711859482984 132.6331997756958C 396.46983045431284 132.6331997756958 427.36358347672683 156.99439973449705 463.4062953362098 156.99439973449705C 499.44900719569273 156.99439973449705 530.3427602181067 48.72239991760253 566.3854720775897 48.72239991760253C 602.4281839370727 48.72239991760253 633.3219369594867 119.09919979858398 669.3646488189697 119.09919979858398C 669.3646488189697 119.09919979858398 669.3646488189697 119.09919979858398 669.3646488189697 270.6799995422363M 669.3646488189697 119.09919979858398z"
                                                        pathFrom="M -1 270.6799995422363L -1 270.6799995422363L 154.46876511206995 270.6799995422363L 257.4479418534499 270.6799995422363L 360.42711859482984 270.6799995422363L 463.4062953362098 270.6799995422363L 566.3854720775897 270.6799995422363L 669.3646488189697 270.6799995422363">
                                                    </path>
                                                    <path id="SvgjsPath1037"
                                                        d="M0 186.76919968414308C54.06406778922448 186.76919968414308 100.40469732284546 162.40799972534177 154.46876511206995 162.40799972534177C190.51147697155292 162.40799972534177 221.4052299939669 194.88959967041015 257.4479418534499 194.88959967041015C293.49065371293284 194.88959967041015 324.38440673534683 132.6331997756958 360.42711859482984 132.6331997756958C396.46983045431284 132.6331997756958 427.36358347672683 156.99439973449705 463.4062953362098 156.99439973449705C499.44900719569273 156.99439973449705 530.3427602181067 48.72239991760253 566.3854720775897 48.72239991760253C602.4281839370727 48.72239991760253 633.3219369594867 119.09919979858398 669.3646488189697 119.09919979858398C669.3646488189697 119.09919979858398 669.3646488189697 119.09919979858398 669.3646488189697 119.09919979858398 "
                                                        fill="none" fill-opacity="1" stroke="#4154f1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMaskpf1s4x5g)"
                                                        pathTo="M 0 186.76919968414308C 54.06406778922448 186.76919968414308 100.40469732284546 162.40799972534177 154.46876511206995 162.40799972534177C 190.51147697155292 162.40799972534177 221.4052299939669 194.88959967041015 257.4479418534499 194.88959967041015C 293.49065371293284 194.88959967041015 324.38440673534683 132.6331997756958 360.42711859482984 132.6331997756958C 396.46983045431284 132.6331997756958 427.36358347672683 156.99439973449705 463.4062953362098 156.99439973449705C 499.44900719569273 156.99439973449705 530.3427602181067 48.72239991760253 566.3854720775897 48.72239991760253C 602.4281839370727 48.72239991760253 633.3219369594867 119.09919979858398 669.3646488189697 119.09919979858398"
                                                        pathFrom="M -1 270.6799995422363L -1 270.6799995422363L 154.46876511206995 270.6799995422363L 257.4479418534499 270.6799995422363L 360.42711859482984 270.6799995422363L 463.4062953362098 270.6799995422363L 566.3854720775897 270.6799995422363L 669.3646488189697 270.6799995422363">
                                                    </path>
                                                    <g id="SvgjsG1017" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g id="SvgjsG1019" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1020" r="4" cx="0"
                                                                cy="186.76919968414308"
                                                                class="apexcharts-marker no-pointer-events w70r1flij"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                j="0" index="0" default-marker-size="4"></circle>
                                                            <circle id="SvgjsCircle1021" r="4" cx="154.46876511206995"
                                                                cy="162.40799972534177"
                                                                class="apexcharts-marker no-pointer-events wyc9uluw6"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                j="1" index="0" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1022" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1023" r="4" cx="257.4479418534499"
                                                                cy="194.88959967041015"
                                                                class="apexcharts-marker no-pointer-events w4z6zbyhf"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                j="2" index="0" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1024" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1025" r="4" cx="360.42711859482984"
                                                                cy="132.6331997756958"
                                                                class="apexcharts-marker no-pointer-events wtgll19va"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                j="3" index="0" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1026" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1027" r="4" cx="463.4062953362098"
                                                                cy="156.99439973449705"
                                                                class="apexcharts-marker no-pointer-events we6zktlgr"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                j="4" index="0" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1028" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1029" r="4" cx="566.3854720775897"
                                                                cy="48.72239991760253"
                                                                class="apexcharts-marker no-pointer-events whoc1z356"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                j="5" index="0" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1030" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1031" r="4" cx="669.3646488189697"
                                                                cy="119.09919979858398"
                                                                class="apexcharts-marker no-pointer-events wr45pud6o"
                                                                stroke="#ffffff" fill="#4154f1" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                j="6" index="0" default-marker-size="4"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1038" class="apexcharts-series" seriesName="Revenue"
                                                    data:longestSeries="true" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1058"
                                                        d="M0 270.6799995422363L0 240.90519959259032C54.06406778922448 240.90519959259032 100.40469732284546 184.0623996887207 154.46876511206995 184.0623996887207C190.51147697155292 184.0623996887207 221.4052299939669 148.87399974822998 257.4479418534499 148.87399974822998C293.49065371293284 148.87399974822998 324.38440673534683 184.0623996887207 360.42711859482984 184.0623996887207C396.46983045431284 184.0623996887207 427.36358347672683 178.64879969787597 463.4062953362098 178.64879969787597C499.44900719569273 178.64879969787597 530.3427602181067 129.92639978027344 566.3854720775897 129.92639978027344C602.4281839370727 129.92639978027344 633.3219369594867 159.70119972991944 669.3646488189697 159.70119972991944C669.3646488189697 159.70119972991944 669.3646488189697 159.70119972991944 669.3646488189697 270.6799995422363M669.3646488189697 159.70119972991944C669.3646488189697 159.70119972991944 669.3646488189697 159.70119972991944 669.3646488189697 159.70119972991944 "
                                                        fill="url(#SvgjsLinearGradient1054)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="1"
                                                        clip-path="url(#gridRectMaskpf1s4x5g)"
                                                        pathTo="M 0 270.6799995422363L 0 240.90519959259032C 54.06406778922448 240.90519959259032 100.40469732284546 184.0623996887207 154.46876511206995 184.0623996887207C 190.51147697155292 184.0623996887207 221.4052299939669 148.87399974822998 257.4479418534499 148.87399974822998C 293.49065371293284 148.87399974822998 324.38440673534683 184.0623996887207 360.42711859482984 184.0623996887207C 396.46983045431284 184.0623996887207 427.36358347672683 178.64879969787597 463.4062953362098 178.64879969787597C 499.44900719569273 178.64879969787597 530.3427602181067 129.92639978027344 566.3854720775897 129.92639978027344C 602.4281839370727 129.92639978027344 633.3219369594867 159.70119972991944 669.3646488189697 159.70119972991944C 669.3646488189697 159.70119972991944 669.3646488189697 159.70119972991944 669.3646488189697 270.6799995422363M 669.3646488189697 159.70119972991944z"
                                                        pathFrom="M -1 270.6799995422363L -1 270.6799995422363L 154.46876511206995 270.6799995422363L 257.4479418534499 270.6799995422363L 360.42711859482984 270.6799995422363L 463.4062953362098 270.6799995422363L 566.3854720775897 270.6799995422363L 669.3646488189697 270.6799995422363">
                                                    </path>
                                                    <path id="SvgjsPath1059"
                                                        d="M0 240.90519959259032C54.06406778922448 240.90519959259032 100.40469732284546 184.0623996887207 154.46876511206995 184.0623996887207C190.51147697155292 184.0623996887207 221.4052299939669 148.87399974822998 257.4479418534499 148.87399974822998C293.49065371293284 148.87399974822998 324.38440673534683 184.0623996887207 360.42711859482984 184.0623996887207C396.46983045431284 184.0623996887207 427.36358347672683 178.64879969787597 463.4062953362098 178.64879969787597C499.44900719569273 178.64879969787597 530.3427602181067 129.92639978027344 566.3854720775897 129.92639978027344C602.4281839370727 129.92639978027344 633.3219369594867 159.70119972991944 669.3646488189697 159.70119972991944C669.3646488189697 159.70119972991944 669.3646488189697 159.70119972991944 669.3646488189697 159.70119972991944 "
                                                        fill="none" fill-opacity="1" stroke="#2eca6a"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="1"
                                                        clip-path="url(#gridRectMaskpf1s4x5g)"
                                                        pathTo="M 0 240.90519959259032C 54.06406778922448 240.90519959259032 100.40469732284546 184.0623996887207 154.46876511206995 184.0623996887207C 190.51147697155292 184.0623996887207 221.4052299939669 148.87399974822998 257.4479418534499 148.87399974822998C 293.49065371293284 148.87399974822998 324.38440673534683 184.0623996887207 360.42711859482984 184.0623996887207C 396.46983045431284 184.0623996887207 427.36358347672683 178.64879969787597 463.4062953362098 178.64879969787597C 499.44900719569273 178.64879969787597 530.3427602181067 129.92639978027344 566.3854720775897 129.92639978027344C 602.4281839370727 129.92639978027344 633.3219369594867 159.70119972991944 669.3646488189697 159.70119972991944"
                                                        pathFrom="M -1 270.6799995422363L -1 270.6799995422363L 154.46876511206995 270.6799995422363L 257.4479418534499 270.6799995422363L 360.42711859482984 270.6799995422363L 463.4062953362098 270.6799995422363L 566.3854720775897 270.6799995422363L 669.3646488189697 270.6799995422363">
                                                    </path>
                                                    <g id="SvgjsG1039" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="1">
                                                        <g id="SvgjsG1041" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1042" r="4" cx="0"
                                                                cy="240.90519959259032"
                                                                class="apexcharts-marker no-pointer-events wx0nxsuky"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                j="0" index="1" default-marker-size="4"></circle>
                                                            <circle id="SvgjsCircle1043" r="4" cx="154.46876511206995"
                                                                cy="184.0623996887207"
                                                                class="apexcharts-marker no-pointer-events wekj1xteq"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                j="1" index="1" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1044" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1045" r="4" cx="257.4479418534499"
                                                                cy="148.87399974822998"
                                                                class="apexcharts-marker no-pointer-events w41iq5cqrf"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                j="2" index="1" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1046" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1047" r="4" cx="360.42711859482984"
                                                                cy="184.0623996887207"
                                                                class="apexcharts-marker no-pointer-events w4niw82fy"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                j="3" index="1" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1048" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1049" r="4" cx="463.4062953362098"
                                                                cy="178.64879969787597"
                                                                class="apexcharts-marker no-pointer-events ww6xcal9b"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                j="4" index="1" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1050" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1051" r="4" cx="566.3854720775897"
                                                                cy="129.92639978027344"
                                                                class="apexcharts-marker no-pointer-events wjy7kl9g1"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                j="5" index="1" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1052" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1053" r="4" cx="669.3646488189697"
                                                                cy="159.70119972991944"
                                                                class="apexcharts-marker no-pointer-events wccs2zy5e"
                                                                stroke="#ffffff" fill="#2eca6a" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                j="6" index="1" default-marker-size="4"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1060" class="apexcharts-series" seriesName="Customers"
                                                    data:longestSeries="true" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1080"
                                                        d="M0 270.6799995422363L0 230.07799961090086C54.06406778922448 230.07799961090086 100.40469732284546 240.90519959259032 154.46876511206995 240.90519959259032C190.51147697155292 240.90519959259032 221.4052299939669 184.0623996887207 257.4479418534499 184.0623996887207C293.49065371293284 184.0623996887207 324.38440673534683 221.9575996246338 360.42711859482984 221.9575996246338C396.46983045431284 221.9575996246338 427.36358347672683 246.31879958343504 463.4062953362098 246.31879958343504C499.44900719569273 246.31879958343504 530.3427602181067 205.7167996520996 566.3854720775897 205.7167996520996C602.4281839370727 205.7167996520996 633.3219369594867 240.90519959259032 669.3646488189697 240.90519959259032C669.3646488189697 240.90519959259032 669.3646488189697 240.90519959259032 669.3646488189697 270.6799995422363M669.3646488189697 240.90519959259032C669.3646488189697 240.90519959259032 669.3646488189697 240.90519959259032 669.3646488189697 240.90519959259032 "
                                                        fill="url(#SvgjsLinearGradient1076)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="2"
                                                        clip-path="url(#gridRectMaskpf1s4x5g)"
                                                        pathTo="M 0 270.6799995422363L 0 230.07799961090086C 54.06406778922448 230.07799961090086 100.40469732284546 240.90519959259032 154.46876511206995 240.90519959259032C 190.51147697155292 240.90519959259032 221.4052299939669 184.0623996887207 257.4479418534499 184.0623996887207C 293.49065371293284 184.0623996887207 324.38440673534683 221.9575996246338 360.42711859482984 221.9575996246338C 396.46983045431284 221.9575996246338 427.36358347672683 246.31879958343504 463.4062953362098 246.31879958343504C 499.44900719569273 246.31879958343504 530.3427602181067 205.7167996520996 566.3854720775897 205.7167996520996C 602.4281839370727 205.7167996520996 633.3219369594867 240.90519959259032 669.3646488189697 240.90519959259032C 669.3646488189697 240.90519959259032 669.3646488189697 240.90519959259032 669.3646488189697 270.6799995422363M 669.3646488189697 240.90519959259032z"
                                                        pathFrom="M -1 270.6799995422363L -1 270.6799995422363L 154.46876511206995 270.6799995422363L 257.4479418534499 270.6799995422363L 360.42711859482984 270.6799995422363L 463.4062953362098 270.6799995422363L 566.3854720775897 270.6799995422363L 669.3646488189697 270.6799995422363">
                                                    </path>
                                                    <path id="SvgjsPath1081"
                                                        d="M0 230.07799961090086C54.06406778922448 230.07799961090086 100.40469732284546 240.90519959259032 154.46876511206995 240.90519959259032C190.51147697155292 240.90519959259032 221.4052299939669 184.0623996887207 257.4479418534499 184.0623996887207C293.49065371293284 184.0623996887207 324.38440673534683 221.9575996246338 360.42711859482984 221.9575996246338C396.46983045431284 221.9575996246338 427.36358347672683 246.31879958343504 463.4062953362098 246.31879958343504C499.44900719569273 246.31879958343504 530.3427602181067 205.7167996520996 566.3854720775897 205.7167996520996C602.4281839370727 205.7167996520996 633.3219369594867 240.90519959259032 669.3646488189697 240.90519959259032C669.3646488189697 240.90519959259032 669.3646488189697 240.90519959259032 669.3646488189697 240.90519959259032 "
                                                        fill="none" fill-opacity="1" stroke="#ff771d"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="2"
                                                        clip-path="url(#gridRectMaskpf1s4x5g)"
                                                        pathTo="M 0 230.07799961090086C 54.06406778922448 230.07799961090086 100.40469732284546 240.90519959259032 154.46876511206995 240.90519959259032C 190.51147697155292 240.90519959259032 221.4052299939669 184.0623996887207 257.4479418534499 184.0623996887207C 293.49065371293284 184.0623996887207 324.38440673534683 221.9575996246338 360.42711859482984 221.9575996246338C 396.46983045431284 221.9575996246338 427.36358347672683 246.31879958343504 463.4062953362098 246.31879958343504C 499.44900719569273 246.31879958343504 530.3427602181067 205.7167996520996 566.3854720775897 205.7167996520996C 602.4281839370727 205.7167996520996 633.3219369594867 240.90519959259032 669.3646488189697 240.90519959259032"
                                                        pathFrom="M -1 270.6799995422363L -1 270.6799995422363L 154.46876511206995 270.6799995422363L 257.4479418534499 270.6799995422363L 360.42711859482984 270.6799995422363L 463.4062953362098 270.6799995422363L 566.3854720775897 270.6799995422363L 669.3646488189697 270.6799995422363">
                                                    </path>
                                                    <g id="SvgjsG1061" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="2">
                                                        <g id="SvgjsG1063" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1064" r="4" cx="0"
                                                                cy="230.07799961090086"
                                                                class="apexcharts-marker no-pointer-events wngkjmcfq"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="0"
                                                                j="0" index="2" default-marker-size="4"></circle>
                                                            <circle id="SvgjsCircle1065" r="4" cx="154.46876511206995"
                                                                cy="240.90519959259032"
                                                                class="apexcharts-marker no-pointer-events wxb4etfx5"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="1"
                                                                j="1" index="2" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1066" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1067" r="4" cx="257.4479418534499"
                                                                cy="184.0623996887207"
                                                                class="apexcharts-marker no-pointer-events wh54yxuf6"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="2"
                                                                j="2" index="2" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1068" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1069" r="4" cx="360.42711859482984"
                                                                cy="221.9575996246338"
                                                                class="apexcharts-marker no-pointer-events wb1o5oa5g"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="3"
                                                                j="3" index="2" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1070" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1071" r="4" cx="463.4062953362098"
                                                                cy="246.31879958343504"
                                                                class="apexcharts-marker no-pointer-events wmpgvze8sk"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="4"
                                                                j="4" index="2" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1072" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1073" r="4" cx="566.3854720775897"
                                                                cy="205.7167996520996"
                                                                class="apexcharts-marker no-pointer-events wgv194xws"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="5"
                                                                j="5" index="2" default-marker-size="4"></circle>
                                                        </g>
                                                        <g id="SvgjsG1074" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMaskpf1s4x5g)">
                                                            <circle id="SvgjsCircle1075" r="4" cx="669.3646488189697"
                                                                cy="240.90519959259032"
                                                                class="apexcharts-marker no-pointer-events wicoh65k2"
                                                                stroke="#ffffff" fill="#ff771d" fill-opacity="1"
                                                                stroke-width="2" stroke-opacity="0.9" rel="6"
                                                                j="6" index="2" default-marker-size="4"></circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1018" class="apexcharts-datalabels" data:realIndex="0"></g>
                                                <g id="SvgjsG1040" class="apexcharts-datalabels" data:realIndex="1"></g>
                                                <g id="SvgjsG1062" class="apexcharts-datalabels" data:realIndex="2"></g>
                                            </g>
                                            <line id="SvgjsLine1138" x1="0" y1="0"
                                                x2="669.3646488189697" y2="0" stroke="#b6b6b6"
                                                stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs"></line>
                                            <line id="SvgjsLine1139" x1="0" y1="0"
                                                x2="669.3646488189697" y2="0" stroke-dasharray="0"
                                                stroke-width="0" stroke-linecap="butt"
                                                class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1140" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1141" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1142" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1143" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect"></rect>
                                            <rect id="SvgjsRect1144" width="0" height="0" x="0" y="0"
                                                rx="0" ry="0" opacity="1" stroke-width="0"
                                                stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect1008" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                        <g id="SvgjsG1106" class="apexcharts-yaxis" rel="0"
                                            transform="translate(15.635351181030273, 0)">
                                            <g id="SvgjsG1107" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1108"
                                                    font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                    text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                    font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1109">100</tspan>
                                                    <title>100</title>
                                                </text><text id="SvgjsText1110" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="85.63599990844726" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1111">80</tspan>
                                                    <title>80</title>
                                                </text><text id="SvgjsText1112" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="139.77199981689452" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1113">60</tspan>
                                                    <title>60</title>
                                                </text><text id="SvgjsText1114" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="193.90799972534177" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1115">40</tspan>
                                                    <title>40</title>
                                                </text><text id="SvgjsText1116" font-family="Helvetica, Arial, sans-serif"
                                                    x="20" y="248.04399963378904" text-anchor="end"
                                                    dominant-baseline="auto" font-size="11px" font-weight="400"
                                                    fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1117">20</tspan>
                                                    <title>20</title>
                                                </text><text id="SvgjsText1118"
                                                    font-family="Helvetica, Arial, sans-serif" x="20"
                                                    y="302.1799995422363" text-anchor="end" dominant-baseline="auto"
                                                    font-size="11px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-yaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1119">0</tspan>
                                                    <title>0</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1004" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-tooltip apexcharts-theme-light"
                                        style="left: 215.104px; top: 165.28px;">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/09/18
                                            01:30
                                        </div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(65, 84, 241);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label">Sales: </span><span
                                                        class="apexcharts-tooltip-text-y-value">40</span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 2; display: flex;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(46, 202, 106);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label">Revenue: </span><span
                                                        class="apexcharts-tooltip-text-y-value">32</span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                        <div class="apexcharts-tooltip-series-group apexcharts-active"
                                            style="order: 3; display: flex;"><span class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(255, 119, 29);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label">Customers: </span><span
                                                        class="apexcharts-tooltip-text-y-value">11</span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                        style="left: 135.417px; top: 302.68px;">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 106.775px;">
                                            19/09/18 01:30</div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    new ApexCharts(document.querySelector("#reportsChart"), {
                                        series: [{
                                            name: 'Sales',
                                            data: [31, 40, 28, 51, 42, 82, 56],
                                        }, {
                                            name: 'Revenue',
                                            data: [11, 32, 45, 32, 34, 52, 41]
                                        }, {
                                            name: 'Customers',
                                            data: [15, 11, 32, 18, 9, 24, 11]
                                        }],
                                        chart: {
                                            height: 350,
                                            type: 'area',
                                            toolbar: {
                                                show: false
                                            },
                                        },
                                        markers: {
                                            size: 4
                                        },
                                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                        fill: {
                                            type: "gradient",
                                            gradient: {
                                                shadeIntensity: 1,
                                                opacityFrom: 0.3,
                                                opacityTo: 0.4,
                                                stops: [0, 90, 100]
                                            }
                                        },
                                        dataLabels: {
                                            enabled: false
                                        },
                                        stroke: {
                                            curve: 'smooth',
                                            width: 2
                                        },
                                        xaxis: {
                                            type: 'datetime',
                                            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                "2018-09-19T06:30:00.000Z"
                                            ]
                                        },
                                        tooltip: {
                                            x: {
                                                format: 'dd/MM/yy HH:mm'
                                            },
                                        }
                                    }).render();
                                });
                            </script>
                            <!-- End Line Chart -->

                        </div>

                    </div>
                </div><!-- End Reports -->

                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                                <div class="dataTable-top">
                                    <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                                <option value="5">5</option>
                                                <option value="10" selected="">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                            </select> entries per page</label></div>
                                    <div class="dataTable-search"><input class="dataTable-input"
                                            placeholder="Search..." type="text"></div>
                                </div>
                                <div class="dataTable-container">
                                    <table class="table table-borderless datatable dataTable-table">
                                        <thead>
                                            <tr>
                                                <th scope="col" data-sortable="" style="width: 10.8996%;"><a
                                                        href="#" class="dataTable-sorter">#</a></th>
                                                <th scope="col" data-sortable="" style="width: 24.0066%;"><a
                                                        href="#" class="dataTable-sorter">Customer</a></th>
                                                <th scope="col" data-sortable="" style="width: 40.149%;"><a
                                                        href="#" class="dataTable-sorter">Product</a></th>
                                                <th scope="col" data-sortable="" style="width: 9.79581%;"><a
                                                        href="#" class="dataTable-sorter">Price</a></th>
                                                <th scope="col" data-sortable="" style="width: 15.1766%;"><a
                                                        href="#" class="dataTable-sorter">Status</a></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                                <td>$64</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                        similique</a></td>
                                                <td>$47</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href="#" class="text-primary">At recusandae consectetur</a>
                                                </td>
                                                <td>$147</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href="#" class="text-primar">Ut voluptatem id earum et</a>
                                                </td>
                                                <td>$67</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="dataTable-bottom">
                                    <div class="dataTable-info">Showing 1 to 5 of 5 entries</div>
                                    <nav class="dataTable-pagination">
                                        <ul class="dataTable-pagination-list"></ul>
                                    </nav>
                                </div>
                            </div>

                        </div>

                    </div>
                </div><!-- End Recent Sales -->

                <!-- Top Selling -->
                <div class="col-12">
                    <div class="card top-selling overflow-auto">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Top Selling <span>| Today</span></h5>

                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Preview</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Sold</th>
                                        <th scope="col">Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                    alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas
                                                nulla</a></td>
                                        <td>$64</td>
                                        <td class="fw-bold">124</td>
                                        <td>$5,828</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                    alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                                doloremque</a></td>
                                        <td>$46</td>
                                        <td class="fw-bold">98</td>
                                        <td>$4,508</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                    alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                exercitationem</a>
                                        </td>
                                        <td>$59</td>
                                        <td class="fw-bold">74</td>
                                        <td>$4,366</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                    alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum
                                                error</a></td>
                                        <td>$32</td>
                                        <td class="fw-bold">63</td>
                                        <td>$2,016</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                    alt=""></a></th>
                                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                                repellendus</a></td>
                                        <td>$79</td>
                                        <td class="fw-bold">41</td>
                                        <td>$3,239</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div><!-- End Top Selling -->

            </div>
        </div>
        <div class="col-lg-4">

            <!-- Recent Activity -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                    <div class="activity">

                        <div class="activity-item d-flex">
                            <div class="activite-label">32 min</div>
                            <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                            <div class="activity-content">
                                Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                beatae
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">56 min</div>
                            <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                            <div class="activity-content">
                                Voluptatem blanditiis blanditiis eveniet
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">2 hrs</div>
                            <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                            <div class="activity-content">
                                Voluptates corrupti molestias voluptatem
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">1 day</div>
                            <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                            <div class="activity-content">
                                Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a>
                                tempore
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">2 days</div>
                            <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                            <div class="activity-content">
                                Est sit eum reiciendis exercitationem
                            </div>
                        </div><!-- End activity item-->

                        <div class="activity-item d-flex">
                            <div class="activite-label">4 weeks</div>
                            <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                            <div class="activity-content">
                                Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                            </div>
                        </div><!-- End activity item-->

                    </div>

                </div>
            </div><!-- End Recent Activity -->

            <!-- Budget Report -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                    <div id="budgetChart"
                        style="min-height: 400px; -webkit-tap-highlight-color: transparent; user-select: none;"
                        class="echart" _echarts_instance_="ec_1708938397850">
                        <div
                            style="position: relative; width: 330px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                            <canvas data-zr-dom-id="zr_0" width="412" height="500"
                                style="position: absolute; left: 0px; top: 0px; width: 330px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                        </div>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                legend: {
                                    data: ['Allocated Budget', 'Actual Spending']
                                },
                                radar: {
                                    // shape: 'circle',
                                    indicator: [{
                                            name: 'Sales',
                                            max: 6500
                                        },
                                        {
                                            name: 'Administration',
                                            max: 16000
                                        },
                                        {
                                            name: 'Information Technology',
                                            max: 30000
                                        },
                                        {
                                            name: 'Customer Support',
                                            max: 38000
                                        },
                                        {
                                            name: 'Development',
                                            max: 52000
                                        },
                                        {
                                            name: 'Marketing',
                                            max: 25000
                                        }
                                    ]
                                },
                                series: [{
                                    name: 'Budget vs spending',
                                    type: 'radar',
                                    data: [{
                                            value: [4200, 3000, 20000, 35000, 50000, 18000],
                                            name: 'Allocated Budget'
                                        },
                                        {
                                            value: [5000, 14000, 28000, 26000, 42000, 21000],
                                            name: 'Actual Spending'
                                        }
                                    ]
                                }]
                            });
                        });
                    </script>

                </div>
            </div><!-- End Budget Report -->

            <!-- Website Traffic -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                    <div id="trafficChart"
                        style="min-height: 400px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"
                        class="echart" _echarts_instance_="ec_1708938397851">
                        <div
                            style="position: relative; width: 330px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;">
                            <canvas data-zr-dom-id="zr_0" width="412" height="500"
                                style="position: absolute; left: 0px; top: 0px; width: 330px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                        </div>
                        <div class=""></div>
                    </div>

                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            echarts.init(document.querySelector("#trafficChart")).setOption({
                                tooltip: {
                                    trigger: 'item'
                                },
                                legend: {
                                    top: '5%',
                                    left: 'center'
                                },
                                series: [{
                                    name: 'Access From',
                                    type: 'pie',
                                    radius: ['40%', '70%'],
                                    avoidLabelOverlap: false,
                                    label: {
                                        show: false,
                                        position: 'center'
                                    },
                                    emphasis: {
                                        label: {
                                            show: true,
                                            fontSize: '18',
                                            fontWeight: 'bold'
                                        }
                                    },
                                    labelLine: {
                                        show: false
                                    },
                                    data: [{
                                            value: 1048,
                                            name: 'Search Engine'
                                        },
                                        {
                                            value: 735,
                                            name: 'Direct'
                                        },
                                        {
                                            value: 580,
                                            name: 'Email'
                                        },
                                        {
                                            value: 484,
                                            name: 'Union Ads'
                                        },
                                        {
                                            value: 300,
                                            name: 'Video Ads'
                                        }
                                    ]
                                }]
                            });
                        });
                    </script>

                </div>
            </div><!-- End Website Traffic -->

            <!-- News & Updates Traffic -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                    <div class="news">
                        <div class="post-item clearfix">
                            <img src="assets/img/news-1.jpg" alt="">
                            <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                            <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-2.jpg" alt="">
                            <h4><a href="#">Quidem autem et impedit</a></h4>
                            <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-3.jpg" alt="">
                            <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                            <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-4.jpg" alt="">
                            <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                            <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                        </div>

                        <div class="post-item clearfix">
                            <img src="assets/img/news-5.jpg" alt="">
                            <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                            <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                        </div>

                    </div><!-- End sidebar recent posts-->

                </div>
            </div><!-- End News & Updates -->

        </div>
    </div>
@endsection
