<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh HTML Template with Table</title>
    <style>
        /* Simple table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<header>
    <h1>My Web Page</h1>
</header>
<main>
    <h2>{{ $mainTable?->name  }}</h2>
    <table>
        <thead>
        <tr>
            @if($mainTable)
                @foreach($mainTable->fields as $field)
                    <th>{{$field->name}}</th>
                @endforeach
                    <th>Actions</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($map as $item)
            <tr>
                @foreach($mainTable->fields as $field)
                    <td>{{ $item[$field->name] }}</td>
                @endforeach
                <td><a href="{{ route('order.edit', ['id' => $item['id']]) }}">Edit</a></td>
            </tr>
        @endforeach

        <!-- Add more rows as needed -->
        </tbody>
    </table>
</main>
<footer>
    <p>Footer content goes here.</p>
</footer>
</body>
</html>
