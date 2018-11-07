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
                        <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                        <span class="pcoded-mtext">Tours & Visits</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
                    {{-- <ul class="pcoded-submenu">
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" data-i18n="nav.form-components.main">
                                <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                <span class="pcoded-mtext">Form Components</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="form-elements-component.html" data-i18n="nav.form-components.form-components">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Form Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-elements-add-on.html" data-i18n="nav.form-components.form-elements-add-on">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Form-Elements-Add-On</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-elements-advance.html" data-i18n="nav.form-components.form-elements-advance">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Form-Elements-Advance</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-validation.html" data-i18n="nav.form-components.form-validation">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Form Validation</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class=" ">
                            <a href="form-picker.html" data-i18n="nav.form-pickers.main">
                                <span class="pcoded-micon"><i class="ti-pencil-alt"></i></span>
                                <span class="pcoded-mtext">Form Picker</span>
                                <span class="pcoded-badge label label-warning">NEW</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>

                        <li class=" ">
                            <a href="form-select.html" data-i18n="nav.form-select.main">
                                <span class="pcoded-micon"><i class="ti-shortcode"></i></span>
                                <span class="pcoded-mtext">Form Select</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-masking.html" data-i18n="nav.form-masking.main">
                                <span class="pcoded-micon"><i class="ti-write"></i></span>
                                <span class="pcoded-mtext">Form Masking</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="form-wizard.html" data-i18n="nav.form-wizard.main">
                                <span class="pcoded-micon"><i class="ti-archive"></i></span>
                                <span class="pcoded-mtext">Form Wizard</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                        </li>
                        <li class="pcoded-hasmenu">
                            <a href="javascript:void(0)" data-i18n="nav.ready-to-use.main">
                                <span class="pcoded-micon"><i class="ti-receipt"></i></span>
                                <span class="pcoded-mtext">Ready To Use</span>
                                <span class="pcoded-badge label label-danger">HOT</span>
                                <span class="pcoded-mcaret"></span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class=" ">
                                    <a href="ready-cloned-elements-form.html" data-i18n="nav.ready-to-use.cloned-elements-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Cloned Elements Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-currency-form.html" data-i18n="nav.ready-to-use.currency-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Currency Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-form-booking.html" data-i18n="nav.ready-to-use.booking-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Booking Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-form-booking-multi-steps.html" data-i18n="nav.ready-to-use.booking-multi-steps-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Booking Multi Steps Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-form-comment.html" data-i18n="nav.ready-to-use.comment-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Comment Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-form-contact.html" data-i18n="nav.ready-to-use.contact-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Contact Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-job-application-form.html" data-i18n="nav.ready-to-use.job-application-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Job Application Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-js-addition-form.html" data-i18n="nav.ready-to-use.jS-addition-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">JS Addition Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-login-form.html" data-i18n="nav.ready-to-use.login-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Login Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-popup-modal-form.html" target="_blank" data-i18n="nav.ready-to-use.popup-modal-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Popup Modal Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-registration-form.html" data-i18n="nav.ready-to-use.registration-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Registration Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-review-form.html" data-i18n="nav.ready-to-use.review-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Review Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-subscribe-form.html" data-i18n="nav.ready-to-use.subscribe-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Subscribe Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-suggestion-form.html" data-i18n="nav.ready-to-use.suggestion-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Suggestion Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="ready-tabs-form.html" data-i18n="nav.ready-to-use.tabs-form">
                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                        <span class="pcoded-mtext">Tabs Form</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul> --}}
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)">
                        <span class="pcoded-micon"><i class="feather icon-credit-card"></i></span>
                        <span class="pcoded-mtext">Vehicle Issues & Repairance Form</span>
                        <span class="pcoded-mcaret"></span>
                    </a>
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