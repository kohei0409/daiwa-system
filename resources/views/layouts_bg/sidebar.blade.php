@if (isset($_GET["tabs"]) && !empty($_GET["tabs"]))
    @php($tabs = $_GET['tabs'])
@else
    @php($tabs = "1")
@endif


<nav class="navbar navbar-expand fixed-top be-top-header">
    <div class="container-fluid px-3">
        <div class=""><a class="navbar-brand" href="https://www.daiwa-housing.jp/dhs/system/home">積算システム</a>
        </div>
        <div class="page-title"><span>Dashboard</span></div>
    </div>
</nav>
<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle"
                                         href="https://www.daiwa-housing.jp/dhs/system/home">Dashboard</a>

        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>


                        <li class="parent <?php if($tabs == '1'){echo 'open';} ?>"><a
                                href="{{asset('dp_assessment')}}"><i
                                    class="icon mdi mdi-wrench"></i><span>査定部</span></a>
                            <ul class="sub-menu">

                                <li><a style="text-decoration: none;"
                                       href="{{asset('dp_assessment')}}?tabs=1"><span
                                            class="text-danger">■ </span>INDEX</a></li>


                            </ul>
                        </li>


                        <li class="parent <?php if($tabs == '2'){echo 'open';} ?>"><a
                                href="{{asset('dp_construction')}}"><i
                                    class="icon mdi mdi-wrench"></i><span>工事部</span></a>
                            <ul class="sub-menu">
                                <li><a style="text-decoration: none;"
                                       href="{{asset('dp_construction')}}?tabs=2"><span
                                            class="text-danger">■ </span>INDEX</a></li>


                            </ul>
                        </li>

                        <li class="parent <?php if($tabs == '3'){echo 'open';} ?>"><a
                                href="{{asset('dp_sales')}}"><i
                                    class="icon mdi mdi-wrench"></i><span>営業部</span></a>
                            <ul class="sub-menu">
                                <li><a style="text-decoration: none;"
                                       href="{{asset('dp_sales')}}?tabs=3"><span
                                            class=" text-danger">■ </span>INDEX</a></li>


                            </ul>
                        </li>


                        <li class="parent <?php if($tabs == '4'){echo 'open';} ?>"><a
                                href="{{asset('dp_accounting')}})"><i
                                    class="icon mdi mdi-wrench"></i><span>経理部</span></a>
                            <ul class="sub-menu">

                                <li><a style="text-decoration: none;"
                                       href="{{asset('dp_accounting')}}?tabs=4"><span
                                            class="text-danger">■ </span>INDEX</a></li>


                            </ul>
                        </li>

                        <li class="parent <?php if($tabs == '5'){echo 'open';} ?>"><a
                                href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position="><i
                                    class="icon mdi mdi-wrench"></i><span>工事詳細</span></a>
                            <ul class="sub-menu">
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/construction?get_month=all&&select_position="><span
                                            class="text-danger">■ </span>すべて</a></li>
                                <li><a style="text-decoration: none;" href=""><span
                                            class="text-danger">■ </span>現場名で調べる</a></li>
                                <li><a style="text-decoration: none;" href=""><span
                                            class="text-warning">■ </span>業者名で調べる</a></li>
                                <li><a style="text-decoration: none;" href=""><span
                                            class="text-success">■ </span>今月</a></li>
                                <li><a style="text-decoration: none;" href=""><span
                                            class="text-info">■ </span>先月</a></li>
                                <li><a style="text-decoration: none;" href=""><span
                                            class="text-dark">■ </span>先々月</a></li>

                            </ul>
                        </li>


                        <li class="parent <?php if($tabs == '6'){echo 'open';} ?>"><a
                                href="https://www.daiwa-housing.jp/dhs/system/property?search=すべて&&tabs=2"><i
                                    class="icon mdi mdi-home"></i><span>物件管理</span></a>
                            <ul class="sub-menu">
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=すべて&&tabs=2"><span
                                            class="text-danger">■ </span>すべて</a></li>
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=査定中&&tabs=2"><span
                                            class="text-gray">■ </span>査定中</a></li>
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=工事中&&tabs=2"><span
                                            class="text-warning">■ </span>工事中</a></li>
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=販売中&&tabs=2"><span
                                            class="text-success">■ </span>販売中</a></li>
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=商談中&&tabs=2"><span
                                            class="text-info">■ </span>商談中</a></li>
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=成約済&&tabs=2"><span
                                            class="text-dark">■ </span>成約済</a></li>
                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/property?search=取扱不可&&tabs=2"><span
                                            class="text-dark">■ </span>取扱不可</a></li>
                                <li class="text-center">
                                    <form class="mb-2 mt-3" method="GET" action="property">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="ml-4 pl-5 text-center">

                                                <input type="text" name="roomnumber" value=""
                                                       class="form-control">
                                            </div>

                                            <div class="ml-4 pl-5 mt-3 text-center">
                                                <button
                                                    class="btn btn-sm btn-success"
                                                    type="submit" name=""
                                                    value="1">検索する
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>


                        <li class="parent <?php if($tabs == '7'){echo 'open';} ?>"><a
                                href="https://www.daiwa-housing.jp/dhs/system/manufacturers?tabs=3"><i
                                    class="icon mdi mdi-file"></i><span>業者管理</span></a>
                            <ul class="sub-menu">
                                <li><a href="https://www.daiwa-housing.jp/dhs/system/manufacturers?tabs=3">業者一覧</a>
                                </li>
                                <li><a href="">業者入力</a>
                                </li>
                            </ul>
                        </li>

                        <li class="parent <?php if($tabs == '8'){echo 'open';} ?>"><a href="?tabs=4"><i
                                    class="icon mdi mdi-settings"></i><span>設定</span></a>
                            <ul class="sub-menu">

                                <li><a style="text-decoration: none;"
                                       href="https://www.daiwa-housing.jp/dhs/system/tool?tabs=4"><span
                                            class="text-success">■ </span>単位設定</a></li>

                                <li><a style="text-decoration: none;" href=""><span
                                            class="text-warning">■ </span>項目設定</a></li>

                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
