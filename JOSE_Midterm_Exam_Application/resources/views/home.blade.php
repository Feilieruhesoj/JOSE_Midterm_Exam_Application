<!DOCTYPE html>
<html>
<head>
    <title>Movies</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #e44d26;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #fff;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            margin-top: 0;
            color: #e44d26;
        }
        p {
            margin-bottom: 8px;
        }
        .genre {
            font-style: italic;
            color: #777;
        }
        .price {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>

        @if (count($movies) > 0)
            <ul>
                @foreach ($movies as $movie)
                    <li>
                        <h2>{{ $movie['title'] }}</h2>
                        <p>{{ $movie['description'] }}</p>
                        <p>Cast: {{ implode(', ', $movie['cast']) }}</p>
                        <p class="genre">Genre: {{ $movie['genre'] }}</p>
                        <p class="price">Price: ${{ $movie['price'] }}</p>
                    </li>
                @endforeach
            </ul>
        @else
            <p>No movies found.</p>
        @endif
    </div>
</body>
</html>