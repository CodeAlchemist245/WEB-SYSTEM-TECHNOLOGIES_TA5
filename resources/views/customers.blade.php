<h1>Customer Accounts</h1>

<a href="/">Home</a>
<a href="/about">About</a>
<a href="/customers">Customers</a>
<a href="/users">Users</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer['id'] }}</td>
        <td>{{ $customer['name'] }}</td>
        <td>{{ $customer['email'] }}</td>
    </tr>
    @endforeach

</table>