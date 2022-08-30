      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
          <div class="container">
              <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
                  <span class="navbar-toggler-icon icon-bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end mt-3">
                  <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                          <a class="nav-link fw-bold" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">
                              {{ Auth::user()->name.' '.Auth::user()->lname}}
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                              <a class="dropdown-item" href="#">Profile</a>
                              <a class="dropdown-item" href="#">Settings</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>

                          </div>
                      </li>
                  </ul>
              </div>
              <br>
          </div>
      </nav>
      <!-- End Navbar -->