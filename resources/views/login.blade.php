@extends('layouts.master')

@section('head-tag')
<title>ورود</title>
@endsection

@section('content')




  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  ورود کاربر
                </h5>
            </section>

       

            <section>
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" id="form">
                    @csrf
                    <section class="row">

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




