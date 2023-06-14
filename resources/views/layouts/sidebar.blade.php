@if (isset($_GET["tabs"]) && !empty($_GET["tabs"]))
    @php($tabs = $_GET['tabs'])
@else
    @php($tabs = "0")
@endif

@if (isset($_GET["cals"]) && !empty($_GET["cals"]))
    @php($cals = $_GET['cals'])
@else
    @php($cals = "0")
@endif

<style>
    :root {
        --kt-app-sidebar-width: 200px;
        --kt-app-sidebar-width-actual: 300px;
        --kt-app-sidebar-gap-start: 0px;
        --kt-app-sidebar-gap-end: 0px;
        --kt-app-sidebar-gap-top: 0px;
        --kt-app-sidebar-gap-bottom: 0px;
    }
</style>


<div id="kt_app_sidebar" class="app-sidebar  flex-column "
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-width="250px" data-kt-drawer-direction="start"
     data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"
>


    <div class="app-sidebar-logo d-none d-lg-flex flex-stack flex-shrink-0 px-8" id="kt_app_sidebar_logo">

        <a href="index.html">
            <img alt="Logo" src="assets/media/logos/default.svg" class="theme-light-show h-25px"/>
            <img alt="Logo" src="assets/media/logos/default-dark.svg" class="theme-dark-show h-25px"/>
        </a>


    </div>


    <div
        class="app-sidebar-menu  app-sidebar-menu-arrow  hover-scroll-overlay-y my-5 my-lg-5 px-3"
        id="kt_app_sidebar_menu_wrapper"

        data-kt-scroll="true"
        data-kt-scroll-height="auto"
        data-kt-scroll-dependencies="#kt_app_sidebar_toolbar, #kt_app_sidebar_footer"
        data-kt-scroll-offset="0">


        <div
            class="
            menu
            menu-column
            menu-sub-indention
            menu-active-bg
            fw-semibold"

            id="#kt_sidebar_menu"
            data-kt-menu="true">


            <div data-kt-menu-trigger="click"
                 class="menu-item here <?php if($tabs == '1'){ echo 'show';} ?> menu-accordion">

<span class="menu-link">
<span class="menu-icon">
<span class="svg-icon svg-icon-5">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
     xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                              fill="currentColor"/>
                        </svg>
