@if (isset($logBan))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Username atau password Salah!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="mb-4">
    <label for="txtEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Masukan Email">
</div>
<div class="mb-4">
    <label for="txtPassword" class="form-label">Password</label> 
    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Masukan Password">
</div>
<div class="mb-4">
    <div class="row">
        <div class="col-6">
            <small>Don't have account, <a href="register">register?</a></small>
        </div>
        <div class="col-6 text-end">
            <button type="submit" class="btn btn-primary">Masuk</button>
        </div>
    </div>
</div>