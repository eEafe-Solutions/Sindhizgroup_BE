<!DOCTYPE html>
<html>

<head>
    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <center>
        <div>
            <h2><b>You have new a new massage from {{$contacts['name']}}</b></h2>

            <p>You can contact him via {{$contacts['mobile']}}</p>
            <p>See more details in your admin dashboard...</p>

        </div>
    </center>

</body>

</html>