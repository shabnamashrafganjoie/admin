@extends('layouts.master')

@section('head-tag')
<title>دسترسی ها</title>
@endsection

@section('content')




<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                    دسترسی ها 
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('permission.create') }}" class="btn btn-info btn-sm">ایجاد دسترسی جدید</a>
              
            </section>

            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام دسترسی </th>
                            <th>نام نقش ها </th>
                            <th>وضعیت </th>

                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $key => $permission)

                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $permission->name }}</td>
                            <td>
                                @if(empty($permission->roles()->get()->toArray()))
                                <span class="text-danger">برای این دسترسی هیچ نقشی تعریف نشده است</span>
                                @else
                                @foreach($permission->roles as $role)
                                {{ $role->name }} <br>
                                @endforeach
                                @endif
                            </td>
                            <td>@if($permission->status == 0) غیرفعال @else فعال @endif</td>

                            <td class="width-22-rem text-left">
                                <a href="{{ route('permission.edit', $permission->id) }}"
                                    class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                <form class="d-inline"
                                    action="{{ route('permission.destroy', $permission->id) }}"
                                    method="post">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button class="btn btn-danger btn-sm delete" type="submit"><i
                                            class="fa fa-trash-alt"></i> حذف</button>
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
