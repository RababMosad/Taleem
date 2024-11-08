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
        <div class="row">
            <div class="col-md-12">
                <div class="course-cards"> 
                    @foreach ($articles as $article)
                        <div class="course-card col-md-4">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $article->title }}</h5>
                                    <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                                    <a href="#" class="btn btn-primary">اقرأ المزيد</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"   
 crossorigin="anonymous"></script>   

</body>
</html> 