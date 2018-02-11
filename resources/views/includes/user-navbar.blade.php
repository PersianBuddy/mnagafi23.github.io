<div id="user-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="navbar-brand">
                    {{config('app.name',"Laravel")}}
                </div>
                
            </div>
    
            <div class="col-md-8">
                <!-- Right Side Of Navbar -->
                <div class="navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <a class="btn btn-hollow" href="{{ route('login') }}">ورود</a>
                        <a class="btn btn-hollow" href="{{ route('register') }}">عضویت</a>
                    @else
                        <div class="dropdown">
                            <a class="btn btn-hollow" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
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
    </div>
    
</div>