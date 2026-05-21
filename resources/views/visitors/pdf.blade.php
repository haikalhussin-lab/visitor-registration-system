<html>
    <head>
        <title>Visitor Details</title>
    </head>
    <table>
        <tr style="background-color:rgb(235, 24, 24);">
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <tr>
            <td>{{ $visitor->name }}</td>
            <td>{{ $visitor->phone }}</td>
            <td>{{ $visitor->email }}</td>
        </tr>
    </table>
    <body>
        <h1>Visitor Details</h1>
        <p>Name: {{ $visitor->name }}</p>
        <p>Phone: {{ $visitor->phone }}</p>
        <p>Email: {{ $visitor->email }}</p>
    </body>
</html>