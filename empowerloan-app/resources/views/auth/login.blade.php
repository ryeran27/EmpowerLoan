<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.back {
  background: #e2e2e2;
  width: 100%;
  position: absolute;
  top: 0;
  bottom: 0;
}

.div-center {
  width: 400px;
  height: 400px;
  background-color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
}

div.content {
  display: table-cell;
  vertical-align: middle;
}

</style>
<div class="back">


    <div class="div-center">
  
  
      <div class="content">
  
        <a class="btn btn-link float-right" href="/" role="button">Home</a>
        <h3>Login</h3>
        <hr />
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="exampleInputEmail1" required autocomplete="email" autofocus placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <hr />
          <a class="btn btn-link" href="{{ route('register') }}" role="button">Signup</a>
          @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
          @endif
          {{-- <a class="btn btn-link" href="#" role="button">Reset Password</a> --}}
          {{-- <button type="button" class="btn btn-link">Reset Password</button> --}}
  
        </form>
  
      </div>
  
  
      </span>
    </div>
