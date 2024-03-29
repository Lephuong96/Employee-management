@extends('home')
@section('title', 'Thêm mới nhân viên')
@section('content')
    <div class="text-primary text-md-center">
        <h2>Thêm mới nhân viên</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="{{ route('staffs.store') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <label>Mã nhân viên:</label>
                        <input type="text" class="form-control" name="employee_id" required>
                    </div>
                    <div class="col">
                        <label>Số điện thoại:</label>
                        <input type="tel" class="form-control" name="phone_number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Nhóm nhân viên:</label>
                        <select class="custom-select my-1 mr-sm-2" name="group_employees" required>
                            <option value="Chưa phân nhóm">--Chọn chức vụ--</option>
                            <option value="Quản trị hệ thống">Quản trị hệ thống</option>
                            <option value="Thư kí">Thư kí</option>
                            <option value="Kế toán">Kế toán</option>
                            <option value="Nhân viên lễ tân">Nhân viên lễ tân</option>
                            <option value="Thực tập sinh">Thực tập sinh</option>
                            <option value="Chuyên viên">Chuyên viên</option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Số CMND:</label>
                        <input type="integer" class="form-control" name="card_number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Họ tên:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col">
                        <label>Email:</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Ngày sinh:</label>
                        <input type="date" class="form-control" name="birthday" required>
                    </div>

                    <div class="col">
                        <label>Địa chỉ:</label>
                        <input type="text" class="form-control" name="address" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Giới tính:</label>
                    <input name="gender" type="radio" value="Nam"/>Nam
                    <input name="gender" type="radio" value="Nữ"/>Nữ
                </div>
                <button type="submit" class="btn btn-primary ">Thêm mới</button>
                <a href="{{route('staffs.index')}}" class="btn btn-dark">Hủy</a>
            </form>
        </div>
    </div>
@endsection
