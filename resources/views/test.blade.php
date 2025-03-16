<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Sample Data</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach($samples as $sample)
                <tr>
                    <td>{{ $sample->id }}</td>
                    <td>{{ $sample->name }}</td>
                    <td>{{ $sample->value }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
