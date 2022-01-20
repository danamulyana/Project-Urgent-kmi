<li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <div class="avatar avatar-xl">
      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
      <img class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
      @endif
      {{-- <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" /> --}}
    </div>
  </a>
  <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
    <div class="bg-white dark__bg-1000 rounded-2 py-2">
      <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
      <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
      <div class="dropdown-divider"></div>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        
        <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();" class="dropdown-item">
            Logout
        </a>
    </form>
    </div>
  </div>
</li>