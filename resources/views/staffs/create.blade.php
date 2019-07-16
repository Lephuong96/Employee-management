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
                        <input type="text" class="form-control" name="id" required>
                    </div>
                    <div class="col">
                        <label>Số điện thoại:</label>
                        <input type="integer" class="form-control" name="phone_number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label>Nhóm nhân viên:</label>
                        <input type="text" class="form-control" name="group_employees" required>
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
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{route('staffs.index')}}" class="btn btn-dark">Hủy</a>
            </form>
        </div>
    </div>
@endsection
