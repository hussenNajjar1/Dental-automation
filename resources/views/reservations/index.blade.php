<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservations</title>
</head>
<body>
    <h1>View All Reservations</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Day</th>
                <th>Hour</th>
                <th>Date and Time</th>
                <th>Edit</th>
                <th>Delete</th>
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
                    <td>
                        <a href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
