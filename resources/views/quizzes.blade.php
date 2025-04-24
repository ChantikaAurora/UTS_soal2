<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz List</title>
    <style>
        body { font-family: Arial; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; }
        th { background-color: #f4f4f4; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <h1>Available Quizzes</h1>
    @if(isset($data['error']))
        <p class="error">Error: {{ $data['error'] }}</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Question</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $quiz)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $quiz['category'] ?? 'N/A' }}</td>
                        <td>{{ $quiz['question'] ?? 'N/A' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
