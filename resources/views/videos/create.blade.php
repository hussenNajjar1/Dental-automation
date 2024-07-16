<!-- resources/views/videos/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Video</title>
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


            <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Video Name:</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Video Details:</label>
                    <textarea class="form-control" name="details" id="details"></textarea>
                </div>
                <div class="mb-3">
                    <label for="video" class="form-label">Upload Video:</label>
                    <input type="file" class="form-control" name="video" id="video">
                </div>
                <button type="submit" class="btn btn-primary align-items-center" style="display: block; margin: 0 auto; font-size: 20px; width: 300px;">Upload Video</button>
            </form>

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
