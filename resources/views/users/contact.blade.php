@include('partials.head')

<body>
    @include('partials.v_navbar')
    <h1 class="heading-profile text-center mt-3">My Adress</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.0134284858063!2d106.84164251449721!3d-6.645253366809587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c89505b4c37d%3A0x307fc4a38e65fa2b!2sSMK%20Wikrama%20Bogor!5e0!3m2!1sid!2sid!4v1615370905989!5m2!1sid!2sid" width="1100" height="450" style="border:0; margin:8rem;" allowfullscreen="" loading="lazy"></iframe>

<div class="container">
<h1>Feed Back</h1>
</br>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama : </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">No Telepon : </label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="No Telepon">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email : </label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="username@gmail.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Pesan : </label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="pesan"></textarea>
</div>
<div class="d-grid gap-2">
  <button class="btn btn-lg" type="button" style="background-color:hotpink; color:white;">Submit</button>
  </div>
</div>
</br>
    @include('partials.v_footer')
</body>
</html>