<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <!-- Include any necessary CSS or other files -->
    @include('layouts.style')
</head>
<body>
    <!-- Sidebar -->
    @include('layouts.SIDEBAR')
    <!-- Sidebar -->

    <section id="content">
        <!-- Navigation Bar --> 
        @include('layouts.header')
        <!-- Navigation Bar -->
        <!-- Main -->
        <main>
            <div class="forms">
                <form action="{{ route('reservations.update', $reservation->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $reservation->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input type="text" class="form-control" id="age" name="age" value="{{ $reservation->age }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ $reservation->address }}">
                    </div>
                    <div class="mb-3">
                        <label for="day" class="form-label">Day:</label>
                        <input type="text" class="form-control" id="day" name="day" value="{{ $reservation->day }}">
                    </div>
                    <div class="mb-3">
                        <label for="hour" class="form-label">Hour:</label>
                        <input type="text" class="form-control" id="hour" name="hour" value="{{ $reservation->hour }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_time" class="form-label">Date and Time:</label>
                        <input type="datetime-local" class="form-control" id="date_time" name="date_time" value="{{ date('Y-m-d\TH:i', strtotime($reservation->date_time)) }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </main>
        <!-- Main -->
    </section>

    <!-- Include any necessary JavaScript or other files -->
    <script src="{{ asset('script.js') }}"></script>
</body>
</html>


<script>
    @if(session('info'))
        toastr.options = {
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
            "extendedTimeOut": "2000",
            "closeButton": true,
            "progressBar": true,
            "newestOnTop": true,
            "preventDuplicates": true,
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "iconClass": "fas fa-check-circle" // Specify the desired icon here
        };
        toastr.success('{{ session('info') }}');
    @endif
</script>
