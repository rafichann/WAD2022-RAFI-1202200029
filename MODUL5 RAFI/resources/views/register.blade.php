
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
       

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Register</title>

	<!--NAVBAR-->
	<nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <h5></h5>
            </div>
        </nav>
</head>
      <!-- Section: Design Block -->
      <section>
        <div class="container px-5 py-5 ">
            <div class="row align-items-center">
                <div class="col-sm">
                    <img src="https://images.unsplash.com/photo-1588310558566-b983c7d257e4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2FyJTIwZGVzZXJ0fGVufDB8fDB8fA%3D%3D&w=1000&q=80"  height = "1080px"alt="...">    
                </div>
                <div class="col-sm">
                    <h1 class="fw-bold">Register</h1>
                    @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif
                    <form action="{{ route('register.action') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label fw-bold">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Kata Sandi</label>
                            <input type="text" class="form-control" id="password" name="password">
                        </div>
                        
                        <div class="mb-3">
                            <label for="password_confirm" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                            <input type="text" class="form-control" id="password_confirm" name="password_confirm">
                        </div>

                        <div class="mt-3 mb-1">
                            <button type="submit" class="btn btn-primary" name="daftar">Daftar</button>
                        </div>

                        <p>Anda sudah punya akun? 
                            <a href="{{ route('login') }}">Login</a>
                        </p>
                    </form>
                </div>
            
            </div>
        </div>
    </section>