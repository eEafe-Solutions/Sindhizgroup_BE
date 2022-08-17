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

    <div style="padding-top:10%;padding-left:40%;">
        <h2>You have new Applicant here! </h2>

        <h3><b>his/her details are below</h3><b>
            <p>Applies Poaition : {{$contain['applied_position']}}</p>
            <p>Massage Of the Applicant : {{$contain['massage']}}</p>
    </div>

   
</body>

</html>