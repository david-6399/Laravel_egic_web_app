<nav class="sidebar sidebar-offcanvas " id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="/"><img src="/admin/assets/images/logo.png"
                        alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="/"><img src="/admin/assets/images/favicon.png"
                        alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="{{asset('admin/assets/images/faces/face15.jpg')}}" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">

                                @if (Auth::check())

                                <h5 class="mb-0 font-weight-normal">{{auth::user()->name}}</h5>
                                <span>Gold Member</span>
                                
                                @endif
                                
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items {{request()->is('dashboard' ? 'active' : '')}}">
                    <a class="nav-link " href="/dashboard">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/formation">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les formation</span>
                    </a>
                </li>

                
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/program">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les Program</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/event">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les Evenement</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/type_forma">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les Type de formation</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/débouché">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les Débouché</span>
                    </a>
                </li>
                <li class="nav-item menu-items  ">
                    <a class="nav-link" href="/module">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les Module</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/support_cours">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les Support de Cours</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/niv_etudiant">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Les niveaux d'etude</span>
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/forma_débouché">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title" >Formation - Débouché</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="/forma_nivetudiant">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title" >Formation-Niv'etudiant</span>
                    </a>
                </li>
                <li class="nav-item menu-items ">
                    <a class="nav-link" href="/program_module">
                        <span class="menu-icon">
                            <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title" >Program - Module</span>
                    </a>
                </li>

                <div class="dropdown-divider"></div>

                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                        aria-controls="ui-basic">
                        <span class="menu-icon"> <i class="mdi mdi-laptop"></i> </span>
                        <span class="menu-title">Basic UI Elements</span> 
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                
            </ul>
        </nav>