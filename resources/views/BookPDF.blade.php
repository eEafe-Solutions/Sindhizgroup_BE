<!DOCTYPE html>
<html>

<head>
    <title>YMP</title>
</head>

<body>
    <h1> All Bookings </h1>

    <table border="1">
        <thead>
            <th>Movie Name</th>
            <th>Theater Name</th>
            <th>Theater type</th>
            <th>Show Time </th>
            <th>Seats </th>
            <th>Amount</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Total Bookings</th>

        </thead>
        <tbody>
            <tr>
            </tr>
            @foreach($data as $bookings)
            <tr>
                <td>{{$bookings->movie_name}}</td>
                <td>{{$bookings->theater_name}}</td>
                <td>{{$bookings->theater_type}}</td>
                <td>{{$bookings->showtime}}</td>
                <td>{{$bookings->seats}}</td>
                <td>{{$bookings->price}}</td>
                <td>{{$bookings->full_name}}</td>
                <td>{{$bookings->email}}</td>
                <td>{{count($data)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>