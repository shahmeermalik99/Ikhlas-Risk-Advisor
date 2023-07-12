    <header>
        <nav class="nav_bar  navbar-dark ">
            <div class="d-flex align-items-center">
                <button class="hamburger-btn"><img src="{{ asset('admin/img/list.svg') }}" width="24" alt=""></button>
                <h4 class="mb-0  ps-3"> Dashboard</h4>
            </div>
            <div class="d-flex align-items-center">
                <div class="account-name">
                    <p>Account <i class="bi bi-chevron-down"></i></p>
                    <div class="drop-down">
                        <!--<a href="plans.html"><img src="{{ asset('admin/img/plan.svg') }}" alt=""> Plans</a>-->
                        <!--  <a href="account.html"><img src="{{ asset('admin/img/gear.svg') }}" alt=""> Account</a>-->
                       <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           <img src="{{ asset('admin/img/logout.svg') }}" alt="">
                                <span class="fa fa-lock author-log-ic"></span> Logout
                       </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>