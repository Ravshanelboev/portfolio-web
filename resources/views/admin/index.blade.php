@extends('layouts.admin.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Foydalanuvchilar</h5>
                    <p class="card-text">Bugungi faol foydalanuvchilar soni: <strong>56</strong></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Buyurtmalar</h5>
                    <p class="card-text">Yangi buyurtmalar: <strong>12</strong></p>
                </div>
            </div>
        </div>
    </div>
@endsection
