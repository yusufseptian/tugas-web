@if (isset($input))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Register berhasil
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="mb-4">
    <label for="txtNama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="txtNama" name="txtNama" placeholder="Masukan Nama">
</div>
<div class="mb-4">
    <label for="txtEmail" class="form-label">Email</label>
    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Masukan Email">
</div>
<div class="mb-4">
    <label for="txtPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Masukan Password">
</div>
<div class="mb-4 text-end">
    <button type="submit" class="btn btn-primary" name="regisSave">Register</button>
</div>