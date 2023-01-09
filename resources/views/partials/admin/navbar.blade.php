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
                    @if (countNewMessages())
                        <span class="count-label">{{ countNewMessages() }}</span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                    <div class="dropdown-menu-header">
                        Notifications ({{ countNewMessages() }})
                    </div>
                    <ul class="header-notifications">
                        @foreach (getMessages() as $message)
                            <li>
                                <a href="{{ route('admin.message.show', $message->id) }}" class="message-list {{ (!$message->read) ? 'message-active' : ''}}">
                                    <div class="details">
                                        <div class="user-title">{{ $message->name }}</div>
                                        <div class="noti-details">{{ $message->subject }}</div>
                                        <div class="noti-date">{{ date('M j, Y', strtotime($message->created_at)) }}</div>
                                    </div>
                                </a>
                            </li>
                        @endforeach

                        <li>
                            <a href="{{ route('admin.message.index') }}" class="message-list">
                                <div class="details">
                                    <div class="user-title">Read More <i class="fas fa-arrow-right"></i></div>
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