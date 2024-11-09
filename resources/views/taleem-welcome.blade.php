<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>صفحة الدورات</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    .course-cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin: 0 auto;
    }

    .course-card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body dir="rtl">

@include('layouts.navbar') 

<div class="container ">
  <div class="row">
    <div class="col-md-12">
      <div class="course-cards">
        @foreach( $courses as $course)
        <div class="course-card col-md-4">
          <div class="card mb-4">
            <a href="{{ route('courses.videos', ['courseId' => $course->id]) }}">
              <img class="card-img-top" src="{{ asset('images/' . $course->image_path) }}" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{ $course->title }}</h5>
              <p class="card-text">{{ $course->description }}</p>
              <p class="card-text"><small class="text-muted">Last updated {{ $course->updated_at->diffForHumans() }}</small></p>
              <p><strong>عنوان الفيديو:</strong> {{ $course->video_title }}</p>
              <p><strong>حالة النشاط:</strong> {{ $course->is_active ? 'نشط' : 'غير نشط' }}</p>
              <p><strong>السعر:</strong> ${{ $course->price }}</p>
              <form action="{{ route('stripe') }}" method="POST"> 
                @csrf 
                <input type="hidden" name="product_name" value="{{ $course->title }}"> 
                <input type="hidden" name="price" value="{{ $course->price }}">
                <input type="hidden" name="quantity" value="1">  
                <button type="submit" class="btn btn-primary">اشتري الآن</button>
            </form>
              
            </div>
          </div>
        </div>  
        @endforeach
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>