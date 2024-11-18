@extends('admin.main')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">إدارة فيديوهات الكورس: {{ $course->title }}</h1>

    <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addVideoModal">إضافة فيديو</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>الرابط</th>
                <th>عنوان الكورس</th> 
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allVideos as $video) 
                <tr>
                    <td>{{ $video->url }}</td>
                    <td>{{ $video->course->title ??'None'}}</td> 
                    <td>
                        <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#showModal-{{ $video->id }}">عرض</a>
                        <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal-{{ $video->id }}">تعديل</a>
                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{ $video->id }}">حذف</a>
                    </td>
                </tr>

                <div class="modal fade" id="showModal-{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="showModalLabel-{{ $video->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="showModalLabel-{{ $video->id }}">عرض الفيديو</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>الرابط:</strong> {{ $video->url }}</p>
                                <p><strong>عنوان الكورس:</strong> {{ $video->course->title??'None' }}</p> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editModal-{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{ $video->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel-{{ $video->id }}">تعديل الفيديو</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('videos.update', $video) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="url">رابط الفيديو</label>
                                        <input type="text" class="form-control" id="url" name="url" value="{{ $video->url }}" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="deleteModal-{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel-{{ $video->id }}" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel-{{ $video->id }}">حذف الفيديو</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>هل أنت متأكد من حذف هذا الفيديو؟</p>
                                <form action="{{ route('videos.destroy', $video) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="addVideoModal" tabindex="-1" role="dialog" aria-labelledby="addVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVideoModalLabel">إضافة فيديو جديد</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('videos.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <div class="form-group">
                        <label for="url">رابط الفيديو</label>
                        <input type="text" class="form-control" id="url" name="url" required>
                    </div>
                    {{-- <div class="form-group">
                        <label>كورس الفيديو</label>
                        <p>{{ $course->title }}</p> 
                    </div> --}}
                    <div class="form-group">
                        <label for="course_id">كورس الفيديو</label>
                        <select class="form-control" id="course_id" name="course_id" required>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" {{ $course->id == $video->course_id ? 'selected' : '' }}>
                                    {{ $course->title}}  
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </form> 
            </div>
        </div>
    </div>
</div>
@endsection