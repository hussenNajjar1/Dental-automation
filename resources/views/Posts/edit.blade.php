<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
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

            <form action="{{ url('/posts/'.$post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Article Title</label>
                <input type="text" class="form-control"  value="{{ $post->title }}"  name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Article Description</label>
                <input type="text" class="form-control"   value="{{ $post->body }}" name="body" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary align-items-center" style="display: block; margin: 0 auto; font-size: 20px; width: 300px;">Submit</button>

            </form>  

        </div>
    </main>
    <!-- MAIN -->
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