</span>
</span>


                   <span class="menu-title">査定部</span><span class="menu-arrow"></span></span>
                <div class="menu-sub menu-sub-accordion">

                    {{--                    <div class="menu-item">--}}
                    {{--                        <a class="menu-link <?php if($cals == '11'){ echo 'active';} ?>"--}}
                    {{--                           href="{{asset('dp_assessment')}}?tabs=1&&cals=11">--}}
                    {{--                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
                    {{--                                class="menu-title">INDEX</span></a>--}}
                    {{--                    </div>--}}
                    <div class="menu-item">
                        <a class="menu-link <?php if($cals == '12'){ echo 'active';} ?>"
                           href="{{asset('dp_assessment_list')}}?tabs=1&&cals=12">
                            <span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">LIST</span></a>
                    </div>

                    {{--                    <div class="menu-item">--}}
                    {{--                        <a class="menu-link <?php if($cals == '13'){ echo 'active';} ?>" href="{{asset('dp_assessment_input')}}?tabs=1&&cals=13">--}}
                    {{--                            <span--}}
                    {{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
                    {{--                                class="menu-title">INPUT</span></a>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="menu-item">--}}
                    {{--                        <a class="menu-link <?php if($cals == '14'){ echo 'active';} ?>" href="{{asset('dp_assessment_edit')}}?tabs=1&&cals=14">--}}
                    {{--                            <span--}}
                    {{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
                    {{--                                class="menu-title">UPDATE</span></a>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="menu-item">--}}
                    {{--                        <a class="menu-link <?php if($cals == '15'){ echo 'active';} ?>" href="{{asset('dp_assessment_destroy')}}?tabs=1&&cals=15">--}}
                    {{--                            <span--}}
                    {{--                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span--}}
                    {{--                                class="menu-title">DELETE</span></a>--}}
                    {{--                    </div>--}}
                </div>
            </div>


            <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '2'){ echo 'show';} ?> menu-accordion">

                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">工事部</span><span
                        class="menu-arrow"></span></span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item">
                        <a class="menu-link <?php if($cals == '21'){ echo 'active';} ?>"
                           href="{{asset('dp_construction')}}?tabs=2&&cals=21">

                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">INDEX</span></a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link <?php if($cals == '22'){ echo 'active';} ?>"
                           href="{{asset('dp_construction_list')}}?tabs=2&&cals=22">
                            <span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">LIST</span></a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link <?php if($cals == '23'){ echo 'active';} ?>"
                           href="{{asset('dp_construction_estimate')}}?tabs=2&&cals=23">
                            <span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">見積書関連</span></a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link <?php if($cals == '24'){ echo 'active';} ?>"
                           href="{{asset('dp_construction_update')}}?tabs=2&&cals=24">
                            <span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">UPDATE</span></a>
                    </div>

                    <div class="menu-item">
                        <a class="menu-link <?php if($cals == '25'){ echo 'active';} ?>"
                           href="{{asset('dp_construction_destroy')}}?tabs=2&&cals=25">
                            <span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">DELETE</span></a>
                    </div>
                </div>
            </div>

            <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '3'){ echo 'show';} ?> menu-accordion">


                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">営業部</span><span
                        class="menu-arrow"></span></span>
                <div class="menu-sub menu-sub-accordion">
                    <div class="menu-item <?php if($cals == '31'){ echo 'active';} ?>">
                        <a class="menu-link active" href="{{asset('dp_sales')}}?tabs=3&&cals=31">
                            <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">INDEX</span></a>
                    </div>
                    <div class="menu-item" <?php if ($cals == '32') {
                        echo 'active';
                    } ?>">
                    <a class="menu-link" href="{{asset('dp_sales_list')}}?tabs=3&&cals=32"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">LIST</span></a>
                </div>

                <div class="menu-item <?php if($cals == '33'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_sales_input')}}?tabs=3&&cals=33"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INPUT</span></a>
                </div>

                <div class="menu-item <?php if($cals == '34'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_sales_edit')}}?tabs=3&&cals=34"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">UPDATE</span></a>
                </div>

                <div class="menu-item <?php if($cals == '35'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_sales_destroy')}}?tabs=3&&cals=35"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">DELETE</span></a>
                </div>
            </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '4'){ echo 'show';} ?> menu-accordion">

                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">経理部</span><span
                        class="menu-arrow"></span></span>
            <div class="menu-sub menu-sub-accordion">
                <div class="menu-item <?php if($cals == '41'){ echo 'active';} ?>">
                    <a class="menu-link active" href="{{asset('dp_accounting')}}?tabs=4&&cals=41">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INDEX</span></a>
                </div>
                <div class="menu-item <?php if($cals == '42'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_accounting_list')}}?tabs=4&&cals=42"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">LIST</span></a>
                </div>

                <div class="menu-item <?php if($cals == '43'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_accounting_input')}}?tabs=4&&cals=43"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INPUT</span></a>
                </div>

                <div class="menu-item <?php if($cals == '44'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_accounting_edit')}}?tabs=4&&cals=44"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">UPDATE</span></a>
                </div>

                <div class="menu-item <?php if($cals == '45'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_accounting_destroy')}}?tabs=4&&cals=45"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">DELETE</span></a>
                </div>
            </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '5'){ echo 'show';} ?> menu-accordion">


                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">工事詳細</span><span
                        class="menu-arrow"></span></span>
            <div class="menu-sub menu-sub-accordion">
                <div class="menu-item <?php if($cals == '51'){ echo 'active';} ?>">
                    <a class="menu-link active"
                       href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position=">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">すべて</span></a>
                </div>
                <div class="menu-item <?php if($cals == '52'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_list')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">現場名で調べる</span></a>
                </div>

                <div class="menu-item <?php if($cals == '53'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_input')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">業者名で調べる</span></a>
                </div>

                <div class="menu-item <?php if($cals == '54'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_edit')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">今月</span></a>
                </div>

                <div class="menu-item <?php if($cals == '55'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_destroy')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">先月</span></a>
                </div>
                <div class="menu-item <?php if($cals == '56'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_destroy')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">先々月</span></a>
                </div>
            </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '6'){ echo 'show';} ?> menu-accordion">


                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">物件情報</span><span
                        class="menu-arrow"></span></span>
            <div class="menu-sub menu-sub-accordion">
                <div class="menu-item <?php if($cals == '61'){ echo 'active';} ?>">
                    <a class="menu-link active"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=すべて&&tabs=2">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">すべて</span></a>
                </div>
                <div class="menu-item <?php if($cals == '62'){ echo 'active';} ?>">
                    <a class="menu-link"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=査定中&&tabs=2"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">査定中</span></a>
                </div>

                <div class="menu-item <?php if($cals == '63'){ echo 'active';} ?>">
                    <a class="menu-link"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=工事中&&tabs=2"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">工事中</span></a>
                </div>

                <div class="menu-item <?php if($cals == '64'){ echo 'active';} ?>">
                    <a class="menu-link"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=販売中&&tabs=2"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">販売中</span></a>
                </div>

                <div class="menu-item <?php if($cals == '65'){ echo 'active';} ?>">
                    <a class="menu-link"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=商談中&&tabs=2"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">商談中</span></a>
                </div>

                <div class="menu-item <?php if($cals == '66'){ echo 'active';} ?>">
                    <a class="menu-link"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=成約済&&tabs=2"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">成約済</span></a>
                </div>

                <div class="menu-item <?php if($cals == '67'){ echo 'active';} ?>">
                    <a class="menu-link"
                       href="https://www.daiwa-housing.jp/dhs/system/property?search=取扱不可&&tabs=2"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">取扱不可</span></a>
                </div>
            </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '7'){ echo 'show';} ?> menu-accordion">


                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">工事業者情報</span><span
                        class="menu-arrow"></span></span>
            <div class="menu-sub menu-sub-accordion">
                <div class="menu-item <?php if($cals == '71'){ echo 'active';} ?>">
                    <a class="menu-link active" href="{{asset('dp_assessment')}}?tabs=1">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INDEX</span></a>
                </div>
                <div class="menu-item <?php if($cals == '72'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_list')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">LIST</span></a>
                </div>

                <div class="menu-item <?php if($cals == '73'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_input')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INPUT</span></a>
                </div>

                <div class="menu-item <?php if($cals == '74'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_edit')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">UPDATE</span></a>
                </div>

                <div class="menu-item <?php if($cals == '75'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_destroy')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">DELETE</span></a>
                </div>
            </div>
        </div>

        <div data-kt-menu-trigger="click" class="menu-item <?php if($tabs == '8'){ echo 'show';} ?> menu-accordion">


                <span
                    class="menu-link"><span class="menu-icon">
<span class="svg-icon svg-icon-5"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                       xmlns="http://www.w3.org/2000/svg">
<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
</svg>
</span>
                       </span><span class="menu-title">設定</span><span
                        class="menu-arrow"></span></span>
            <div class="menu-sub menu-sub-accordion">
                <div class="menu-item <?php if($cals == '81'){ echo 'active';} ?>">
                    <a class="menu-link active" href="{{asset('dp_assessment')}}?tabs=1">
                        <span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INDEX</span></a>
                </div>
                <div class="menu-item <?php if($cals == '82'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_list')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">LIST</span></a>
                </div>

                <div class="menu-item <?php if($cals == '83'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_input')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">INPUT</span></a>
                </div>

                <div class="menu-item <?php if($cals == '84'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_edit')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">UPDATE</span></a>
                </div>

                <div class="menu-item <?php if($cals == '85'){ echo 'active';} ?>">
                    <a class="menu-link" href="{{asset('dp_assessment_destroy')}}?tabs=1"><span
                            class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                            class="menu-title">DELETE</span></a>
                </div>
            </div>
        </div>


    </div>

</div>

</div>



