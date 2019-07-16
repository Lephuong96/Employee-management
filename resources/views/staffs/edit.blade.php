@extends('home')
@section('title', 'Chỉnh sửa nhân viên')

@section('content')
    <div class="text-primary text-md-center">
        <h2>Chỉnh sửa nhân viên</h2>
    </div>
    <div class="row">

        <div class="col-md-12">
            <form method="post" action="{{ route('staffs.update', $staff->id) }}" >
                @csrf
                <div class="row">
                    <div class="col">
                        <label>Mã nhân viên:</label>
                        <input type="text" class="form-control" name="employee_id" required value="{{$staff->id}}">
                    </div>
                    <div class="col">
                        <label>Số điện thoại:</label>
                        <input type="tel" class="form-control" name="phone_number" required value="{{$staff->phone_number}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Nhóm nhân viên:</label>
                        <select class="form-group" name="group_employees" required>
                            <option value="Chưa phân chức vụ">--Chọn chức vụ--</option>
                            <option value="Quản lí điều hành">Quản lí điều hành</option>
                            <option value="Thư kí">Thư kí</option>
                            <option value="Kế toán">Kế toán</option>
                            <option value="Nhân viên lễ tân">Nhân viên lễ tân</option>
                            <option value="Thực tập sinh">Thực tập sinh</option>
                            <option value="Chuyên viên">Chuyên viên</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Số CMND:</label>
                        <input type="integer" class="form-control" name="card_number" required value="{{$staff->card_number}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Họ tên:</label>
                        <input type="text" class="form-control" name="name" required value="{{$staff->name}}">
                    </div>
                    <div class="col">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" required value="{{$staff->email}}">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Ngày sinh:</label>
                        <input type="date" class="form-control" name="birthday" required value="{{$staff->birthday}}">
                    </div>

                    <div class="col">
                        <label>Địa chỉ:</label>
                        <input type="text" class="form-control" name="address" required value="{{$staff->address}}">
                    </div>
                </div>
                <div class="form-group">
                    <label>Giới tính:</label>
                    <input name="gender" type="radio" value="Nam"/>Nam
                    <input name="gender" type="radio" value="Nữ"/>Nữ
                </div>
                <button type="submit" class="btn btn-primary" onclick="return confirm('Bạn chắc chắn muốn thay đổi?') ">Cập nhật</button>
                <a href="{{route('staffs.index')}}" class="btn btn-dark">Hủy</a>
            </form>
        </div>
    </div>
@endsection
