@include('layouts.head')

<main>
   <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      @if (session()->has('success'))
         <div class="alert alert-success alert-dismissible fade show justify-content-center col-4 mb-4" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif

      @if (session()->has('loginError'))
         <div class="alert alert-danger alert-dismissible fade show justify-content-center col-4 mb-4" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>
      @endif
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
               <div class="card mb-3">
                  <div class="card-body login">
                     <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">REGISTER</h5>
                     </div>
                     <form action="/login" method="post">
                        @csrf
                        <div class="form-floating">
                           <input type="text" name="name" class="form-control rounded-top 
                               @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                           <label for="name">Name</label>
                           @error('name')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
   
                       <div class="form-floating">
                           <input type="email" name="email" class="form-control
                               @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                           <label for="email">Email address</label>
                           @error('email')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
   
                       <div class="form-floating">
                           <input type="password" name="password" class="form-control rounded-bottom
                               @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                           <label for="password">Password</label>
                           @error('password')
                               <div class="invalid-feedback">
                                   {{ $message }}
                               </div>
                           @enderror
                       </div>
                                 
                        <div class="col-12 mt-4 mb-2"> <button class="btn btn-primary w-100" type="submit">Register</button></div>
                        <p class="small">Sudah Punya Akun? <a href="/login">Login</a></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </section>
   </div>
</main>

