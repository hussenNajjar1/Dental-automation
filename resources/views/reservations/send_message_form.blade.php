<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
    @include('layouts.style')
</head>
<body>
@include('layouts.SIDEBAR')
    <!-- Sidebar -->

    <section id="content">
        <!-- Navigation Bar --> 
        @include('layouts.header')
        <!-- Navigation Bar -->
        <!-- Main -->
        <main>

    <h1>Send Message</h1>
    <form action="{{ route('send.message') }}" method="post">
        @csrf
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value="{{ $phone }}" readonly class="form-control" >
        <label for="message">Message Text:</label>
        <textarea id="message" name="message" required class="form-control" ></textarea>
        <button type="submit" class="btn btn-primary align-items-center" style="display: block; margin: 10px auto; font-size: 20px; width: 300px;">Send</button>
    </form>
    </main>

    </section>
    <script src="{{ asset('script.js') }}"></script>
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

</body>
</html>
