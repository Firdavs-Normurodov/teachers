<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between  mb-3">
            <h1>SHow page</h1>
            <a href={{ route('teachers.index') }}><button
                    class="btn btn-primary align-items-center m-0">back</button></a>
        </div>
        <div class="col-4 mx-auto mt-5">
            <div class="dropdown-menu d-block position-static pt-0 mx-0 rounded-3 shadow overflow-hidden w-280px"
                data-bs-theme="light">

                <ul class="list-unstyled mb-0">
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                            {{ $teacher->id }}
                        </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-success rounded-circle p-1"></span>
                            {{ $teacher->name }}
                        </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-primary rounded-circle p-1"></span>
                            {{ $teacher->addres }}
                        </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-danger rounded-circle p-1"></span>
                            {{ $teacher->phone }}
                        </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-info rounded-circle p-1"></span>
                            {{ $teacher->email }}
                        </a></li>
                    <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
                            <span class="d-inline-block bg-secondary rounded-circle p-1"></span>
                            {{ $teacher->created_at->format('Y-m-d H:i') }}
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
