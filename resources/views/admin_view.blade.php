<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @include('layouts.admin.head')
    <title>IKHLAS RISK ADVISOR</title>
</head>

<body>
   @include('layouts.admin.navbar')
   @include('layouts.admin.sidebar')
   @yield('content')
   @include('layouts.admin.script')
</body>

</html>