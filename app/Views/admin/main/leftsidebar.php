 <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <a data-pjax class="nav-link" href="<?php echo base_url('dashboard'); ?>">
                                <i class="nav-icon icon-speedometer"></i> Dashboard
                                <!-- <span class="badge badge-primary">NEW</span> -->
                            </a>
                        </li>
                        <!-- <li class="nav-title">Theme</li> -->
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 0 ): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="colors.html">
                                <i class="nav-icon icon-user"></i> Profile</a>
                        </li>
                        <?php endif; ?>
                        <!-- <php if(isset($_SESSION['role']) && $_SESSION['role'] == 1 ): ?> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./accounts">
                                <i class="nav-icon icon-people"></i> Accounts</a>
                        </li>
                        <!-- <php endif; ?> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./looping">
                                <i class="nav-icon icon-notebook"></i>Bank Details</a>
                        </li>
                        <!-- <li class="nav-title">Components</li> -->
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-reload"></i>Withdraw Funds</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="base/breadcrumb.html">
                                        <i class="nav-icon icon-puzzle"></i> Breadcrumb</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/cards.html">
                                        <i class="nav-icon icon-puzzle"></i> Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/carousel.html">
                                        <i class="nav-icon icon-puzzle"></i> Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/collapse.html">
                                        <i class="nav-icon icon-puzzle"></i> Collapse</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/forms.html">
                                        <i class="nav-icon icon-puzzle"></i> Forms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/jumbotron.html">
                                        <i class="nav-icon icon-puzzle"></i> Jumbotron</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/list-group.html">
                                        <i class="nav-icon icon-puzzle"></i> List group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/navs.html">
                                        <i class="nav-icon icon-puzzle"></i> Navs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/pagination.html">
                                        <i class="nav-icon icon-puzzle"></i> Pagination</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/popovers.html">
                                        <i class="nav-icon icon-puzzle"></i> Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/progress.html">
                                        <i class="nav-icon icon-puzzle"></i> Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/scrollspy.html">
                                        <i class="nav-icon icon-puzzle"></i> Scrollspy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/switches.html">
                                        <i class="nav-icon icon-puzzle"></i> Switches</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/tables.html">
                                        <i class="nav-icon icon-puzzle"></i> Tables</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/tabs.html">
                                        <i class="nav-icon icon-puzzle"></i> Tabs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="base/tooltips.html">
                                        <i class="nav-icon icon-puzzle"></i> Tooltips</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-briefcase"></i> Holdings</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons/buttons.html">
                                        <i class="nav-icon icon-cursor"></i> Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons/button-group.html">
                                        <i class="nav-icon icon-cursor"></i> Buttons Group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons/dropdowns.html">
                                        <i class="nav-icon icon-cursor"></i> Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="buttons/brand-buttons.html">
                                        <i class="nav-icon icon-cursor"></i> Brand Buttons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="charts.html">
                                <i class="nav-icon icon-doc"></i> Submit Bank Details</a>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-refresh"></i>Deposite Funds</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="icons/coreui-icons.html">
                                        <i class="nav-icon icon-star"></i> CoreUI Icons
                                        <span class="badge badge-success">NEW</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons/flags.html">
                                        <i class="nav-icon icon-star"></i> Flags</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons/font-awesome.html">
                                        <i class="nav-icon icon-star"></i> Font Awesome
                                        <span class="badge badge-secondary">4.7</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="icons/simple-line-icons.html">
                                        <i class="nav-icon icon-star"></i> Simple Line Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-eye"></i>Watch List</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications/alerts.html">
                                        <i class="nav-icon icon-bell"></i> Alerts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications/badge.html">
                                        <i class="nav-icon icon-bell"></i> Badge</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="notifications/modals.html">
                                        <i class="nav-icon icon-bell"></i> Modals</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="nav-icon icon-wallet"></i>My Account Balance
                                <!-- <span class="badge badge-primary">NEW</span> -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./logout">
                                <i class="nav-icon icon-logout"></i> Logout
                                <!-- <span class="badge badge-primary">NEW</span> -->
                            </a>
                        </li>
                        <li class="divider"></li>
                        <!-- <li class="nav-title">Extras</li>
                        <li class="nav-item nav-dropdown">
                            <a class="nav-link nav-dropdown-toggle" href="#">
                                <i class="nav-icon icon-star"></i> Pages</a>
                            <ul class="nav-dropdown-items">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.html" target="_top">
                                        <i class="nav-icon icon-star"></i> Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="register.html" target="_top">
                                        <i class="nav-icon icon-star"></i> Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="404.html" target="_top">
                                        <i class="nav-icon icon-star"></i> Error 404</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="500.html" target="_top">
                                        <i class="nav-icon icon-star"></i> Error 500</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item mt-auto">
                            <!-- <a class="nav-link nav-link-success" href="https://coreui.io" target="_top">
                                <i class="nav-icon icon-cloud-download"></i> Download CoreUI</a> -->
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                                <i class="nav-icon icon-layers"></i> Try CoreUI
                                <strong>PRO</strong>
                            </a> -->
                        </li>
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>