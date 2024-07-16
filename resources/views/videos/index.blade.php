<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.style')
    
    <style>
        body {
            background-color: #0c1022;
            color: white;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
        }

        .card {
            width: 300px;
            margin: 15px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            transition: 0.4s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card video {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
            width: 100%;
            height:auto;
            background-color: #171f3f;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: #fff;
        }

        .card-link {
            display: block;
            text-align: center;
            padding: 10px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        video{
            width: 100%;
            height: 15px;
        }

      
    </style>
</head>
<body>

<div class="cards">
    @foreach($videos as $video)
        <a href="{{ route('videos.show', ['id' => $video->id]) }}" class="card-link">
            <div class="card">
                <div class="card-content">
                    <h5 class="card-title">{{ $video->name }}</h5>
                    <video controls>
                <source src="{{ Storage::url($video->video_path) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

                </div>
            </div>
        </a>
    @endforeach
</div>

</body>
</html>
