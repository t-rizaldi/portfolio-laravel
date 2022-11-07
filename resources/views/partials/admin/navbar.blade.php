<header class="header">
    <div class="toggle-btns">
        <a id="toggle-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
        <a id="pin-sidebar" href="#">
            <i class="icon-list"></i>
        </a>
    </div>
    <div class="header-items">

        <!-- Header actions start -->
        <ul class="header-actions">
            <li class="dropdown">
                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                    <i class="icon-bell"></i>
                    <span class="count-label">8</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications (40)
                    </div>
                    <ul class="header-notifications">
                        <li>
                            <a href="#">
                                <div class="user-img away">
                                    <img src="{{ asset('template/img/user21.png') }}" alt="User">
                                </div>
                                <div class="details">
                                    <div class="user-title">Abbott</div>
                                    <div class="noti-details">Membership has been ended.</div>
                                    <div class="noti-date">Oct 20, 07:30 pm</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img busy">
                                    <img src="{{ asset('template/img/user10.png') }}" alt="User">
                                </div>
                                <div class="details">
                                    <div class="user-title">Braxten</div>
                                    <div class="noti-details">Approved new design.</div>
                                    <div class="noti-date">Oct 10, 12:00 am</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="user-img online">
                                    <img src="{{ asset('template/img/user6.png') }}" alt="User">
                                </div>
                                <div class="details">
                                    <div class="user-title">Larkyn</div>
                                    <div class="noti-details">Check out every table in detail.</div>
                                    <div class="noti-date">Oct 15, 04:00 pm</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="dropdown">
                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                    <span class="user-name">{{ auth()->user()->name }}</span>
                    <span class="avatar">
                        @if (!empty(auth()->user()->avatar))
                            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="avatar">
                        @else
                            <img src="{{ asset('storage/img_user/default.png') }}" alt="avatar">
                        @endif
                        {{-- <span class="status busy"></span> --}}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                    <div class="header-profile-actions">
                        <div class="header-user-profile">
                            <div class="header-user">
                                @if (!empty(auth()->user()->avatar))
                                    <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="avatar">
                                @else
                                    <img src="{{ asset('storage/img_user/default.png') }}" alt="avatar">
                                @endif
                            </div>
                            <h5>{{ auth()->user()->name }}</h5>
                            <p>{{ auth()->user()->role_id == 1 ? 'Super Admin' : 'Admin' }}</p>
                        </div>
                        <a href="#"><i class="icon-user1"></i> My Profile</a>
                        <a href="#"><i class="icon-settings1"></i> Account Settings</a>
                        <a href="{{ route('auth.logout') }}" onclick="return confirm('Anda yakin ingin keluar ?')"><i class="icon-log-out1"></i> Sign Out</a>
                    </div>
                </div>
            </li>
        </ul>						
        <!-- Header actions end -->
    </div>
</header>