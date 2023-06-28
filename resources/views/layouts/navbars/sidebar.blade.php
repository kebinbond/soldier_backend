<div class="sidebar">
    <div class="sidebar-wrapper" style="background-color: #27293d;">
        <div class="logo">
            {{-- <a href="#" class="simple-text logo-mini">{{ __('BD') }}</a> --}}
            <a href="#" class="simple-text logo-normal">{{ __('Vetguard') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="fas fa-chart-pie"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#user-management" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-link-text">{{ __('user management') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse @if ($pageSlug == 'users' || $pageSlug == 'members') show @endif" id="user-management">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index') }}">
                                <i class="fas fa-handshake"></i>
                                <p>{{ __('Admin Users') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'members') class="active " @endif>
                            <a href="{{ route('pages.members') }}">
                                <i class="far fa-id-badge"></i>
                                <p>{{ __('App Users') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#mission-management" aria-expanded="false">
                    <i class="fa fa-list-ul"></i>
                    <span class="nav-link-text">{{ __('mission') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'course' || $pageSlug == 'community' || $pageSlug == 'job') show @endif" id="mission-management">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'course') class="active" @endif>
                            <a href="{{ route('pages.course') }}">
                                <i class="fas fa-book"></i>
                                <p>{{ __('Course') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'community') class="active" @endif>
                            <a href="{{ route('pages.community') }}">
                                <i class="fas fa-envelope-open"></i>
                                <p>{{ __('Community') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'job') class="active" @endif>
                            <a href="{{ route('pages.job') }}">
                                <i class="far fa-credit-card"></i>
                                <p>{{ __('Job') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#library-management" aria-expanded="false">
                    <i class="fa fa-database"></i>
                    <span class="nav-link-text">{{ __('library') }}</span>
                    <b class="caret mt-1"></b>
                </a>
                <div class="collapse @if ($pageSlug == 'article' || $pageSlug == 'video' || $pageSlug == 'podcast') show @endif" id="library-management">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'article') class="active" @endif>
                            <a href="{{ route('pages.article') }}">
                                <i class="fas fa-sticky-note"></i>
                                <p>{{ __('article') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'video') class="active" @endif>
                            <a href="{{ route('pages.video') }}">
                                <i class="fas fa-video"></i>
                                <p>{{ __('video') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'podcast') class="active" @endif>
                            <a href="{{ route('pages.podcast') }}">
                                <i class="fas fa-podcast"></i>
                                <p>{{ __('podcast') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'notifications') class="active " @endif>
                <a href="{{ route('pages.notifications') }}">
                    <i class="fa fa-bell"></i>
                    <p>{{ __('Workshop') }}</p>
                </a>
            </li>



            <br />
            <br />
            <br />
            <br />
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('pages.maps') }}">
                    <i class="fa fa-database"></i>
                    <p>{{ __('Library') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('pages.icons') }}">
                    <i class="fa fa-list-ul"></i>
                    <p>{{ __('Mission') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'tables') class="active " @endif>
                <a href="{{ route('pages.tables') }}">
                    <i class="tim-icons icon-puzzle-10"></i>
                    <p>{{ __('Table List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'typography') class="active " @endif>
                <a href="{{ route('pages.typography') }}">
                    <i class="tim-icons icon-align-center"></i>
                    <p>{{ __('Typography') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'rtl') class="active " @endif>
                <a href="{{ route('pages.rtl') }}">
                    <i class="tim-icons icon-world"></i>
                    <p>{{ __('RTL Support') }}</p>
                </a>
            </li>
            <li class=" {{ $pageSlug == 'upgrade' ? 'active' : '' }} bg-info">
                <a href="{{ route('pages.upgrade') }}">
                    <i class="tim-icons icon-spaceship"></i>
                    <p>{{ __('Upgrade to PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
