<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add records</title>
    @include('layouts.style')
</head>
<body>

@include('layouts.SIDEBAR')
<section id="content">
    <!-- NAVBAR -->
    @include('layouts.header')
    <!-- NAVBAR -->
    <!-- MAIN -->
    <main>
        <div class="forms">
            <h1>Add New Record</h1>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('records.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age:</label>
                    <input type="text" class="form-control"  name="age" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address:</label>
                    <input type="text" class="form-control"  name="address" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Work:</label>
                    <input type="text" class="form-control"  name="work" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Medicine:</label>
                    <input type="text" class="form-control"  name="medicine" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Date:</label>
                    <input type="date" class="form-control"  name="date" id="exampleInputPassword1">
                </div>
                <button type="submit"class="btn btn-primary align-items-center" style="display: block; margin: 0 auto; font-size: 20px; width: 300px;">Add</button>
            </form>
        </div>
    </main>
    <!-- MAIN -->
</section>

<script src="{{ asset('script.js') }}"></script>

</body>
</html>
