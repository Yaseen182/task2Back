<!DOCTYPE html>
<html>
<head>
    <title>Team</title>
</head>
<body>
    <h2>Team Members</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>Role</th>
        </tr>
        @foreach($teamMembers as $member)
            <tr>
                <td>{{ $member['name'] }}</td>
                <td>{{ $member['role'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
