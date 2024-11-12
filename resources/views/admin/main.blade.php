<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif; /* اختيار خط مناسب */
            background-color: #f4f4f4; /* لون خلفية الجسم */
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            width: 10%;
            background-color: #212529; /* لون خلفية الشريط الجانبي */
            padding: 20px;
            color: #fff; /* لون النص في الشريط الجانبي */
        }

        .sidebar-sticky ul li {
            margin-bottom: 10px;
            padding-top: 5px;
        }

        .navbar-brand {
            color: #fff; /* لون اسم الموقع */
        }

        .nav-link {
            color: #fff; /* لون الروابط في القائمة العلوية */
        }

        .nav-link.active {
            background-color: #343a40; /* لون الخلفية للرابط النشط */
        }

        .h2 {
            text-align: center; /* مركز نص عنوان لوحة التحكم */
        }
            
        .sidebar-sticky ul {
            /* ... أنماط سابقة ... */
            justify-content: center; /* مراكز عناصر القائمة عمودياً */
        }
    </style>
</head>
<body>

    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">اسم الموقع</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">الإشعارات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">الصفحة الرئيسي</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

   <div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('courses.index') }}">
                            <i class="fas fa-graduation-cap"></i> ادارة الدورة
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('videos.index') }}">
                            <i class="fas fa-book"></i> ادارة محتويات الدورات 
                        </a>
                    </li>
                    <li>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('articles.index') }}">
                            <i class="fas fa-blog"></i> ادارة مقالات المدونة
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
            {{-- @if ($page == 'courses') 
                @yield('courses') 
            @elseif ($page == 'articles') 
                @yield('content') 
            @endif  --}}

            @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>