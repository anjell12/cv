@extends('layouts.index')
@section('content')
    <style>
        .container-card {
            position: relative;
            height: 460px;
            width: 460px;
            background: transparent;
            /* Ubah nilai alpha untuk transparansi */
            border-radius: 24px;
            border: 2px solid rgba(257, 257, 257, 0.4);
            backdrop-filter: blur(15px) opacity(0.8);
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;

            /* Media query untuk lebar layar kurang dari atau sama dengan 768px */
            @media (max-width: 768px) {
                width: 100%;
                /* Mengisi lebar layar penuh */
                height: 400px;
                /* Menyesuaikan tinggi sesuai kontennya */
            }
        }

        .main-box {
            width: 100%;
        }

        .main-box h1 {
            color: #162938;
            text-align: center;
            margin-top: -20px;
            margin-bottom: 50px;
        }



        .content {
            text-align: center;
            position: relative;
            z-index: 1;
            color: #fff;
            padding: 20px;
        }
    </style>
    <video autoplay muted loop id="video-background">
        <source src="{{ asset('dist/video/Data_Grid.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center vh-100">
            <div class="col-md-6">
                <div class="container-card ">
                    <div class="main-box">
                        <h1 class="text-light">Curriculum Vitae</h1>
                        <div class="content">
                            <div class="h1 card-title text-light">Hallo, Welcome.</div>
                            <p class="card-text text-light">Click the button below to start creating your CV.</p>
                            <a href="{{ route('create-cv') }}" class="btn btn-dark w-100 mt-2">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
