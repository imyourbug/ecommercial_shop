@extends('admin.index')

@section('admin_content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h4 class="" style="margin-top: 10px">
            <strong>SỬA TÀI KHOẢN</strong>&ensp;
            <i class="fas fa-user"></i>
        </h4>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <form action="/admin/taikhoan/sua" method="POST">
                @csrf
                <br>
                <input type="hidden" class="form-control" name="id" value="{{$data['id']}}"/>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="ten_nguoi_dung" value="{{$data['ten_nguoi_dung']}}" required/>
                    <label class="form-label" >Tên người dùng</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="email" class="form-control" name="email" value="{{$data['email']}}" required/>
                    <label class="form-label" >Email</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="sdt" value="{{$data['sdt']}}" required/>
                    <label class="form-label" >Số điện thoại</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="input" class="form-control" name="Ten_dang_nhap" value="{{$data['Ten_dang_nhap']}}" required/>
                    <label class="form-label" >Tên đăng nhập</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control" name="password" required/>
                    <label class="form-label" >Mật khẩu</label>
                </div>

                <div class="form-outline mb-4">
                        <label class="form-label">Phân quyền</label>
                        <select name="id_phan_quyen">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id_phan_quyen }}">{{ $role->ten_phan_quyen }}</option>
                            @endforeach
                        </select>
                    </div>

                <button type="submit" class="btn btn-primary">Sửa</button>
                <a href="/admin/taikhoan" type="button" class="btn btn-info">Quay lại</a>

            </form>

        </div>
    </div>
</div>


@endsection