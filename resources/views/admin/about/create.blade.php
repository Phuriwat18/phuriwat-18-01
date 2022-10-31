@extends('layouts.back-end.master')
@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card mb-9">
        <h5 class="card-header">About</h5>
        <div class="card-body">
          <div>
            <form action="{{ route('about.insert') }}" method="post">
              @csrf
              <label for="defaultFormControlInput" class="form-label">Name</label>
            <input
              type="text"
              class="form-control" name="name"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกประเภทสินค้า"
              aria-describedby="defaultFormControlHelp"
            />

            <input
              type="text"
              class="form-control" name="detail"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกประเภทสินค้า"
              aria-describedby="defaultFormControlHelp"
            />

            <input
              type="file"
              class="form-control" name="image"
              id="defaultFormControlInput"
              placeholder="กรุณากรอกประเภทสินค้า"
              aria-describedby="defaultFormControlHelp"
            />
            <Button type="submit" value="บันทึก" class="btn btn-primary mt-3" >บันทึก</Button>
            <a href="{{ route('about.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection