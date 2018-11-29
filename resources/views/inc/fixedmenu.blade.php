<div class="pcoded-main-container">
    <nav class="pcoded-navbar">
        <div class="pcoded-inner-navbar">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                        <span class="pcoded-mtext">Drivers</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                        <a href="{{route('driver.create')}}">
                                <span class="pcoded-micon"><i class="ti-home"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Add New</span>
                            </a>
                        </li>
                
                        <li class="">    
                            <a href="{{route('driver.index')}}">
                                    <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                    <span class="pcoded-mtext" data-i18n="nav.dash.default">View All</span>
                                   
                                </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-box"></i></span>
                        <span class="pcoded-mtext">Vehicles</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{route('vehicle.create')}}">
                                <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                <span class="pcoded-mtext">Add New</span>
                               
                            </a>
                        </li>
                        <li >
                            <a href="{{route('vehicle.index')}}" >
                                <span class="pcoded-micon"><i class="ti-crown"></i></span>
                                <span class="pcoded-mtext">View All</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                        <span class="pcoded-mtext">Vehicle Issues & Repairance Form</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                        <a href="">
                                <span class="pcoded-micon"><i class="ti-home"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Repair&Issue Form</span>
                            </a>
                        </li>
                        <li>
                        <a href="#">
                               <span class="pcoded-micon"><i class="ti-home"></i></span>
                               <span class="pcoded-mtext" data-i18n="nav.dash.main">View All Queries</span>
                           </a>
                       </li>

                    </ul>
                    {{-- <ul class="pcoded-submenu">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" data-i18n="nav.bootstrap-table.main">
                                <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                <span class="pcoded-mtext">Bootstrap Table</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="bs-basic-table.html" data-i18n="nav.bootstrap-table.basic-table">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Basic Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="bs-table-sizing.html" data-i18n="nav.bootstrap-table.sizing-table">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Sizing Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="bs-table-border.html" data-i18n="nav.bootstrap-table.border-table">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Border Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="bs-table-styling.html" data-i18n="nav.bootstrap-table.styling-table">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Styling Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" data-i18n="nav.data-table.main">
                                <span class="pcoded-micon"><i class="ti-widgetized"></i></span>
                                <span class="pcoded-mtext">Data Table</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="dt-basic.html" data-i18n="nav.data-table.basic-initialization">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Basic Initialization</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-advance.html" data-i18n="nav.data-table.advance-initialization">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Advance Initialization</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-styling.html" data-i18n="nav.data-table.styling">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Styling</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-api.html" data-i18n="nav.data-table.api">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">API</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ajax.html" data-i18n="nav.data-table.ajax">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Ajax</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-server-side.html" data-i18n="nav.data-table.server-side">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Server Side</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-plugin.html" data-i18n="nav.data-table.plug-in">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Plug-In</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-data-sources.html" data-i18n="nav.data-table.data-sources">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Data Sources</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.main">
                                <span class="pcoded-micon"><i class="ti-loop"></i></span>
                                <span class="pcoded-mtext">Data Table Extensions</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="dt-ext-autofill.html" data-i18n="nav.data-table-extensions.autofill">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">AutoFill</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" data-i18n="nav.data-table-extensions.button.main">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Button</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-basic-buttons.html" data-i18n="nav.data-table-extensions.button.basic-button">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Basic Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a href="dt-ext-buttons-html-5-data-export.html" data-i18n="nav.data-table-extensions.button.html-data-export">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Html-5 Data Export</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-col-reorder.html" data-i18n="nav.data-table-extensions.col-reorder">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Col Reorder</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-fixed-columns.html" data-i18n="nav.data-table-extensions.fixed-columns">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Fixed Columns</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-fixed-header.html" data-i18n="nav.data-table-extensions.fixed-header">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Fixed Header</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-key-table.html" data-i18n="nav.data-table-extensions.key-table">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Key Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-responsive.html" data-i18n="nav.data-table-extensions.responsive">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Responsive</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-row-reorder.html" data-i18n="nav.data-table-extensions.row-recorder">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Row Reorder</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-scroller.html" data-i18n="nav.data-table-extensions.scroller">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Scroller</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="dt-ext-select.html" data-i18n="nav.data-table-extensions.select-tbl">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Select Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="foo-table.html" data-i18n="nav.foo-table.main">
                                <span class="pcoded-micon"><i class="ti-view-list-alt"></i></span>
                                <span class="pcoded-mtext">FooTable</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu ">
                            <a href="javascript:void(0)" data-i18n="nav.handson-table.main">
                                <span class="pcoded-micon"><i class="ti-view-list"></i></span>
                                <span class="pcoded-mtext">Handson Table</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="handson-appearance.html" data-i18n="nav.handson-table.appearance">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Appearance</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-data-operation.html" data-i18n="nav.handson-table.data-operation">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Data Operation</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-rows-cols.html" data-i18n="nav.handson-table.rows-columns">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Rows Columns</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-columns-only.html" data-i18n="nav.handson-table.columns-Only">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Columns Only</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-cell-features.html" data-i18n="nav.handson-table.cell-features">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Cell Features</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-cell-types.html" data-i18n="nav.handson-table.cell-types">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Cell Types</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-integrations.html" data-i18n="nav.handson-table.integrations">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Integrations</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-rows-only.html" data-i18n="nav.handson-table.rows-Only">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Rows Only</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="handson-utilities.html" data-i18n="nav.handson-table.utilities">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Utilities</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="editable-table.html" data-i18n="nav.editable-table.main">
                                <span class="pcoded-micon"><i class="ti-write"></i></span>
                                <span class="pcoded-mtext">Editable Table</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-map"></i></span>
                        <span class="pcoded-mtext">Visit Requests</span>
                        <label class="badge badge-danger">15</label>
                        {{-- <span class="pcoded-mcaret"></span> --}}
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                        <a href="{{route('pendingRequests')}}">
                                <span class="pcoded-micon"><i class="ti-home"></i></span>
                                <span class="pcoded-mtext" data-i18n="nav.dash.main">Pending (Latest)</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{route('sentRequests')}}">
                               <span class="pcoded-micon"><i class="ti-home"></i></span>
                               <span class="pcoded-mtext" data-i18n="nav.dash.main">Sent For Approval</span>
                           </a>
                       </li>

                    </ul>
                     
                </li>
            </ul>
        </div>
    </nav>
   
    <!-- Sidebar inner chat end-->
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                            <div class="page-header">
                            </div>
                        <!-- Page body start -->
                        <div class="page-body">
                            @include('inc.msgs')
                            @yield('content')
                          
                        </div>
                        <!-- Page body end -->
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</div>