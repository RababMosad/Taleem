@extends('admin.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">إدارة المقالات</h1>

    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addArticleModal">
        إضافة مقال
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>العنوان</th>
                <th>المحتوى</th>
                {{-- <th>اللغة</th>
                <th>الحالة</th> --}}
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    {{-- <td>{{ $article->language == 'ar' ? 'عربي' : 'English' }}</td>
                    <td>{{ $article->status ? 'منشور' : 'غير منشور' }}</td> --}}
                    <td>
                        <a href="#" data-toggle="modal" data-target="#showModal-{{ $article->id }}" class="btn btn-info btn-sm">عرض</a>

                        <div class="modal fade" id="showModal-{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel-{{ $article->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="showModalLabel-{{ $article->id }}">{{ $article->title }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{ $article->content }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" data-toggle="modal" data-target="#editModal-{{ $article->id }}" class="btn btn-warning btn-sm">تعديل</a>

                        <div class="modal fade" id="editModal-{{ $article->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{ $article->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel-{{ $article->id }}">تعديل المقال</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('articles.update', $article->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="title">العنوان</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="content">المحتوى</label>
                                                <textarea class="form-control" id="content" name="content" rows="5" required>{{ $article->content }}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="language">اللغة</label>
                                                <select class="form-control" id="language" name="language">
                                                    <option value="ar" {{ $article->language == 'ar' ? 'selected' : '' }}>عربي</option>
                                                    <option value="en" {{ $article->language == 'en' ? 'selected' : '' }}>English</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">الحالة</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1" {{ $article->status ? 'selected' : '' }}>منشور</option>
                                                    <option value="0" {{ !$article->status ? 'selected' : '' }}>غير منشور</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من حذف هذا المقال؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="addArticleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addArticleModalLabel">إضافة مقال جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('articles.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">العنوان</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">المحتوى</label>
                        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="language">اللغة</label>
                        <select class="form-control" id="language" name="language">
                            <option value="ar">عربي</option>
                            <option value="en">English</option>
                        </select>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label for="status">الحالة</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">منشور</option>
                            <option value="0">غير منشور</option>
                        </select>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection