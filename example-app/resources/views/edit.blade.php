@extends('layout')
@section('title', 'แก้ไขข้อมูลนิสิต')
@section('content')
    <h3 class="text text-center py-2">แก้ไขข้อมูลนิสิต</h3>
    <form method="POST" action="{{ route('update', $studens->id) }}">
        @csrf
        <div class="form-group">
            <label for="title">ชื่อ</label>
            <input type="text" name="name" class="form-control" value="{{ $studens->name }}">
        </div>
        @error('name')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <div class="form-group py-2">
            <label for="title">อีเมล</label>
            <input type="text" name="email" class="form-control"value="{{ $studens->email }}">
        </div>
        @error('email.')
            <div class="my-2">
                <span class="text-danger">{{ $message }}</span>
            </div>
        @enderror
        <hr>
        <input type="submit" value="อัพเดต" class="btn btn-primary">

    </form>
@endsection
