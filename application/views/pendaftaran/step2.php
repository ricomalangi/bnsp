<div class="tab-pane" role="tabpanel" id="step2">
    <div class="row">
        <div class="col-md-12">
            <h4>Bagian 2 : Data Sertifikasi</h4>
            <hr class="my-12"/> 
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
            <h5>Daftar Unit Kompetensi</h5>
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
        </div>
    </div>
    <ul class="list-inline pull-right">
        <li><button type="button" class="default-btn prev-step">Back</button></li>
        <li><button type="button" class="btn-success btn-md next-step">Continue</button></li>
    </ul>
</div>