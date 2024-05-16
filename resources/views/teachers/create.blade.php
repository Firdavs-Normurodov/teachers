<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between  mb-3">
            <h1>Create page</h1>
            <a href={{ route('teachers.index') }}><button
                    class="btn btn-primary align-items-center m-0">back</button></a>
        </div>
        <form action={{ route('teachers.store') }} class="col-6" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="name">
                @error('name')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="exampleFormControlTextarea1">Addres</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="addres" rows="3"></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group mt-3">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control" id="Phone" name="phone" placeholder="phone">
            </div>
            <input type="submit" class="btn btn-primary mt-3" value="save" />
        </form>
    </div>
</body>

</html>
