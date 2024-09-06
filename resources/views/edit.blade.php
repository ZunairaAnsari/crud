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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />

    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />

    <!-- Custom Styles -->
    <style>
        .error-message {
            color: #dc3545; /* Bootstrap's danger color */
            font-size: 0.875em;
            margin-top: 0.25em;
        }

        .form-select {
            height: calc(2.5rem + 2px);
            padding: 0.375rem 0.75rem;
        }
    </style>
</head>

<body>
    <!-- Start your project here -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Edit form</p>

                                    <form method="POST" enctype="multipart/form-data" action="{{ route('update', $student->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <!-- Name input -->
                                        <div class="form-floating mb-4">
                                            <input type="text" id="formName" class="form-control" name="name"
                                                value="{{ old('name', $student->name) }}" />
                                            <label for="formName">Name</label>
                                            @if ($errors->has('name'))
                                                <span class="error-message">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-floating mb-4">
                                            <input type="email" id="formEmail" class="form-control" name="email"
                                                value="{{ old('email', $student->email) }}" />
                                            <label for="formEmail">Email address</label>
                                            @if ($errors->has('email'))
                                                <span class="error-message">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-floating mb-4">
                                            <input type="password" id="formPassword" class="form-control"
                                                name="password" />
                                            <label for="formPassword">Password</label>
                                            @if ($errors->has('password'))
                                                <span class="error-message">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>

                                        <!-- Title input -->
                                        <div class="form-floating mb-4">
                                            <input type="text" id="formTitle" class="form-control"
                                                name="title" value="{{ old('title', $student->title) }}" />
                                            <label for="formTitle">Title</label>
                                            @if ($errors->has('title'))
                                                <span class="error-message">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>

                                        <!-- Status select dropdown -->
                                        <div class="form-floating mb-4">
                                            <select id="formStatus" class="form-select" name="status">
                                                <option value="active"
                                                    {{ old('status', $student->status) === 'active' ? 'selected' : '' }}>Active</option>
                                                <option value="inactive"
                                                    {{ old('status', $student->status) === 'inactive' ? 'selected' : '' }}>Inactive
                                                </option>
                                            </select>
                                            <label for="formStatus">Status</label>
                                            @if ($errors->has('status'))
                                                <span class="error-message">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>

                                        <!-- Position input -->
                                        <div class="form-floating mb-4">
                                            <input type="text" id="formPosition" class="form-control"
                                                name="position" value="{{ old('position', $student->position) }}" />
                                            <label for="formPosition">Position</label>
                                            @if ($errors->has('position'))
                                                <span class="error-message">{{ $errors->first('position') }}</span>
                                            @endif
                                        </div>

                                        <!-- Image input -->
                                        <div class="mb-4">
                                            <input type="file" id="formImage" class="form-control" name="image" />
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block">Update Your Information</button>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                        class="img-fluid" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End your project here -->

    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.umd.min.js') }}"></script>
</body>

</html>
