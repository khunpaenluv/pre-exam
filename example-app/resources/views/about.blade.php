@extends('layout')
@section('title', 'ข้อมูลนิสิต')
@section('content')
    <h3 class="text text-center py-2">ข้อมูลนิสิต</h3>
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr>
                <th scope="col">ชื่อ</th>
                <th scope="col">อีเมล</th>
                <th scope="col">จัดการ</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($studens as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('edit', $item->id) }}"class="btn btn-warning">แก้ไข</a>
                        <a href="{{ route('delete', $item->id) }}" class="btn btn-danger"
                            onclick="return confirm('ต้องการลบ {{ $item->name }} หรือไม่ ?')">ลบ
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
