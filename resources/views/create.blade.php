@extends('layouts.master')

@section('head-tag')
<title>کاربران</title>
@endsection

@section('content')




  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  ایجاد کاربر
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('home') }}" class="btn btn-info btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام </label>
                                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" class="form-control form-control-sm">
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
                                <label for="">نام خانوادگی </label>
                                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" class="form-control form-control-sm">
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
                                <label for="">موبایل </label>
                                <input type="text" id="mobile" name="mobile" value="{{ old('mobile') }}" class="form-control form-control-sm">
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
                                <label for="">رمز عبور </label>
                                <input type="text" id="password" name="password" value="{{ old('password') }}" class="form-control form-control-sm">
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


@section('script')

    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
    </script>

    <script>
        $(document).ready(function () {
            var tags_input = $('#tags');
            var select_tags = $('#select_tags');
            var default_tags = tags_input.val();
            var default_data = null;

            if(tags_input.val() !== null && tags_input.val().length > 0)
            {
                default_data = default_tags.split(',');
            }

            select_tags.select2({
                placeholder : 'لطفا تگ های خود را وارد نمایید',
                tags: true,
                data: default_data
            });
            select_tags.children('option').attr('selected', true).trigger('change');


            $('#form').submit(function ( event ){
                if(select_tags.val() !== null && select_tags.val().length > 0){
                    var selectedSource = select_tags.val().join(',');
                    tags_input.val(selectedSource)
                }
            })
        })
    </script>

@endsection

