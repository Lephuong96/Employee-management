@extends('home')
@section('title', 'Danh sách nhân viên')
@section('content')
    <div class="row text-md-center" >
        <div class="col-md-12 text-primary">
            <h2>Danh sách nhân viên</h2>
        </div>
        <div class="col-12">
            @if (Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    {{ Session::get('success') }}
                </p>
            @endif
                @if(isset($totalStaffFilter))
                    <span class="text-primary">
                      {{'Tìm thấy' . ' ' . $totalStaffFilter . ' '. 'nhân viên:'}}
                  </span>
                @endif

        </div>
        <div class="col-6">
            <form class="navbar-form navbar-left" action="{{ route('staffs.search') }}" method="get">
                @csrf
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Search" value="{{ (isset($_GET['keyword'])) ? $_GET['keyword'] : '' }}">
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-default">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr><th scope="col">Số thứ tự</th>
                    <th scope="col">Mã nhân viên</th>
                    <th scope="col">Nhóm nhân viên</th>
                    <th scope="col">Họ tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Chức năng</th>

                </tr>
                </thead>
                <tbody>
                @foreach($staffs as $key => $staff)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $staff->employee_id }}</td>
                        <td>{{ $staff->group_employees }}</td>
                        <td>{{ $staff->name }}</td>
                        <td>{{ $staff->gender }}</td>
                        <td>{{ $staff->phone_number }}</td>
                        <td><a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-primary">sửa</a>
                            <a href="{{ route('staffs.destroy', $staff->id) }}" class="btn btn-dark"
                               onclick="return confirm('Bạn chắc chắn muốn xóa?') ">xóa</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{ route('staffs.create') }}" class="btn btn-primary ">Thêm mới</a>
        </div>
    </div>

@endsection
