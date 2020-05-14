@extends('layouts.app')
@section('content')
<div class="container">
    <h2 align="center">ข้อมูลติดต่อลูกค้า</h2>
    <a href="/contact/create" class="btn btn-primary my-2">เพื่มข้อมูล</a>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#รหัส</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">อีเมล</th>
                <th scope="col">เบอร์โทรศัพท์</th>
                <th scope="col">แก้ไข</th>
                <th scope="col">ลบ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <th scope="row">{{$row->id}}</th>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->phone}}</td>
                <td>
                    <a href="{{route('contact.edit',$row->id)}}" class="btn btn-warning">แก้ไข</a>
                </td>
                <td>
                    <form action="{{route('contact.destroy',$row->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="ลบ" data-name="{{$row->name}}" class="btn btn-danger deleteform">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
