@extends('layouts.apps')

@section('content')

<h2 class="card-title text-danger fw-bold mb-1">حصيلة عمليات التكوين </h2>
<form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="mb-1">
        <label class="form-label" for="login-email">البريد الإلكتروني</label>
        <input class="form-control" id="login-email" type="text"
             placeholder="user@tawassol.dz"
            aria-describedby="login-email" autofocus="" tabindex="1"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mb-1">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="login-password">كلمة المرور</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" id="login-password"
                type="password" placeholder="············"
                aria-describedby="login-password" tabindex="2"   @error('password') is-invalid @enderror name="password" required autocomplete="current-password" /><span
                class="input-group-text cursor-pointer"><i
                    data-feather="eye"></i></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
    </div>
    <div class="mb-1">
        <div class="form-check">
            <input class="form-check-input" id="remember-me" type="checkbox"
                tabindex="3" />
            <label class="form-check-label" for="remember-me">  حفظ المعلومات</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary w-100" tabindex="4"> تسجيل الدخول</button>
</form>





@endsection
