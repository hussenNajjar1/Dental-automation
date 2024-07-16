<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Video</title>
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
            <form action="{{ route('videos.update', $video->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Video Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $video->name }}">
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Video Details:</label>
                    <textarea class="form-control" id="details" name="details">{{ $video->details }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary align-items-center" style="display: block; margin: 0 auto; font-size: 20px; width: 300px;">Update Video</button>
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
