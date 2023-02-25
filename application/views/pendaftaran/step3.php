<div class="tab-pane" role="tabpanel" id="step3">
  <div class="row">
    <div class="col-md-12">
      <h4 class="mt-4">Bagian 3: Bukti Kelengkapan Pemohon</h4>
      <h4>Persyaratan Dasar & Administrasi Pendukung</h4>
      <p>Upload <b>Bukti Pendidikan</b> (Ijazah atau Transkrip), <b>bukti pelatihan</b> (Sertifikat pelatihan) atau <b>bukti pengalaman kerja</b> (surat keterangan/CV)</p>
      <div class="alert alert-primary mt-2" role="alert">
        <p>1. File Upload harus berukuran Maksimal <b>2 MB</b></p>
        <p>2. Ekstensi file yang diperbolehkan yaitu <b>jpg,jpeg,png,pdf</b></p>
        <p>3. Untuk <b>Bukti Pelatihan </b> dan <b>Bukti Pengalaman Kerja</b> dapat mengupload lebih dari 1 file, silahkan melakukan select file yang ingin diupload</p>
      </div>
      <hr class="my-12" />
      <div class="form-group">
        <label for="foto">Pas foto</label>
        <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf" wire:model="foto" class="form-control" id="foto" name="foto" />
      </div>
      <div class="form-group mt-3">
        <label for="foto_identitas">Identitas Pribadi (KTP / Kartu Pelajar)</label>
        <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf" wire:model="foto_identitas" class="form-control" id="foto_identitas" name="foto_identittas" />
      </div>
      <div class="form-group mt-3">
        <label for="foto_pendidikan">Bukti Pendidikan</label>
        <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf" wire:model="foto_pendidikan" class="form-control" id="foto_pendidikan" name="foto_pendidikan" />
      </div>
      <div class="form-group mt-3">
        <label for="foto_pelatihan" class="font-weight-bold">Bukti Pelatihan</label>
        <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf" wire:model="foto_pelatihan" class="form-control" id="foto_pelatihan" name="foto_pelatihan" multiple />
      </div>
      <div class="form-group mt-3">
        <label for="foto_pengalaman_kerja" class="font-weight-bold">Bukti pengalaman kerja</label>
        <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf" wire:model="foto_pengalaman_kerja" class="form-control" id="foto_pengalaman_kerja" name="foto_pengalaman_kerja" multiple />
      </div>
      <div class="text-end">
        <p class="font-weight-bold">Print bukti pendaftaran</p>
        <button class="btn btn-secondary nextBtn btn-md" type="button" wire:click="downloadPDF()">Print</button>
      </div>
    </div>
  </div>
  <ul class="list-inline pull-right">
    <li><button type="button" class="default-btn prev-step">Back</button></li>
    <li><button type="button" class="btn-success btn-md next-step">Continue</button></li>
  </ul>
</div>