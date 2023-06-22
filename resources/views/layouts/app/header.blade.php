<header
    class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <svg width="50" height="42" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_429_11031)">
                    <path d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17" stroke="#292929"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20" stroke="#292929" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13 8L7 8" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M13 12L9 12" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                </g>
                <defs>
                    <clipPath id="clip0_429_11031">
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <h3 class="ms-2">News-Ku</h3>
        </a>
    </div>


    <div class="col-md-3 text-end">
        @guest
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign-up</a>
        @else
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    {{ Auth::user()->username }}
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('index') }}"><svg width="18" height="18" class="mb-1 me-2" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_429_11031)">
                                <path d="M3 4V18C3 19.1046 3.89543 20 5 20H17H19C20.1046 20 21 19.1046 21 18V8H17"
                                    stroke="#292929" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 4H17V18C17 19.1046 17.8954 20 19 20V20" stroke="#292929" stroke-width="2.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13 8L7 8" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M13 12L9 12" stroke="#292929" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_429_11031">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>My News</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item">
                            @csrf
                            <button type="submit" class="btn btn-link text-black text-decoration-none"><svg width="18" height="18" class="mb-1 me-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 12L13 12" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19" stroke="#323232" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endguest

    </div>
</header>
