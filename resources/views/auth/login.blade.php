<x-app>
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 100vh">
        <div class="col-md-6">
            <p class="section-title fs-1 text-center pb-4">Login</p>
            <div class="card border-0 py-3 px-4 rounded-3" style="box-shadow: 0px 0px 6px 0px #F759A9;">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label">{{ __('Email Address') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 pt-4">
                                <button type="submit" class="btn-pink px-4 col-12">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app>

<style>
    .form-control:focus {
      border-color: rgb(255,84,136);
      box-shadow: 0 0 5px rgba(255,84,136,0.8);
    }
</style>