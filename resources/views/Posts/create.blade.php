<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    @include('layouts.style')

    <style>
      .notify-right-bottom {
    margin-top: 50px;
}
.dark .form-label {
    color: white;
}

    </style>
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
            <form action="{{ url('/posts') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Article Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Article Description</label>
                    <input type="text" class="form-control"  name="body" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary align-items-center" style="display: block; margin: 0 auto; font-size: 20px; width: 300px;">Submit</button>
            </form>
        </div>
    </main>
    <!-- MAIN -->
    <!-- Notify -->
    <x-notify::notify class="notify-right-bottom" style="margin-top: 50px;" />

    <!-- End Notify -->
</section>

<script src="{{ asset('script.js') }}"></script>
<script>
@if(session('info'))
toastr.options={
        "progressBar":true,
    }
    toastr.success('{{ session('info') }}');
@endif
</script>


</body>
</html>
