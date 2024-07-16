<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records</title>
    @include('layouts.style')
    <style>
        a{
            font-size:25px;
        }
        #search{
            border-radius: 4px;
            text-align: center;
            width: 341px;
        }
        .main{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0a5897;
            border-radius: 9px;
            color: wheat;
        }
        .btn{
            color: white;
            font-size: 20px;
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
            <div class="head-title">
                <div class="left">
                    <h1>View Records</h1>
                </div>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <p style="color: green;">{{ session('success') }}</p>
            @endif

            <!-- Add New Record -->
            <a href="{{ route('records.create') }}" class="btn btn-primary align-items-center" style=" margin: 8px auto; font-size: 20px; width: 300px;" >Add New Record</a>

            <div class="main">
                <!-- Search Form -->
                <form method="GET" action="{{ route('records.search') }}">
                    <input type="text" name="name" placeholder="Search by Name" id="search">
                    <button type="submit" class="btn" >Search</button>
                </form>
            </div>

            <!-- Records Table -->
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Patient Data</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Work</th>
                                <th>Medicine</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($records as $record)
                            <tr>
                                <td>{{ $record->name }}</td>
                                <td>{{ $record->age }}</td>
                                <td>{{ $record->address }}</td>
                                <td>{{ $record->work }}</td>
                                <td>{{ $record->medicine }}</td>
                                <td>{{ $record->date }}</td>
                                <td>
                                    <a href="{{ route('records.edit', $record->id) }}" class="status completed" >Edit</a>
                                    <br>
                                    <form method="POST" action="{{ route('records.destroy', $record->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="status completed " style="margin:8px 0px">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="{{ asset('script.js') }}"></script>

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
