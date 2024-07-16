<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    @include('layouts.style')
    <style>
        #link{
            color: white;
        }
    </style>
</head>
<body>
    <!-- SIDEBAR -->
    @include('layouts.SIDEBAR')
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content"> 
        <!-- NAVBAR -->
        @include('layouts.header')
        <!-- NAVBAR -->
        <!-- MAIN -->
        <main>

            <h1>Posts</h1>
            <a href="{{ url('/posts/create') }}"class="btn btn-primary align-items-center" style=" font-size: 20px; width: 300px;">Add Post</a>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Articles</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>

                                @foreach( $posts as $post)

                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td><span class="status completed"><a href="{{ url('/posts/'.$post->id.'/edit') }}" id="link">Edit</a></span></td>
                                <td>
                                    <form action="{{ url('/posts/'.$post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"  class="status completed">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

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
