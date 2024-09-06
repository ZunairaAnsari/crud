<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Laravel Project</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/mdb-favicon.ico') }}" type="image/x-icon" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>
<body>
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
      </ul>
      <!-- Left links -->
          <!-- Navbar brand -->
          <form method="GET" action="{{ route('show') }}" class="d-flex input-group w-auto">
            <input
              type="search"
              name="search"
              class="form-control rounded"
              placeholder="Search"
              aria-label="Search"
              aria-describedby="search-addon"
              value="{{ $search }}"
            />
           <button type="submit" class="btn btn-dark">
            <i class="fas fa-search"></i>
           </button>
          </form>
          
      
        <a
          data-mdb-ripple-init
          class="btn btn-dark px-3 m-2"
          href="https://github.com/mdbootstrap/mdb-ui-kit"
          role="button"
          ><i class="fab fa-github"></i
        ></a>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

    <div class="container mt-2 p-2">
        <h1 class="bg-light text-center">Students Record</h1>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Status</th>
                <th>Position</th>
                <th>Actions</th>
              </tr>
            </thead>
            @foreach ($students as $new)
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                    src="{{ asset('assets/images/' . $new->image) }}"
                    alt=""
                    style="width: 45px; height: 45px"
                    class="rounded-circle"
                />
                
                    <div class="ms-3">
                      <p class="fw-bold mb-1">{{ $new->name }}</p>
                      <p class="text-muted mb-0">{{ $new->email }}</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">{{ $new->title }}</p>
                </td>
                <td>
                  <span class="badge rounded-pill d-inline {{ $new->status === 'active' ? 'badge-success' : 'badge-danger' }}">
                    {{ ucfirst($new->status) }}
                  </span>
                </td>
                <td>{{ $new->position }}</td>
                <td>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">
                    <a href="{{ $new->id }}/edit">Edit</a>
                  </button>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">
                    <a href="{{ $new->id}}/delete" onclick="return confirm('Are you sure?')">Delete</a>
                  </button>
                </td>
                <td>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
    </div>
    <script type="text/javascript" src="{{ asset('js/mdb.umd.min.js') }}"></script>
</body>
</html>





