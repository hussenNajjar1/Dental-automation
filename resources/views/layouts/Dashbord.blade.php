<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
    <!-- Include any necessary CSS or other files -->
    @include('layouts.style')
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
        <!-- Main -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>View All Reservations</h1>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Reservation Data</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>Day</th>
                                <th>phone</th>
                                <th>Date and Time</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Send Message</th> <!-- Add a label for the button -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->age }}</td>
                                <td>{{ $reservation->address }}</td>
                                <td>{{ $reservation->day }}</td>
                                <td>{{ $reservation->hour }}</td>
                                <td>{{ $reservation->date_time }}</td>
                                <td><a href="{{ route('reservations.edit', $reservation->id) }}" class="status completed" >Edit</a></td>
                                <td>
                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="status completed" >Delete</button>
                                    </form>
                                </td>
                                <td> <!-- Add the button for sending a message -->
                                    <a href="{{ route('send.message.form', ['phone' => $reservation->hour]) }}" class="status completed" >Send Message</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
        <!-- Main -->
    </section>
    <!-- Content -->

    <!-- Include any necessary JavaScript or other files -->
    <script src="{{ asset('script.js') }}"></script>

    <!-- Display any prepared messages -->
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
