<!DOCTYPE html>
<html>

<head>
    <title>YMP</title>
</head>

<body>
    <h1> All theaters </h1>

    <table border="1">
        <thead>
            <th>Theater Image</th>
            <th>Theater Name</th>
            <th>Theater Type</th>
            <th>Theater Venue</th>
            <th>Time 1</th>
            <th>Time 2</th>
            <th>Total Theaters</th>


        </thead>
        <tbody>
            <tr>
            </tr>
            @foreach($data as $theaters)
            <tr>
                <td><img src="{{$theaters->image}}"></td>
                <td>{{$theaters->name}}</td>
                <td>{{$theaters->type}}</td>
                <td>{{$theaters->venue}}</td>
                <td>{{$theaters->time1}}</td>
                <td>{{$theaters->time2}}</td>
                <td>{{count($data)}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>