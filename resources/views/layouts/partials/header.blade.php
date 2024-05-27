<!-- Header Menu Area Start Here -->
<div class="navbar navbar-expand-md header-menu-one bg-light">
    <div class="nav-bar-header-one">
        <div class="header-logo">
            <a href="#">
                <img style="width: 50px" src="{{asset('frontend/images/logo.jpg')}}" alt="logo">
                <span style="color: white;font-weight: bold;">LYCEE INFORMATIQUE & INTERNET</span>
            </a>
        </div>
        <div class="toggle-button sidebar-toggle">
            <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
            </button>
        </div>
    </div>
    <div class="d-md-none mobile-nav-bar">
        <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
            <i class="far fa-arrow-alt-circle-down"></i>
        </button>
        <button type="button" class="navbar-toggler sidebar-toggle-mobile">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
        <ul class="navbar-nav">
            <li class="navbar-item dropdown header-admin">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <div class="admin-title">
                        <h5 class="item-title">BDO</h5>
                        <span>Admin</span>
                    </div>
                    <div class="admin-img">
                        <img src="{{asset('akkhor/img/figure/admin.jpg')}}" alt="Admin">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title">BDO</h6>
                    </div>
                    <div class="item-content">
                        <ul class="settings-list">
                            <li><a href="#"><i class="flaticon-user"></i>Mon Profil</a></li>
                            <li><a href="{{route('logout')}}"><i class="flaticon-turn-off"></i>Se Déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="navbar-item dropdown header-message">
                <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <i class="far fa-envelope"></i>
                    <div class="item-title d-md-none text-16 mg-l-10">Message</div>
                    <span>5</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="item-header">
                        <h6 class="item-title">05 Message</h6>
                    </div>
                    <div class="item-content">
                        <div class="media">
                            <div class="item-img bg-skyblue author-online">
                                <img src="{{asset('akkhor/img/figure/student11.png')}}" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">Mohamed</span>
                                        <span class="item-time">18:30</span>
                                    </a>
                                </div>
                                <p>What is the reason of buy this item.
                                    Is it usefull for me.....</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img bg-yellow author-online">
                                <img src="{{asset('akkhor/img/figure/student12.png')}}" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">Djibril</span>
                                        <span class="item-time">10:35</span>
                                    </a>
                                </div>
                                <p>What is the reason of buy this item.
                                    Is it usefull for me.....</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img bg-pink">
                                <img src="{{asset('akkhor/img/figure/student13.png')}}" alt="img">
                            </div>
                            <div class="media-body space-sm">
                                <div class="item-title">
                                    <a href="#">
                                        <span class="item-name">BDO</span>
                                        <span class="item-time">02:35</span>
                                    </a>
                                </div>
                                <p>What is the reason of buy this item.
                                    Is it usefull for me.....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- Header Menu Area End Here -->
