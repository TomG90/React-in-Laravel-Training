@foreach ($errors->all() as $error)
    <div class="error">{{ $error }}</div>
@endforeach

<form action="{{ route('register') }}" method="post">
    @csrf
    <br>
    Name:
    <input type="text" name="name" value="{{ old('name') }}">
    <br>    
    Email:
    <input type="email" name="email" value="{{ old('email') }}">
    <br>Password: <br>
    <input type="password" name="password" value="">
     <br>Retype Password: <br>
    <input type="password" name="password_confirmation" value="">

    <button>Register</button>
</form>
