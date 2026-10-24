<h1>User Accounts</h1>

<a href="/">Home</a>
<a href="/about">About</a>
<a href="/customers">Customers</a>
<a href="/users">Users</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user['id'] }}</td>
        <td>{{ $user['username'] }}</td>
    </tr>
    @endforeach

</table>