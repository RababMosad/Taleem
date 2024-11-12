<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض  مقالات المدونة</title>
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

        .modal-dialog {
            max-width: 800px; 
        }

        .modal-content {
            padding: 20px;
        }

        .course-cards {
            display: flex;
            flex-wrap: wrap;
        }

        .course-card {
            flex: 0 0 calc(33.333% - 1rem); 
            margin-bottom: 1rem;
            margin: 0.5rem; 
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
                    <div class="course-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                   
                                        {{ $article->title }}
                                    
                                </h5>
                                <p class="card-text">
                                    
                                        {{ Str::limit($article->content, 100) }}
                                   
                                     
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#articleModal{{ $article->id }}">
                                    @lang('messages.Read More...')
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="articleModal{{ $article->id }}" tabindex="-1" aria-labelledby="articleModalLabel{{ $article->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"> 
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="articleModalLabel{{ $article->id }}">
                                        
                                            {{ $article->title }}
                                        
                                         
                                    </h5>
                                    <div class="close-button-container"> 
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="modal-body">
                                   
                                        {!! $article->content !!} 
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
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