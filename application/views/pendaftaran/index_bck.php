<div class="container">
    <div class="text-center">
    <!-- progressbar -->
        <ul class="progressbar">
            <li class="active"><a href="#step-1" type="button">Profil Peserta</a></li>
            <li class=""><a href="#step-2" type="button">Dokumen</a></li>
            <li class=""><a href="#step-3" type="button" disabled="disabled">Asesmen Mandiri</a></li>
        </ul>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row setup-content" id="step-1">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <h4>FR-APL-01. FORMULIR PERMOHONAN SERTIFIKASI KOMPETENSI</h4>
                        <h4>Bagian 1 : Rincian Data Pemohon Sertifikasi</h4>
                        <p>Pada bagian ini, cantumkan data pribadi, data pendidikan formal anda pada saat ini.</p>
                        <hr class="my-12"/> 
                        <div class="form-group required">
                            <label class="form-label" for="exampleFormControlSelect1">Skema</label>
                            <select class="form-control" id="skema" wire:model="skema" required>
                                <option value="">--pilih skema--</option>
                                <?php foreach($skema as $s):  ?>
                                <option value="<?= $s->id ?>"><?= $s->nama ?></option> 
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mt-4 mb-4" style="background-color: #000;">
                            <h5 class="text-white m-2">A. Data Pribadi</h5>
                        </div>
                        
                        <div class="form-group required">
                            <label class="form-label" for="description">NIK</label>
                            <input type="number" class="form-control" id="ktp"/>
                        </div>
                        <div class="form-group required">
                            <label class="form-label" for="description">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama"/>
                        </div>
                        <div class="form-group required">
                            <label class="form-label" for="description">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                <option value="">Pilih Jenis kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option> 
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="form-label" class="mb-2" for="name">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                        </div>
                        <div class="form-group required">
                            <label class="form-label" class="mb-2" for="name">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="ttl" id="ttl">   
                        </div>
                        <div class="form-group required">
                            <label class="form-label" class="mb-2" for="name">Kebangsaan</label>
                                <select wire:model="kebangsaan" name="kebangsaan" class="form-control" id="kebangsaan">
                                <option value="">Pilih kebangsaan</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="form-label" for="description">Alamat Domisili / Sesuai KTP</label>
                            <textarea type="text" class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                            <div class="form-group required">
                            <label class="form-label" class="mb-2" for="name">Kode Pos</label>
                            <input type="number" class="form-control" name="kode_pos" id="kode_pos"> 
                        </div>
                        <div class="form-group required">
                            <label class="form-label" class="col-form-label" for="provinsi">Provinsi</label>
                            <select  class="form-control" name="provinsi" id="provinsi" wire:model="provinsi">
                                <option>==Pilih Salah Satu==</option>
                                <option value="{{ $item->id ?? '' }}">{{ $item->name ?? '' }}</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="form-label" class="col-form-label" for="kota">Kabupaten / Kota</label>
                            <select  class="form-control" name="kota" id="kota" wire:model="kota">
                                <option>==Pilih Salah Satu==</option>
                            </select>
                        </div>
                        <div class="form-group required">
                            <label class="form-label" class="col-form-label" for="kecamatan">Kecamatan</label>
                            <select wire:model="kecamatan" class="form-control" name="kecamatan" id="kecamatan" required>
                                <option>==Pilih Salah Satu==</option>
                            </select>

                        </div>
                        <div class="form-group required">
                            <label class="col-form-label" for="desa">Desa</label>
                            <select wire:model="desa" class="form-control" name="desa" id="desa" required>
                                    <option>==Pilih Salah Satu==</option>
                            </select>

                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">No. Telp</label>
                            <input type="number" class="form-control" name="telepon" wire:model="telepon" id="telepon">  
                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">Email</label>
                            <input type="email" class="form-control" name="email" wire:model="email" id="email">  
                        </div>
                        <div class="form-group required">
                            <label class="col-form-label" for="desa">Pendidikan Terakhir</label>
                            <select wire:model="pendidikan" class="form-control" name="pendidikan" id="pendidikan" required>
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
                        <div class="mt-4 mb-4" style="background-color: #000;">
                            <h5 class="text-white m-2">B. Data Pekerjaan</h5>
                        </div>
                        
                        <div class="form-group required">
                            <label class="mb-2" for="name">Nama Insitusi / Perusahaan</label>
                            <input type="text" class="form-control" name="perusahaan" wire:model="perusahaan" id="perusahaan"> 
                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" wire:model="jabatan" id="jabatan">
                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">Alamat Kantor</label>
                            <input type="text" class="form-control" name="alamat_kantor" wire:model="alamat_kantor" id="alamat_kantor">
                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">Kode Pos Kantor</label>
                            <input type="text" class="form-control" name="alamat_kantor" wire:model="kode_pos_perusahaan" id="kode_pos_perusahaan">
                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">No. Telp Perusahaan</label>
                            <input type="number" class="form-control" name="telepon_perusahaan" wire:model="telepon_perusahaan" id="telepon_perusahaan">
                        </div>
                        <div class="form-group required">
                            <label class="mb-2" for="name">Email Perusahaan</label>
                            <input type="email" class="form-control" name="email_perusahaan" wire:model="email_perusahaan" id="email_perusahaan">
                        </div>
                        <p>Note : <strong class="text-danger">*</strong> Wajib isi</p>
                        <div class="text-center">
                            <button class="btn btn-primary nextBtn btn-md" wire:click="firstStepSubmit" type="button" >Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <h4>Bagian 2 : Data Sertifikasi</h4>
                        <table border="1" class="table table-bordered mt-4">
                            <tr>
                                <td rowspan="2">Skema Sertifikasi</td>
                                <td>Judul</td>
                                <td>:</td>
                                <td>Junior Web Programmer</td>
                            </tr>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td></td>
                                
                            </tr>
                            <tr>
                                <td rowspan="5" colspan="2">Tujuan Asesmen</td>
                                <td>:</td>
                                <td>
                                        <div>
                                        <input wire:model="tujuanAssesmen" type="radio" name="tujuanAssesmen" value="Sertifikasi" checked> Sertifikasi
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>:</td>
                                <td>
                                        <div>
                                        <input wire:model="tujuanAssesmen" type="radio" name="tujuanAssesmen" value="Sertifikasi Ulang"> Sertifikasi Ulang
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>:</td>
                                <td>
                                        <div>
                                        <input wire:model="tujuanAssesmen" type="radio" name="tujuanAssesmen" value="Pengakuan Kompetensi Terkini (PKT)"> Pengakuan Kompetensi Terkini (PKT)
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>:</td>
                                <td>
                                    <div>
                                        <input wire:model="tujuanAssesmen" type="radio" name="tujuanAssesmen" value="Rekognisi Pembelajaran Lampau"> Rekognisi Pembelajaran Lampau
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>:</td>
                                <td>
                                    <div>
                                        <input wire:model="tujuanAssesmen" type="radio" name="tujuanAssesmen" value="Lainnya"> Lainnya
                                    </div>
                                </td>

                            </tr>
                        </table>
                        <h4>Junior Web Programmer</h4>
                        <h4 style="margin-left: 20px;">Daftar Unit Kompetensi</h4>
                        <table class="table table-bordered mt-4 text-center">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Unit</th>
                                <th scope="col">Judul Unit</th>
                                <th scope="col" style="width: 500px;">Jenis Standar (Standar Khusus/Standar Internasional/SKKNI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>J.620100.004.02</td>
                                    <td>Menggunakan struktur data</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>J.620100.005.02</td>
                                    <td>Mengimplementasikan User Interface</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>J.620100.011.01</td>
                                    <td>Melakukan Instalasi software tools pemrograman</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>J.620100.016.01</td>
                                    <td>Menulis kode dengan prinsip sesuai guidelines dan best pratices</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>J.620100.017.02</td>
                                    <td>Mengimplementasikan pemrograman terstruktur</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>J.620100.019.02</td>
                                    <td>Menggunakan library atau komponen pre-existing</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>J.620100.023.02</td>
                                    <td>Membuat dokumen kode program</td>
                                    <td>SKKNI</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>J.620100.025.02</td>
                                    <td>Melakukan debugging</td>
                                    <td>SKKNI</td>
                                </tr>
                
                            </tbody>
                        </table>
                        <h4 class="mt-4">Bagian 3: Bukti Kelengkapan Pemohon</h4>
                        <h4>Persyaratan Dasar & Administrasi Pendukung</h4>
                        <p>Upload <b>Bukti Pendidikan</b> (Ijazah atau Transkrip), <b>bukti pelatihan</b> (Sertifikat pelatihan) atau <b>bukti pengalaman kerja</b> (surat keterangan/CV)</p>
                        <div class="alert alert-primary mt-2" role="alert">
                            <p>1. File Upload harus berukuran Maksimal <b>2 MB</b></p>
                            <p>2. Ekstensi file yang diperbolehkan yaitu <b>jpg,jpeg,png,pdf</b></p>
                            <p>3. Untuk <b>Bukti Pelatihan </b> dan <b>Bukti Pengalaman Kerja</b> dapat mengupload lebih dari 1 file, silahkan melakukan select file yang ingin diupload</p>
                        </div>
                        <div class="form-group required">
                            <label for="foto">Pas foto</label>
                            <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf"  wire:model="foto" class="form-control" id="foto" name="foto"/>
                        </div>
                        <div class="form-group required mt-3">
                            <label for="foto_identitas">Identitas Pribadi (KTP / Kartu Pelajar)</label>
                            <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf"  wire:model="foto_identitas" class="form-control" id="foto_identitas" name="foto_identittas"/>
                        </div>
                        <div class="form-group required mt-3">
                            <label for="foto_pendidikan">Bukti Pendidikan</label>
                            <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf"  wire:model="foto_pendidikan" class="form-control" id="foto_pendidikan" name="foto_pendidikan"/>
                        </div>
                        <div class="form-group mt-3">
                            <label for="foto_pelatihan" class="font-weight-bold">Bukti Pelatihan</label>
                            <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf"  wire:model="foto_pelatihan" class="form-control" id="foto_pelatihan" name="foto_pelatihan" multiple/>
                        </div>
                        <div class="form-group mt-3">
                            <label for="foto_pengalaman_kerja" class="font-weight-bold">Bukti pengalaman kerja</label>
                            <input type="file" accept="image/jpg,image/jpeg,image/png,image/pdf"  wire:model="foto_pengalaman_kerja" class="form-control" id="foto_pengalaman_kerja" name="foto_pengalaman_kerja" multiple/>
                        </div>
                        <div class="text-end">
                            <p class="font-weight-bold">Print bukti pendaftaran</p>
                            <button class="btn btn-secondary nextBtn btn-md" type="button" wire:click="downloadPDF()">Print</button>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-danger nextBtn btn-md pull-right" type="button" wire:click="back(1)">Back</button>
                            <button class="btn btn-primary nextBtn btn-md pull-right" type="button" wire:click="secondStepSubmit">Next</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-3">
                <div class="col-lg-12">
                    <div class="col-md-12">
                        <h4>Asesmen Mandiri</h4>

                        <table class="table table-bordered mt-4">
                            <thead>
                                <tr>
                                <th scope="row">#</th>
                                <th scope="col">Kode Unit</th>
                                <th scope="col">Judul Unit Kompetensi / Elemen Kompetensi / Kriteria untuk Kerja(KUK)</th>
                                <th class="text-star" scope="col" style="width: 20px;">
                                    <div>
                                        <p>K</p>
                                    </div>
                                    <div class="form-check mt-0">

                                        <input class="form-check-input" wire:click="changeValueRadioK" type="checkbox" id="ck">
                                        <br>
                                            
                                    </div>
                                    
                                </th>
                                <th class="text-star" scope="col" style="width: 20px;">
                                    <div>
                                        <p>BK</p>
                                    </div>
                                    <div class="form-check mt-0">

                                        <input class="form-check-input" wire:click="changeValueRadioBK" type="checkbox" id="cbk">
                                        <br>
                                            
                                    </div>
                                    
                                </th>
                                <th class="text-center" scope="col">Bukti yang relevan</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>J.620100.004.02</td>
                                    <td><b> Mengidentifikasi konsep data dan struktur data</b><br>
                                    <ul>
                                        <li>Kriteria untuk Kerja :</li>
                                        <ol>
                                            <li>Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.</li>
                                            <li>Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.</li>
                                        </ol>
                                    </ul>  
                                    <b>Menerapkan struktur data dan akses terhadap struktur data tersebut</b> 
                                    <br> 
                                    <ul>
                                        <li>Kriteria untuk Kerja :</li>
                                        <ol>
                                            <li>Struktur data diimplementasikan sesuai dengan bahasa pemrograman yang akan dipergunakan.</li>
                                            <li>Akses terhadap data dinyatakan dalam algoritma yang efisiensi sesuai bahasa pemrograman yang akan dipakai</li>
                                        </ol>
                                    </ul>   
                                    
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q1" class="form-check-input k" name="q1" type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q1" class="form-check-input bk" name="q1"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>J.620100.005.02</td>
                                    <td>
                                        <b>Mengidentifikasi rancangan user interface</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Rancangan user interface diidentifikasi sesuai kebutuhan.</li>
                                                <li>Komponen user interface dialog diidentifikasi sesuai konteks rancangan proses.</li>
                                                <li>Urutan dari akses komponen user interface dialog dijelaskan.</li>
                                                <li>Simulasi (mock-up) dari aplikasi yang akan dikembangkan dibuat.</li>
                                            </ol>
                                        </ul>
                                        <b>Melakukan implementasi rancangan user interface</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Menu program sesuai dengan rancangan program diterapkan.</li>
                                                <li>Penempatan user interface dialog diatur secara sekuensial.</li>
                                                <li>Setting aktif-pasif komponen user interface dialog disesuaikan dengan urutan alur proses.</li>
                                                <li>Bentuk style dari komponen user interface ditentukan. </li>
                                                <li>Penerapan simulasi dijadikan suatu proses yang sesungguhnya.</li>
                                            </ol>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q2" class="form-check-input k" name="q2"  type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q2" class="form-check-input bk" name="q2"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>J.620100.011.01 </td>
                                    <td>
                                        <b>Memilih tools pemrograman yang sesuai dengan kebutuhan</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Platform (lingkungan) yang akan digunakan untuk menjalankan tools pemrograman diidentifikasi sesuai dengan kebutuhan.</li>
                                                <li>Tools bahasa pemrogram dipilih sesuai dengan kebutuhaan dan lingkungan pengembangan.</li>
                                            </ol>
                                        </ul>
                                        <b>Instalasi tool pemrograman</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Tools pemrogaman ter-install sesuai dengan prosedur.</li>
                                                <li>Tools pemrograman bisa dijalankan di lingkungan pengembangan yang telah ditetapkan.</li>
                                            </ol>
                                        </ul>
                                        <b>Menerapkan hasil pemodelan kedalam eksekusi script sederhana</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Script (source code) sederhana dibuat sesuai tools pemrogaman yang di-install</li>
                                                <li>Script dapat dijalankan dengan benar dan menghasilkan keluaran sesuai skenario yang diharapkan</li>
                                            </ol>
                                        </ul>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q3"  class="form-check-input k" name="q3"  type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q3" class="form-check-input bk" name="q3"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>J.620100.016.01 </td>
                                    <td>
                                        <b>Menerapkan coding guidelines dan best practices dalam penulisan program (kode sumber)</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Menerapkan coding guidelines dan best practices dalam penulisan program (kode sumber).</li>
                                                <li>Struktur program yang sesuai dengan konsep paradigmanya dibuat.</li>
                                                <li>Galat/error ditangani.</li>
                                            </ol>
                                        </ul>
                                        <b>Menggunakan ukuran performansi dalam menuliskan kode sumber</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Efisiensi penggunaan resources oleh kode dihitung.</li>
                                                <li>Kemudahan interaksi selalu diimplementasikan sesuai standar yang berlaku.</li>
                                            </ol>
                                        </ul>
                                        
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q4" class="form-check-input k" name="q4"  type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q4" class="form-check-input bk" name="q4"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>J.620100.017.02</td>
                                    <td>
                                        <b>Menggunakan tipe data dan control program</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Menggunakan tipe data dan control program.</li>
                                                <li>Syntax program yang dikuasai digunakan sesuai standar.</li>
                                                <li>Struktur kontrol program yang dikuasai digunakan sesuai standar.</li>
                                            </ol>
                                        </ul>
                                        <b>Membuat program sederhana</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran telah dibuat.</li>
                                                <li>Struktur kontrol percabangan dan pengulangan dalam membuat program telah digunakan.</li>
                                            </ol>
                                        </ul>
                                        <b>Membuat program menggunakan prosedur dan fungsi</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Program dengan menggunakan prosedur dibuat sesuai aturan penulisan program.</li>
                                                <li>Program dengan menggunakan fungsi dibuat sesuai aturan penulisan program.</li>
                                                <li>Program dengan menggunakan prosedur dan fungsi secara bersamaan dibuat sesuai aturan penulisan program.</li>
                                                <li>Keterangan untuk setiap prosedur dan fungsi telah diberikan.</li>
                                            </ol>
                                        </ul>
                                        <b>Membuat program menggunakan array</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Membuat program menggunakan array</li>
                                                <li>Tipe data array telah ditentukan.</li>
                                                <li>Panjang array telah ditentukan.</li>
                                                <li>Pengurutan array telah digunakan.</li>
                                            </ol>
                                        </ul>
                                        <b>Membuat program untuk akses file</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Program untuk menulis data dalam media penyimpan telah dibuat.</li>
                                                <li>Program untuk membaca data dari media penyimpan telah dibuat.</li>
                                            </ol>
                                        </ul>
                                        <b>Mengkompilasi program</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Kesalahan program telah dikoreksi.</li>
                                                <li>Kesalahan syntax dalam program telah dibebaskan. </li>
                                            </ol>
                                        </ul>
                                        
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q5" class="form-check-input k" name="q5"  type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q5" class="form-check-input bk" name="q5"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>J.620100.019.02 </td>
                                    <td>
                                        <b>Melakukan pemilihan unit-unit reuse yang potensial</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Class unit-unit reuse (dari aplikasi lain) yang sesuai dapat diidentifikasi.</li>
                                                <li>Keuntungan efisiensi dari pemanfaatan komponen reuse dapat dihitung</li>
                                                <li>Lisensi, Hak cipta dan hak paten tidak dilanggar dalam pemanfaatan komponen reuse tersebut.</li>
                                            </ol>
                                        </ul>
                                        <b>Melakukan integrasi library atau komponen pre-existing dengan source code yang ada</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Ketergantungan antar unit diidentifikasi.</li>
                                                <li>Penggunaan komponen yang sudah obsolete dihindari.</li>
                                                <li>Program yang dihubungkan dengan library diterapkan.</li>
                                            </ol>
                                        </ul>
                                        <b>Melakukan pembaharuan library atau komponen preexisting yang digunakan</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Cara-cara pembaharuan library atau komponen pre-existing diidentifikasi.</li>
                                                <li>Pembaharuan library atau komponen preexisting berhasil dilakukan.</li>
                                            </ol>
                                        </ul>
                                        
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q6" class="form-check-input k" name="q6"  type="radio" value="K">
                                            
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q6" class="form-check-input bk" name="q6"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>J.620100.023.02</td>
                                    <td>
                                        <b>Melakukan identifikasi kode program</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Modul program diidentifikasi.</li>
                                                <li>Parameter yang dipergunakan diidentifikasi.</li>
                                                <li>Algoritma dijelaskan cara kerjanya.</li>
                                                <li>Komentar setiap baris kode termasuk data, eksepsi, fungsi, prosedur dan class (bila ada) diberikan.</li>
                                            </ol>
                                        </ul>
                                        <b>Membuat dokumentasi modul program</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Dokumentasi modul dibuat sesuai dengan identitas untuk memudahkan pelacakan.</li>
                                                <li>Identifikasi dokumentasi diterapkan.</li>
                                                <li>Kegunaan modul dijelaskan .</li>
                                                <li>Dokumen direvisi sesuai perubahan kode program.</li>
                                            </ol>
                                        </ul>
                                        <b>Membuat dokumentasi fungsi, prosedur atau method program</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Dokumentasi fungsi, prosedur atau metod dibuat.</li>
                                                <li>Kemungkinan eksepsi dijelaskan.</li>
                                                <li>Dokumen direvisi sesuai perubahan kode program.</li>
                                            </ol>
                                        </ul>
                                        <b>Men-generate dokumentasi</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Tools untuk generate dokumentasi diidentifikasi.</li>
                                                <li>Generate dokumentasi dilakukan.</li>
                                            </ol>
                                        </ul>
                                        
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input wire:model="q7" class="form-check-input k" name="q7" type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input wire:model="q7" class="form-check-input bk" name="q7" type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>J.620100.025.02 </td>
                                    <td>
                                        <b>Mempersiapkan kode program</b>
                                        <br>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Kode program sesuai spesifikasi disiapkan.</li>
                                                <li>Debugging tools untuk melihat proses suatu modul dipersiapkan.</li>
                                            </ol>
                                        </ul>
                                        <b>Melakukan debugging</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Kode program dikompilasi sesuai bahasa pemrograman yang digunakan.</li>
                                                <li>Kriteria lulus build dianalisis.</li>
                                                <li>Kriteria eksekusi aplikasi dianalisis.</li>
                                                <li>Kode kesalahan dicatat.</li>
                                            </ol>
                                        </ul>
                                        <b>Memperbaiki program</b>
                                        <ul>
                                            <li>Kriteria untuk Kerja</li>
                                            <ol>
                                                <li>Perbaikan terhadap kesalahan kompilasi maupun build dirumuskan.</li>
                                                <li>Perbaikan dilakukan.</li>
                                            </ol>
                                        </ul>
                                        
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input  wire:model="q8" class="form-check-input k" name="q8"  type="radio" value="K">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check mt-0">
                                            <input wire:model="q8" class="form-check-input bk" name="q8"  type="radio" value="BK">
                                            <br> 
                                        </div>
                                    </td>
                                    <td>
                                        <input type="checkbox"> KTP </br>
                                        <input type="checkbox"> Ijazah  </br>
                                        <input type="checkbox"> Bukti Pendidikan </br>
                                        <input type="checkbox"> Bukti Pelatihan  </br>
                                        <input type="checkbox"> Bukti pengalaman Kerja  </br>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <div class="text-center">
                            <div wire:loading wire:target="foto" class="text-sm text-gray-500 italic">Uploading...</div>
                            <button class="btn btn-danger nextBtn btn-md" type="button" wire:click="back(2)">Back</button>
                            <button class="btn btn-success btn-md" wire:click="submitForm" type="button">Finish!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>