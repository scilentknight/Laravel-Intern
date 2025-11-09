<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
</head>
<body>
    <h1>Meet Our Team</h1>
    <ul>
        @foreach ($team as $member)
            <li>{{ $member }}</li>
        @endforeach
    </ul>
</body>
</html>
