<!-- resources/views/videos/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    body{
        background-color: #0c1022;
    color: white;
    }
     
    .card-body video {
        height: 500px;
    }
    .card-body h5  {
        font-size: 34px;
        padding-left:20px;
    }
    .card-body p {
        font-size: 25px;
        padding-left:20px;
       
    }
   </style>
</head>
<body>
    
<div class="container">
        <div class="card">
            <div class="card-body">
                <video width="100%" controls>
                    <source src="{{ Storage::url($video->video_path) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <center>

                    <h5 class="card-title">{{ $video->name }}</h5>
                    <p class="card-text">{{ $video->details }}</p>
                </center>
            </div>
        </div>
    </div>
</body>
</html>

