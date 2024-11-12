@extends('admin.main')

@section('content') 
<div class="container mt-5">
    <h1 class="mb-4">إدارة الدورات</h1>

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCourseModal">
        إضافة دورة
    </button>

    <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCourseModalLabel">إضافة دورة جديدة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">العنوان</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">الوصف</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">صورة الدورة</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">السعر</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="is_active" class="form-label">الحالة</label>
                            <select class="form-select" id="is_active" name="is_active">
                                <option value="1" selected>مفعل</option>
                                <option value="0">غير مفعل</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>العنوان</th>
                <th>الوصف</th>
                <th>السعر</th>
                <th>الحالة</th>
                <th>الصورة</th> 
                <th>الإجراءات</th> 
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->is_active ? 'مفعل' : 'غير مفعل' }}</td>
                    <td> 
                        @if ($course->image_path)
                            <img src="{{ asset('storage/' . $course->image_path) }}" alt="{{ $course->title }}" width="100"> 
                        @else
                            لا توجد صورة
                        @endif
                    </td> 
                    <td>
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#showModal-{{ $course->id }}">عرض</button>

                        <div class="modal fade" id="showModal-{{ $course->id }}" tabindex="-1" aria-labelledby="showModalLabel-{{ $course->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="showModalLabel-{{ $course->id }}">{{ $course->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>الوصف: {{ $course->description }}</p>
                                        <p>السعر: {{ $course->price }}</p>
                                        <p>الحالة: {{ $course->is_active ? 'مفعل' : 'غير مفعل' }}</p>
                                        @if ($course->image_path)
                                            <p>الصورة: <img src="{{ asset('storage/' . $course->image_path) }}" alt="{{ $course->title }}" width="200"></p> 
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-{{ $course->id }}">تعديل</button>

                        <div class="modal fade" id="editModal-{{ $course->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $course->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel-{{ $course->id }}">تعديل الدورة</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data"> 
                                            @csrf
                                            @method('PUT')
                                            <div class="mb-3">
                                                <label for="edit_title" class="form-label">العنوان</label>
                                                <input type="text" class="form-control" id="edit_title" name="title" value="{{ $course->title }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_description" class="form-label">الوصف</label>
                                                <textarea class="form-control" id="edit_description" name="description" rows="3" required>{{ $course->description }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_price" class="form-label">السعر</label>
                                                <input type="number" class="form-control" id="edit_price" name="price" step="0.01" value="{{ $course->price }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_is_active" class="form-label">الحالة</label>
                                                <select class="form-select" id="edit_is_active" name="is_active">
                                                    <option value="1" {{ $course->is_active ? 'selected': '' }}>مفعل</option>
                                                    <option value="0" {{ !$course->is_active ? 'selected' : '' }}>غير مفعل</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="edit_image" class="form-label">صورة جديدة (اختياري)</label> 
                                                <input type="file" class="form-control" id="edit_image" name="image">
                                            </div>
                                            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل  أنت متأكد من حذف هذه الدورة؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection