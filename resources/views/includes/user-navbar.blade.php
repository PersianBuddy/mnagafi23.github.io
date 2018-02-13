<div id="user-nav">
    <div class="container">
        
                <!-- Right Side Of Navbar -->
                <div class="navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <a class="btn btn-success" href="{{ route('login') }}">ورود</a>
                        <a class="btn btn-primary" href="{{ route('register') }}">عضویت</a>
                    @else
                        <div class="dropdown">
                            <a class="btn btn-danger" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
    
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        خروج از محیط کاربری
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </div>
        </div>
 
</div>