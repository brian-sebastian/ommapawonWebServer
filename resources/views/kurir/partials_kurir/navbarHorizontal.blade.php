<nav class="navbar navbar-expand-lg pt-2" style="background-color: salmon; width: 1110px; height: 80px; border-style: solid;">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mb-2 mb-lg-0">
        </ul>
        <form action="/logout" method="POST" class="d-flex pe-4 ms-auto">
          @csrf
          <h3 class="me-2">
            @auth
              {{ auth()->user()->name }}
            @endauth
            |
          </h3>
            <button class="badge bg-dark">
              <i class="fa-solid fa-right-from-bracket" data-bs-toggle="tooltip" title="sign out"></i>
            </button>
        </form>
      </div>
    </div>
  </nav>