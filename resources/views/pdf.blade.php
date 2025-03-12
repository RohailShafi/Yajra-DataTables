<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Report</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .footer { margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
<table>
    <tr>
        <td style="width: 50%;">
            <img src="{{ asset('myimage.png') }}" alt="image" width="200" />
        </td>
        <td style="width: 50%;">
            <h2>PDF ID: test523</h2>
        </td>
    </tr>
</table>

<h3>Records List</h3>
<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    @foreach($records as $index => $record)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $record['name'] }}</td>
            <td>{{ $record['email'] }}</td>
{{--            <td>{{ $record['phone'] }}</td>--}}
        </tr>
    @endforeach
</table>

<div class="footer">
    <div>Thank you</div>
</div>
</body>
</html>
