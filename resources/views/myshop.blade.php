
@extends('layouts.myapp')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>            เกี่ยวกับร้าน   </h6>
            </div>
            <div class="card-body px-0 pt-0 pb-0">
                <ul>
                    <li>เจ้าของร้าน : {{$name}}</li>
                    <li>เบอร์โทร : {{$mobilephone}}</li>
                    <li>ที่ตั้งร้าน : {{$locatinn}}</li>
                </ul>
            </div>
</div>
    </div>
</div>
@endsection