<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trident Shipping Quotemail</title>
    <style>
        body, table, td, a {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        img {
            border: none;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .container {
            background-color: #f1f1f1;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            padding: 20px;
            margin: 25px auto !important;
        }

        .content-table td {
            padding: 8px;
            font-family: Arial, sans-serif;
            color: #333;
        }

        .content-table th {
            width: 150px;
            padding: 8px;
            font-family: Arial, sans-serif;
            color: black;
            text-align: left;
        }

        .sitebtn a {
            text-decoration: none;
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            display: inline-block;
            margin-top: 20px;
            border:1px solid #0056b3;
        }

        .sitebtn a:hover {
            background-color: #0056b3;
            color: white;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body style="background-color: #e5e5e5;">

    <div class="container">
        {{-- <div class="text-center">
            <figure>
                <img class="normal-logo" style="height: 125px;" src="{{asset('images/logo_png-dark.png')}}" loading="lazy" alt="logo" />
            </figure>
        </div> --}}

        <h3 class="text-center">Trident Shipping Quote-mail</h3>
        @if(!empty($maildata) && count($maildata) > 0)
        <table class="content-table" role="presentation">
            <tr>
                <th>Full Name:</th>
                <td>{{$maildata['fullname']}}</td>
            </tr>
            <tr>
                <th>Company Name:</th>
                <td>{{$maildata['companyname']}}</td>
            </tr>
            <tr>
                <th>Location:</th>
                <td>{{$maildata['location']}}</td>
            </tr>
            <tr>
                <th>Phone No.:</th>
                <td>{{$maildata['phoneno']}}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{$maildata['email']}}</td>
            </tr>
            <tr>
                <th>Message:</th>
                <td>{{$maildata['message']}}</td>
            </tr>
        </table>

        <div class="sitebtn text-center">
            <a href="">View Site</a>
        </div>

        @else
        <h5 class="text-center">Can't find any quote message</h5>
        @endif
    </div>

</body>
</html>
