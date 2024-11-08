<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>عرض
 فيديو يوتيوب</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    .video-container {
      position: relative;
      padding-bottom: 56.25%; /* نسبة العرض إلى الارتفاع 16:9 */
      height: 0;
      overflow: hidden;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>
<body>

    @include('layouts.navbar')

    <div class="container"> 

        <h2>الفيديوهات الخاصة بالدورة </h2>
        <div class="row">
          @foreach ($videos as $video)
            <div class="col-md-4 mb-4">
              <div class="card">
                <div class="card-body">
                  
                  <p class="card-text">
                    <iframe width="100%" height="200" src="{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
    
                  </p>
                </div>
              </div>
            </div>
          @endforeach
        </div> 
    
      </div>
</body>  

</html>