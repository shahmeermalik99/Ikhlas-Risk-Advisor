<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikhlas Risk Advisor</title>
</head>

<body>
    <table border width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Passport No.</th>
                <th>Agent Code</th>
                <th>Phone No.</th>
                <th>Email</th>
                <th>Services Branch</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->passport_no}}</td>
                <td>{{$user->agent_code}}</td>
                <td>{{$user->phone_no}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->dropdown_menu}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>