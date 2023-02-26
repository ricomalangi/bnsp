<div class="tab-pane" role="tabpanel" id="step4">
  <div class="row">
    <div class="col-md-12">
      <h4>Asesmen Mandiri</h4>
      <div class="alert alert-primary mt-2" role="alert">
        <h5>Panduan Asesmen Mandiri</h5>
        <p><b>Instruksi:</b></p>
        <ol style="padding-left: 40px;">
          <li>Baca setiap pertanyaan di kolom sebelah kiri</li>
          <li>Beri tanda centang(√) pada kotak jika Anda yakin dapat melakukan tugas yang dijelaskan</li>
          <li>Isi kolom di sebelah kanan dengan mendaftar bukti yang Anda miliki untuk menunjukkan bahwa Anda melakukan tugas-tugas ini</li>
        </ol>
      </div>
      <table class="table table-bordered mt-4 table-asesmen-mandiri">
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
          <!-- tr 1 -->
          <tr>
            <th scope="row" rowspan="2">1</th>
            <td rowspan="2">J.620100.004.02</td>
            <td>
              <b> Mengidentifikasi konsep data dan struktur data</b><br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Konsep data dan struktur data diidentifikasi sesuai dengan konteks permasalahan.</li>
                  <li>Alternatif struktur data dibandingkan kelebihan dan kekurangannya untuk konteks permasalahan yang diselesaikan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
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
                <input class="form-check-input k" name="q1.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q1.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 1 -->
          <!-- tr 2 -->
          <tr>
            <th scope="row" rowspan="2">2</th>
            <td rowspan="2">J.620100.005.02</td>
            <td>
              <b>Mengidentifikasi rancangan user interface</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Rancangan user interface diidentifikasi sesuai kebutuhan.</li>
                  <li>Komponen user interface dialog diidentifikasi sesuai konteks rancangan proses.</li>
                  <li>Urutan dari akses komponen user interface dialog dijelaskan.</li>
                  <li>Simulasi (mock-up) dari aplikasi yang akan dikembangkan dibuat.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q2" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q2" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Melakukan implementasi rancangan user interface</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
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
                <input class="form-check-input k" name="q2.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q2.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 2 -->
          <!-- tr 3 -->
          <tr>
            <th scope="row" rowspan="2">3</th>
            <td rowspan="2">J.620100.011.01</td>
            <td>
              <b>Memilih tools pemrograman yang sesuai dengan kebutuhan</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Platform (lingkungan) yang akan digunakan untuk menjalankan tools pemrograman diidentifikasi sesuai dengan kebutuhan.</li>
                  <li>Tools bahasa pemrogram dipilih sesuai dengan kebutuhaan dan lingkungan pengembangan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q3" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q3" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Instalasi tool pemrograman</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Tools pemrogaman ter-install sesuai dengan prosedur.</li>
                  <li>Tools pemrograman bisa dijalankan di lingkungan pengembangan yang telah ditetapkan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q3.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q3.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 3 -->
          <!-- tr 4 -->
          <tr>
            <th scope="row" rowspan="2">4</th>
            <td rowspan="2">J.620100.016.01</td>
            <td>
              <b>Menerapkan coding guidelines dan best practices dalam penulisan program (kode sumber)</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Menerapkan coding guidelines dan best practices dalam penulisan program (kode sumber).</li>
                  <li>Struktur program yang sesuai dengan konsep paradigmanya dibuat.</li>
                  <li>Galat/error ditangani.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q4" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Menggunakan ukuran performansi dalam menuliskan kode sumber</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Efisiensi penggunaan resources oleh kode dihitung.</li>
                  <li>Kemudahan interaksi selalu diimplementasikan sesuai standar yang berlaku.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 4 -->
          <!-- tr 5 -->
          <tr>
            <th scope="row" rowspan="6">5</th>
            <td rowspan="6">J.620100.017.02</td>
            <td>
              <b>Menggunakan tipe data dan control program</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Menggunakan tipe data dan control program.</li>
                  <li>Syntax program yang dikuasai digunakan sesuai standar.</li>
                  <li>Struktur kontrol program yang dikuasai digunakan sesuai standar.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q4" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Membuat program sederhana</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Program baca tulis untuk memasukkan data dari keyboard dan menampilkan ke layar monitor termasuk variasinya sesuai standar masukan/keluaran telah dibuat.</li>
                  <li>Struktur kontrol percabangan dan pengulangan dalam membuat program telah digunakan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Membuat program menggunakan prosedur dan fungsi</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Program dengan menggunakan prosedur dibuat sesuai aturan penulisan program.</li>
                  <li>Program dengan menggunakan fungsi dibuat sesuai aturan penulisan program.</li>
                  <li>Program dengan menggunakan prosedur dan fungsi secara bersamaan dibuat sesuai aturan penulisan program.</li>
                  <li>Keterangan untuk setiap prosedur dan fungsi telah diberikan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.2" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.2" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Membuat program menggunakan array</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Membuat program menggunakan array</li>
                  <li>Tipe data array telah ditentukan.</li>
                  <li>Panjang array telah ditentukan.</li>
                  <li>Pengurutan array telah digunakan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.3" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.3" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Membuat program untuk akses file</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Program untuk menulis data dalam media penyimpan telah dibuat.</li>
                  <li>Program untuk membaca data dari media penyimpan telah dibuat.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.4" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.4" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Mengkompilasi program</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Kesalahan program telah dikoreksi.</li>
                  <li>Kesalahan syntax dalam program telah dibebaskan. </li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.5" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q4.5" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 5-->
          <!-- tr 6 -->
          <tr>
            <th scope="row" rowspan="3">6</th>
            <td rowspan="3">J.620100.019.02</td>
            <td>
              <b>Melakukan pemilihan unit-unit reuse yang potensial</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Class unit-unit reuse (dari aplikasi lain) yang sesuai dapat diidentifikasi.</li>
                  <li>Keuntungan efisiensi dari pemanfaatan komponen reuse dapat dihitung</li>
                  <li>Lisensi, Hak cipta dan hak paten tidak dilanggar dalam pemanfaatan komponen reuse tersebut.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q6" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q6" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Melakukan integrasi library atau komponen pre-existing dengan source code yang ada</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Ketergantungan antar unit diidentifikasi.</li>
                  <li>Penggunaan komponen yang sudah obsolete dihindari.</li>
                  <li>Program yang dihubungkan dengan library diterapkan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q6.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q6.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Melakukan pembaharuan library atau komponen preexisting yang digunakan</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Cara-cara pembaharuan library atau komponen pre-existing diidentifikasi.</li>
                  <li>Pembaharuan library atau komponen preexisting berhasil dilakukan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q6.2" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q6.2" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 6 -->
          <!-- tr 7 -->
          <tr>
            <th scope="row" rowspan="4">7</th>
            <td rowspan="4">J.620100.023.02</td>
            <td>
              <b>Melakukan identifikasi kode program</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja :</li>
                <ol>
                  <li>Modul program diidentifikasi.</li>
                  <li>Parameter yang dipergunakan diidentifikasi.</li>
                  <li>Algoritma dijelaskan cara kerjanya.</li>
                  <li>Komentar setiap baris kode termasuk data, eksepsi, fungsi, prosedur dan class (bila ada) diberikan.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q7" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q7" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Membuat dokumentasi modul program</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja</li>
                <ol>
                  <li>Dokumentasi modul dibuat sesuai dengan identitas untuk memudahkan pelacakan.</li>
                  <li>Identifikasi dokumentasi diterapkan.</li>
                  <li>Kegunaan modul dijelaskan .</li>
                  <li>Dokumen direvisi sesuai perubahan kode program.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q7.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q7.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Membuat dokumentasi fungsi, prosedur atau method program</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja</li>
                <ol>
                  <li>Dokumentasi fungsi, prosedur atau metod dibuat.</li>
                  <li>Kemungkinan eksepsi dijelaskan.</li>
                  <li>Dokumen direvisi sesuai perubahan kode program.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q7.2" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q7.2" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Men-generate dokumentasi</b>
              <br>
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
                <input class="form-check-input k" name="q7.3" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q7.3" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 7 -->
          <!-- tr 8-->
          <tr>
            <th scope="row" rowspan="3">8</th>
            <td rowspan="3">J.620100.025.02</td>
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
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q8" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input bk" name="q8" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Melakukan debugging</b>
              <br>
              <ul>
                <li>Kriteria untuk Kerja</li>
                <ol>
                  <li>Kode program dikompilasi sesuai bahasa pemrograman yang digunakan.</li>
                  <li>Kriteria lulus build dianalisis.</li>
                  <li>Kriteria eksekusi aplikasi dianalisis.</li>
                  <li>Kode kesalahan dicatat.</li>
                </ol>
              </ul>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q8.1" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q8.1" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <tr>
            <td>
              <b>Memperbaiki program</b>
              <br>
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
                <input class="form-check-input k" name="q8.2" type="radio" value="K">
                <br>
              </div>
            </td>
            <td>
              <div class="form-check mt-0">
                <input class="form-check-input k" name="q8.2" type="radio" value="BK">
                <br>
              </div>
            </td>
            <td>
              <input type="checkbox"> KTP </br>
              <input type="checkbox"> Ijazah </br>
              <input type="checkbox"> Bukti Pendidikan </br>
              <input type="checkbox"> Bukti Pelatihan </br>
              <input type="checkbox"> Bukti pengalaman Kerja </br>
            </td>
          </tr>
          <!-- end tr 8 -->
        </tbody>
      </table>
      <ul class="list-inline pull-right">
        <li><button type="button" class="default-btn prev-step">Back</button></li>
        <li><button type="button" class="default-btn next-step">Finish</button></li>
      </ul>
    </div>
  </div>
</div>