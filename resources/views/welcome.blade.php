<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <form action="{{ route('generate') }}" method="post">
    @csrf
        <div class="container text-center">
        <h1 class="mb-4">Random Number Generator</h1>
            <div class="mb-3">
                <label for="quantity" name="quantitylabel" class="form-label">How many numbers to generate:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>
            <button type="submit" class="btn btn-success">Generate</button>
        <h2 class="mb-3">Generated Numbers:</h2>
        <div id="result" class="fs-4 fw-bold">
            @if (count($numbers) > 0)
                @foreach ($numbers as $index => $number)
                    {{ $number }}@if ($index < count($numbers) - 1), @endif
                @endforeach
            @else
                <p>Nehum numero gerado.</p>
            @endif
    </div>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

