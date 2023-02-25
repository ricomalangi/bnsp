<div class="tab-pane active" role="tabpanel" id="step1">
  <div class="row mt-4">
    <div class="col-md-12">
      <h4 class="text-left">FR-APL-01. FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI Bagian 1 : Rincian Data Pemohon Sertifikasi</h4>
      <p>FR-APL-01. FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI Bagian 1 : Rincian Data Pemohon Sertifikasi</p>
      <hr class="my-12" />
      <div class="form-group">
        <label class="form-label" for="exampleFormControlSelect1">Skema</label>
        <select class="form-control" id="skema" wire:model="skema">
          <option value="">--pilih skema--</option>
          <?php foreach ($skema as $s) :  ?>
            <option value="<?= $s->id ?>"><?= $s->nama ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mt-4 mb-4 bg-success">
        <h5 class="text-white m-2">A. Data Pribadi</h5>
      </div>

      <div class="form-group">
        <label class="form-label" for="description">NIK</label>
        <input type="number" class="form-control" id="ktp" />
      </div>
      <div class="form-group">
        <label class="form-label" for="description">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" />
      </div>
      <div class="form-group">
        <label class="form-label" for="description">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
          <option value="">Pilih Jenis kelamin</option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" class="mb-2" for="name">Tempat Lahir</label>
        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
      </div>
      <div class="form-group">
        <label class="form-label" class="mb-2" for="name">Tanggal Lahir</label>
        <input type="date" class="form-control" name="ttl" id="ttl">
      </div>
      <div class="form-group">
        <label class="form-label" class="mb-2" for="name">Kebangsaan</label>
        <select wire:model="kebangsaan" name="kebangsaan" class="form-control" id="kebangsaan">
          <option value="">Pilih kebangsaan</option>
          <option value="Indonesia">Indonesia</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" for="description">Alamat Domisili / Sesuai KTP</label>
        <textarea type="text" class="form-control" id="alamat" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label class="form-label" class="mb-2" for="name">Kode Pos</label>
        <input type="number" class="form-control" name="kode_pos" id="kode_pos">
      </div>
      <div class="form-group">
        <label class="form-label" class="col-form-label" for="provinsi">Provinsi</label>
        <select class="form-control" name="provinsi" id="provinsi">
          <option selected disabled>==Pilih Salah Satu==</option>
          <?php foreach ($provinces as $prov) : ?>
            <option value="<?= $prov->code ?>"><?= $prov->name ?></option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" class="col-form-label" for="kota">Kabupaten / Kota</label>
        <select class="form-control" name="kota" id="kota">
          <option selected disabled>==Pilih Salah Satu==</option>
        </select>
      </div>
      <div class="form-group">
        <label class="form-label" class="col-form-label" for="kecamatan">Kecamatan</label>
        <select class="form-control" name="kecamatan" id="kecamatan">
          <option>==Pilih Salah Satu==</option>
        </select>

      </div>
      <div class="form-group">
        <label class="col-form-label" for="desa">Desa</label>
        <select wire:model="desa" class="form-control" name="desa" id="desa">
          <option>==Pilih Salah Satu==</option>
        </select>

      </div>
      <div class="form-group">
        <label class="mb-2" for="name">No. Telp</label>
        <input type="number" class="form-control" name="telepon" wire:model="telepon" id="telepon">
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">Email</label>
        <input type="email" class="form-control" name="email" wire:model="email" id="email">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="desa">Pendidikan Terakhir</label>
        <select wire:model="pendidikan" class="form-control" name="pendidikan" id="pendidikan">
          <option value="">pilih</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
          <option value="D1">D1</option>
          <option value="D2">D2</option>
          <option value="D3">D3</option>
          <option value="D4">D4</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
        </select>
      </div>
      <div class="mt-4 mb-4 bg-success">
        <h5 class="text-white m-2">B. Data Pekerjaan</h5>
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">Nama Insitusi / Perusahaan</label>
        <input type="text" class="form-control" name="perusahaan" wire:model="perusahaan" id="perusahaan">
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">Jabatan</label>
        <input type="text" class="form-control" name="jabatan" wire:model="jabatan" id="jabatan">
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">Alamat Kantor</label>
        <input type="text" class="form-control" name="alamat_kantor" wire:model="alamat_kantor" id="alamat_kantor">
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">Kode Pos Kantor</label>
        <input type="text" class="form-control" name="alamat_kantor" wire:model="kode_pos_perusahaan" id="kode_pos_perusahaan">
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">No. Telp Perusahaan</label>
        <input type="number" class="form-control" name="telepon_perusahaan" wire:model="telepon_perusahaan" id="telepon_perusahaan">
      </div>
      <div class="form-group">
        <label class="mb-2" for="name">Email Perusahaan</label>
        <input type="email" class="form-control" name="email_perusahaan" wire:model="email_perusahaan" id="email_perusahaan">
      </div>
      <b>
        <p>Note : <strong class="text-danger">*</strong> Wajib isi</p>
      </b>

    </div>
  </div>
  <ul class="list-inline pull-right">
    <li><button type="button" class="btn-success btn-md next-step">Continue to next step</button></li>
  </ul>
</div>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    $('#provinsi').change(function() {
      let id = $(this).val();
      $.ajax({
        url: "<?= base_url('pendaftaran/getCities') ?>",
        method: "POST",
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          let html = "<option selected disabled>==Pilih Salah Satu==</option>";
          let i;
          for (i = 0; i < data.length; i++) {
            html += `<option value='${data[i].code}'>${data[i].name}</option>`;
          }
          $('#kota').html(html)
        }
      })
    })
    $('#kota').change(function() {
      let id = $(this).val();
      console.log(id)
      $.ajax({
        url: "<?= base_url('pendaftaran/getDistricts') ?>",
        method: "POST",
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          let html = "<option selected disabled>==Pilih Salah Satu==</option>";
          let i;
          for (i = 0; i < data.length; i++) {
            html += `<option value='${data[i].code}'>${data[i].name}</option>`;
          }
          $('#kecamatan').html(html)
        }
      })
    })
    $('#kecamatan').change(function() {
      let id = $(this).val();
      $.ajax({
        url: "<?= base_url('pendaftaran/getVillages') ?>",
        method: "POST",
        data: {
          id: id
        },
        async: false,
        dataType: 'json',
        success: function(data) {
          let html = "<option selected disabled>==Pilih Salah Satu==</option>";
          let i;
          for (i = 0; i < data.length; i++) {
            html += `<option value='${data[i].code}'>${data[i].name}</option>`;
          }
          $('#desa').html(html)
        }
      })
    })
  });
</script>