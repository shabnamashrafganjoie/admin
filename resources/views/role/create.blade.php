@extends('layouts.master')

@section('head-tag')
<title>ایجاد نقش</title>
@endsection

@section('content')



  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  ایجاد نقش
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('role.index') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="{{ route('role.store') }}" method="post">
                    @csrf
                    <section class="row">

                        <section class="col-12 col-md-5">
                            <div class="form-group">
                                <label for="">عنوان نقش</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control-sm">
                            </div>
                            @error('name')
                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>
                        


                        <section class="col-12 col-md-6 ">
                            <div class="form-group">
                                <label for="status">وضعیت نمایش </label>
                                <select name="status" class="form-control form-control-sm" id="status">
                                    <option value="0" @if(old('status') == 0) selected @endif>غیرفعال</option>
                                    <option value="1" @if(old('status') == 1) selected @endif>فعال</option>
                                </select>
                            </div>
                            @error('status')
                            <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                <strong>
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror
                        </section>




                        <section class="col-12 col-md-2">
                            <button class="btn btn-primary btn-sm mt-md-4">ثبت</button>
                        </section>

                        <section class="col-12">
                            <section class="row border-top mt-3 py-3">

                                @foreach ($permissions as $key => $permission)


                                <section class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}" id="{{ $permission->id }}" checked>\
                                        <label for="{{ $permission->id }}" class="form-check-label mr-3 mt-1">{{ $permission->name }}</label>
                                    </div>
                                    <div class="mt-2">
                                        @error('permissions.' . $key)
                                        <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </span>
                                    @enderror
                                    </div>
                                </section>

                                @endforeach




                            </section>
                        </section>

                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
