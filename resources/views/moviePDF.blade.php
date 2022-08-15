<!DOCTYPE html>
<html>

<head>
    <title>YMP</title>
</head>

<body>
    <h1> All Movies </h1>

    <table border="1">
        <thead>
            <th>Movie Image</th>
            <th>Movie Name</th>
            <th>Movie Type</th>
            <th>Theater Description</th>
            <th>Total Movies</th>
            <th>theaters</th>

        </thead>
        <tbody>
            <tr>
            </tr>
            @foreach($data as $movies)
            <tr>
                <td><img src="{{$movies->image}}"></td>
                <td>{{$movies->name}}</td>
                <td>{{$movies->type}}</td>
                <td>{{$movies->description}}</td>
                <td>{{count($data)}}</td>
                <td> @foreach($movies->theaters as $tdata)
                    {{$tdata}}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>