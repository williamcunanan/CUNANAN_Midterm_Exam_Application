<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Cinematic Universe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e;
            font-family: 'Poppins', sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 2.8rem;
            font-weight: bold;
            color: #ff4b5c;
            text-transform: uppercase;
            margin-top: 30px;
            text-shadow: 2px 2px 10px rgba(255, 75, 92, 0.7);
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
        }

        .movie-card {
            background: rgba(255, 75, 92, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            position: relative;
            text-align: center;
        }

        .movie-card:hover {
            transform: scale(1.05);
            box-shadow: none; 
        }

        .movie-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-bottom: 3px solid #ff4b5c;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #fff;
        }

        .card-text {
            font-size: 1rem;
            color: #dcdcdc;
            margin: 5px 0;
        }

        .imdb-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.8);
            padding: 5px 10px;
            font-size: 0.9rem;
            font-weight: bold;
            border-radius: 10px;
            color: #f5c518;
        }

    </style>
</head>
<body>

    <h1>Marvel Cinematic Universe</h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4">
                    <div class="movie-card">
                        <span class="imdb-badge">⭐ {{ $movie['imdb'] }}/10</span>
                        <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }} Poster" onerror="this.onerror=null; this.src='https://via.placeholder.com/300x450?text=No+Image';">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text"><strong>Genre:</strong> {{ $movie['genre'] }}</p>
                            <p class="card-text"><strong>Year:</strong> {{ $movie['year'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
