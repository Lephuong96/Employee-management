@extends('home')
@section('title', 'Chỉnh sửa nhân viên')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Chỉnh sửa nhân viên</h2>
        </div>
        <div class="col-md-12">
            <form method="post" action="{{ route('staffs.update', $staff->id) }}" >
                @csrf
                <div class="form-group">
                    <label >Mã nhân viên</label>
                    <input type="text" class="form-control" name="id" required value="{{$staff->id}}">
                </div>
                <div class="form-group">
                    <label >Nhóm nhân viên</label>
                    <input type="text" class="form-control"  name="group_employees" required value="{{$staff->group_employees}}">
                </div>
                <div class="form-group">
                    <label >Họ tên</label>
                    <input type="text"  class="form-control" name="name" required value="{{$staff->name}}">
                </div>
                <div class="form-group">
                    <label >Ngày sinh</label>
                    <input type="date"  class="form-control" name="birthday" required value="{{$staff->birthday}}">
                </div>
                <div class="form-group">
                    <label >Giới tính</label>
                    <input type="text"  class="form-control" name="gender" required value="{{$staff->gender}}">
                </div>
                <div class="form-group">
                    <label >Số điện thoại</label>
                    <input type="integer"  class="form-control" name="phone_number" required value="{{$staff->phone_number}}">
                </div>
                <div class="form-group">
                    <label >Số CMND</label>
                    <input type="integer"  class="form-control" name="card_number" required value="{{$staff->card_number}}">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email"  class="form-control" name="email" required value="{{$staff->email}}">
                </div>
                <div class="form-group">
                    <label >Địa chỉ</label>
                    <input type="text"  class="form-control" name="address" required value="{{$staff->address}}">
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{route('staffs.index')}}" class="btn btn-dark">Hủy</a>
            </form>
        </div>
    </div>
@endsection
