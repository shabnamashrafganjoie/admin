@extends('layouts.master')

@section('head-tag')
<title>نقش ها</title>
@endsection

@section('content')


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    نقش ها
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('role.create') }}" class="btn btn-info btn-sm">ایجاد نقش جدید</a>
               
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام نقش	</th>
                            <th>دسترسی ها</th>
                            <th>وضعیت</th>

                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $key => $role)

                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $role->name }}</td>
                            <td>
                                @if(empty($role->permissions()->get()->toArray()))
                                <span class="text-danger">برای این نقش هیچ سطح دسترسی تعریف نشده است</span>
                                @else
                                @foreach($role->permissions as $permission)
                                {{ $permission->name }} <br>
                                @endforeach
                                @endif
                                </td>

                                <td>@if($role->status == 0) غیرفعال @else فعال @endif</td>


                            <td class="width-22-rem text-left">
                                <a href="{{ route('role.permission-form', $role->id) }}" class="btn btn-success btn-sm"><i class="fa fa-user-graduate"></i> دسترسی ها</a>
                                <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <form class="d-inline" action="{{ route('role.destroy', $role->id) }}" method="post">
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
