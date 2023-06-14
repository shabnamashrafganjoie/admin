@extends('layouts.master')

@section('head-tag')
<title>دسته بندی</title>
@endsection

@section('content')




  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  ایجاد دسته بندی
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('home') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="{{ route('update', $user->id) }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    @method('PUT')
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام کاربر</label>
                                <input type="text" name="first_name" value="{{ old('first_name', $user->first_name) }}" class="form-control form-control-sm">
                            </div>
                            @error('first_name')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>



                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام خانوادگی کاربر</label>
                                <input type="text" name="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control form-control-sm">
                            </div>
                            @error('last_name')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>


                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">موبایل کاربر</label>
                                <input type="text" name="mobile" value="{{ old('mobile', $user->mobile) }}" class="form-control form-control-sm">
                            </div>
                            @error('mobile')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام کاربری</label>
                                <input type="text" name="password" value="{{ old('password', $user->password) }}" class="form-control form-control-sm">
                            </div>
                            @error('password')
                                <span class="alert_required bg-danger text-white p-1 rounded" role="alert">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </section>



                    

                        <section class="col-12 col-md-6 my-2">
                            <div class="form-group">
                                <label for="status">وضعیت نمایش کاربر</label>
                                <select name="status"  class="form-control form-control-sm" id="status">
                                    <option value="0" @if (old('status', $user->status) == 0) selected @endif>غیرفعال</option>
                                    <option value="1" @if (old('status', $user->status) == 1) selected @endif>فعال</option>
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

                      

              



                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection



