<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Video Data</title>
    <!-- Include any necessary CSS or other files -->
    @include('layouts.style')
    <style>
        video{
            width: 50px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    @include('layouts.SIDEBAR')
    <!-- Sidebar -->

    <!-- Content -->
    <section id="content">
        <!-- Navigation Bar -->
        @include('layouts.header')
        <!-- Navigation Bar -->
        <!-- Main Content -->
        <main>
                <div class="head-title">
            <div class="left" >
                <a href="{{ route('videos.create') }}" class="btn btn-primary">Add New Video</a>
            </div>
            <div class="right">
                <h1>View All Videos</h1>
            </div>
        </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Video Data</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                                <th>Video</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($videos as $video)
                            <tr>
                                <td>{{ $video->name }}</td>
                                <td>{{ $video->details }}</td>
                                <td><video src="{{ asset('storage/' . $video->video_path) }}" controls></video></td>
                                <td><a href="{{ route('videos.edit', $video->id) }}"class="status completed">Edit</a></td>
                                <td>
                                    <form action="{{ route('videos.destroy', $video->id) }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="status completed">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- Main Content -->
    </section>
    <!-- Content -->

    <!-- Include any necessary JavaScript or other files -->
    <script src="{{ asset('script.js') }}"></script>

    <!-- Show any prepared messages -->
    <script>
    @if(session('info'))
    toastr.options = {
        "progressBar": true,
    }
    toastr.success('{{ session('info') }}');
    @endif
    </script>
</body>
</html>
