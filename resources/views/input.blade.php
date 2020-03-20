@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create User</div>
                <div class="card-body">
                    <form action="{{ url('/save')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="emailla" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">password</label>
                            <input type="password" name="passwordta" class="form-control" min="8" required>
                        </div>
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <button type="reset" class="btn btn-success"> reset </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
