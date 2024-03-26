@extends('layout')
@section('title', 'เพิ่มข้อมูลนิสิต')
@section('content')
    <h3 class="text text-center py-2">เพิ่มข้อมูลนิสิต</h3>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อ</label>
            <input type="text" name="name" class="form-control">
        </div>
        @error('name')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <div class="form-group py-2">
            <label for="title">อีเมล</label>
            <input type="text" name="email" class="form-control">
        </div>
        @error('email.')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <hr>
        <input type="submit" value="บันทึก" class="btn btn-primary">
    </form>
@endsection
