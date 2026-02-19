<!DOCTYPE html>
<html lang="en">

<!-- Title -->
@section('title', 'ลงชื่อเข้าสู่ระบบ')

<!-- Head -->
@include('layouts.head')

@section('CSS')
    <link rel="preload" as="image" href="{{ asset('dist/img/background.jpg') }}">
@endsection

<style>
    body {
        /* ใส่พาธรูปภาพ */
        background-image: url('dist/img/background.jpg');
        background-color: #cccccc; /* สีพื้นหลังระหว่างรอโหลดภาพ */

        /* ให้ภาพพื้นหลังแสดงผลกลางหน้าจอ */
        background-repeat: no-repeat;
        background-attachment: fixed;

        /* ปรับภาพให้ขยายเต็มหน้าจอ */
        background-size: cover;
        background-position: center;
    }
</style>

<!-- Body -->

<body class="hold-transition login-page">
    <div class="login-box">

        <!-- Logo -->
        <div class="login-logo">
            <img src="dist/img/MOPH-Logo.png" alt="MOPH-Logo" width="55" class="img-circle elevation-3">
            <a style="font-family: 'Audiowide', sans-serif; font-size: 30px;" href="#"
                class="text-warning">KPI-MONITORING</a>
        </div>

        <!-- Card -->
        <div class="card card-outline card-success" style="border-radius: 15px; overflow: hidden;">

            <!-- Card Body -->
            <div class="card-body login-card-body">
                <h5 class="login-box-msg"><i class="fas fa-key mr-2"></i></i>กรุณาลงชื่อเพื่อเข้าสู่ระบบ</h5>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope text-info"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock text-info"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Button Submit -->
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-info btn-block">
                                <i class="nav-icon fas fa-sign-in-alt"></i> เข้าสู่ระบบ</button>
                        </div>
                    </div>

                </form>

                @if (Route::has('password.request'))
                    <p class="mt-3 mb-1">
                        <a href="{{ route('password.request') }}">ลืมรหัสผ่านหรือไม่ ?</a>
                    </p>
                    <p class="mb-0">
                        ยังไม่ลงทะเบียนเข้าใช้งาน <a href="{{ route('register') }}" class="text-center">คลิกที่นี่ !</a>
                    </p>
                @endif

            </div>
        </div>

    </div>

    <!-- Script -->
    @include('layouts.script')

</body>

</html>
