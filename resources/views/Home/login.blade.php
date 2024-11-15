@extends('base')

@section('title','Login')

@section('content')
        <section class=" p-3 p-md-4 p-xl-5 " style="margin-top: 120px; min-width: 70%">
            <div class="container"  >
                <div class="row justify-content-center">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                        <div class="card border border-light-subtle rounded-4">
                            <div class="card-body p-3 p-md-4 p-xl-5">
                                <div class="row">
                                    <div class="col-12">
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @endif
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                                        @endif
                                        <div class="mb-5">
                                            <h4 class="text-center">Login Here</h4>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('account.authenticate') }}" method="post" style="border-radius: 5px;">
                                    @csrf
                                    <div class="row gy-3 overflow-hidden">
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control @error('email') est invalide  @enderror" value="{{old('email')}}" name="email" id="email" placeholder="name@example.com" >
                                                <label for="email" class="form-label">Email</label>
                                                @error('email')
                                                     <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control @error('password') est invalide  @enderror" name="password" id="password" value="" placeholder="Password">
                                                <button class="btn btn-outline-secondary" type="button" id="tooglePassword" ><i class="fas fa-eye" id="toggleIcon"></i></button>
                                            </div>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-5">
                                            <div class="d-grid">
                                                <button class="btn bsb-btn-xl btn-primary py-3" type="submit">Log in now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script>
            //montrer mots de passe
                        const passwordInput = document.getElementById('password');
                        const togglePasswordButton = document.getElementById('tooglePassword');
                        const toggleIcon = document.getElementById('toogleIcon');
                        togglePasswordButton.addEventListener('click',function(){
                            const type = passwordInput.type === 'password' ? 'text' : 'password';
                            passwordInput.type = type;
                        })
                    </script>
@endsection
