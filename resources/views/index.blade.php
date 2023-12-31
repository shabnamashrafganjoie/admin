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
نمایش کاربران
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('create') }}" class="btn btn-info btn-sm">ایجاد کاربر</a>
               
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کاربر</th>
                            <th>نام خانوادگی کاربر</th>
                            <th>موبایل کاربر</th>
                            <th>وضعیت کاربر</th>



                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)

                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$user->first_name}}</td>
                            <td>{{$user->last_name}}</td>
                            <td>{{$user->mobile}}</td>
                            <td>@if($user->status == 0 ) غیرفعال @else فعال @endif</td>


                            <td class="width-16-rem text-center">
                                <a href="{{route('edit',$user->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <form class="d-inline" action="{{ route('destroy', $user->id) }}" method="post">
                                    @csrf
                                   {{ method_field('delete') }} 
                                <button class="btn btn-danger btn-sm delete" type="submit"><i class="fa fa-trash-alt"></i> حذف</button>
                            </form>
                            </td>
                        </tr>

                              @endforeach

                    </tbody>
                </table>
            </section>

        </section>
    </section>
</section>

@endsection


@section('script')

@include('alerts.sweetalert.delete-confirm', ['className' => 'delete'])


@endsection
