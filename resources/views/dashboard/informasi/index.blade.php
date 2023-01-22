@extends('dashboard.layout.main')

@section('container')
<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
    {{-- Informasi --}}
</h2>
<div class="w-full overflow-hidden rounded-lg shadow-xs">
    <div class="w-full overflow-x-auto">
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <p class="text-gray-600 dark:text-gray-400 text-4xl font-semibold mb-6">Akuntansi</p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Kompetensi Umum :</p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Mengelola buku jurnal, kartu piutang, hutang, dan aktiva, serta mengelola siklus akuntansi perusahaan,
                baik jasa, dagang
                maupun manufaktur
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Tujuan Jurusan :</p>
            <ul class="list-decimal pl-5 text-gray-600 dark:text-gray-400 mb-10">
                <li>Mengelola dokumen transaksi</li>
                <li>Memproses entry jurnal</li>
                <li>Memproses buku besar</li>
                <li>Menyelesaikan siklus akuntansi perusahaan jasa</li>
                <li>Menyelesaikan siklus akuntansi perusahaan dagang</li>
                <li>Menyelesaikan siklus akuntansi perusahaan manufaktur</li>
                <li>Mengerjakan praktik perpajakan</li>
                <li>Menyelesaikan siklus akuntansi perusahaan dengan aplikasi software
                    akuntansi</li>
            </ul>


            <p class="text-gray-600 dark:text-gray-400 text-4xl font-semibold mb-6">Multimedia</p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Kompetensi Umum :</p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Mengoperasikan periferal multimedia, mengoperasikan software pengolah gambar vector, raster, web design,
                presentasi dinamis, animasi 3D dan 2Dimensi, digital Audio dan visual.
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Tujuan Jurusan :</p>
            <ul class="list-decimal pl-5 text-gray-600 dark:text-gray-400 mb-10">
                <li>Merakit personal computer, melakukan instalasi sistem operasi dasar dan
                    menerapkan Keselamatan, Kesehatan Kerja dan Lingkungan Hidup.</li>
                <li>Menerapkan seni grafis dalam desain komunikasi visual untuk
                    multimedia</li>
                <li>Mengoperasikan dan menggabungkan fotografi, teks, video, dan audio ke dalam
                    sajian Multimedia</li>
                <li>Mengoperasikan software dan periferal digital illustration, digital imaging,
                    dan web</li>
                <li>Mengoperasikan software dan periferal multimedia, 2D Animation dan 3D
                    Animation</li>
                <li>Mengoperasikan software dan periferal digital audio, digital video dan
                    visual effects</li>
                <li>Mengelola isi halaman web</li>
            </ul>


            <p class="text-gray-600 dark:text-gray-400 text-4xl font-semibold mb-6">Pemasaran</p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Kompetensi Umum :</p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Manajemen pemasaran barang dan jasa, menyelenggarakan administrasi penjualan dan pembelian, mengelola
                kegiatan usaha perdagangan, membuka usaha mandiri (wirausaha)
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Tujuan Jurusan :</p>
            <ul class="list-decimal pl-5 text-gray-600 dark:text-gray-400 mb-10">
                <li>Memahami prinsip-prinsip bisnis</li>
                <li>Menata produk</li>
                <li>Melaksanakan negosiasi</li>
                <li>Melaksanakan Konfirmasi Keputusan Pelanggan</li>
                <li>Melaksanakan proses administrasi transaksi</li>
                <li>Melakukan penyerahan/pengiriman produk</li>
                <li>Melaksanakan penagihan pembayaran</li>
                <li>Mengoperasikan peralatan transaksi di lokasi penjualan</li>
                <li>Menemukan peluang baru dari pelanggan</li>
                <li>Melaksanakan pelayanan prima (service excellent)</li>
                <li>Membuka usaha eceran/ritel (expansion store opening)</li>
                <li>Melakukan pemasaran barang dan jasa</li>
            </ul>


            <p class="text-gray-600 dark:text-gray-400 text-4xl font-semibold mb-6">Perbankan</p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Kompetensi Umum :</p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Memahami uang dan Lembaga Keuangan, memahami jenis dan operasional Bank, memahami sumber dana Bank,
                memahami kredit Bank, memahami perusahaan pegadaian, leasing, asuransi, memahami pasar modal
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Tujuan Jurusan :</p>
            <ul class="list-decimal pl-5 text-gray-600 dark:text-gray-400 mb-10">
                <li>Customer service Representative ( CSR )</li>
                <li>Akuntansi Perbankan</li>
                <li>Teller / Cashier</li>
                <li>Administrasi Persuratan</li>
                <li>Operator Telephone</li>
                <li>Greeter / Penyambut tamu di Frontline</li>
                <li>Adminstrasi Laporan keuangan dan pengarsipan</li>
            </ul>


            <p class="text-gray-600 dark:text-gray-400 text-4xl font-semibold mb-6">Perhotelan</p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Kompetensi Umum :</p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Menerima dan memproses reservasi, menyediakan layanana komodasi (reception), menyediakan layanan
                housekeeping, Public
                Area Attendant, and Laundry Attendant Services
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Tujuan Jurusan :</p>
            <ul class="list-decimal pl-5 text-gray-600 dark:text-gray-400 mb-10">
                <li>Dasar Kompetesi yang meliputi : Bekerja dengan teman kerja dan pelanggan,
                    melaksanakan pekerjaan dalam lingkungan yang
                    berbeda secara sosial, menangani konflik , menerapkan Keselamatan , Kesehatan Kerja dan Lingkungan
                    Hidup serta
                    memutakhirkan informasi industri pariwisata</li>
                <li>Menerima dan memproses reservasi , menyediakan layanan akomodasi reception,
                    menyediakan layanan porter menerapkan
                    ketrampilan berkomunikasi melalui telepon, melaksanakan prosedur klerikal, memproses transaksi
                    keuangan, memelihara
                    catatan keuangan, serta menerapkan semua dasar kompetensi keahlian</li>
                <li>Membersihkan lokasi / area dan peralatan , menyiapkan kamar untuk tamu ,
                    menangani linen dan pakaian tamu, menyediakan
                    layanan housekeeping untuk tamu , menyediakan jasa valet, menyediakan layanan ruang rapat/seminar
                    (function room) serta
                    menerapkan semua dasar kompetensi keahlian</li>
            </ul>


            <p class="text-gray-600 dark:text-gray-400 text-4xl font-semibold mb-6">Perkantoran</p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Kompetensi Umum :</p>
            <p class="text-gray-600 dark:text-gray-400 mb-6">
                Menerapkan prosedur administrasi dan komunikasi kerja, sistem kearsipan, mail handling untuk menjamin
                integritas.
            </p>
            <p class="text-gray-600 dark:text-gray-400 text-2xl font-medium mb-2">Tujuan Jurusan :</p>
            <ul class="list-decimal pl-5 text-gray-600 dark:text-gray-400 mb-10">
                <li>Memahami prinsip-prinsip penyelenggaraan administrasi perkantoran, Mengaplikasikan keterampilan
                    dasar komunikasi, Menerapkan prinsip-prinsip kerjasama dengan kolega dan pelanggan, Menerapkan
                    Keselamatan, Kesehatan Kerja dan Lingkungan Hidup (K3LH)</li>
                <li>Kompetensi Keahlian meliputi: Mengoperasikan aplikasi perangkat lunak, Mengoperasikan aplikasi
                    presentasi, Mengelola
                    peralatan kantor, Melakukan prosedur administrasi, Menangani penggandaan dokumen, Menangani
                    surat/dokumen kantor,
                    Mengelola sistem kearsipan, Membuat dokumen, Memproses perjalanan bisnis, Mengelola pertemuan/rapat,
                    Mengelola dana kas
                    kecil, Memberikan pelayanan kepada pelanggan, Mengelola data/informasi di tempat kerja,
                    Mengaplikasikan administrasi
                    perkantoran di tempat kerja</li>
            </ul>
        </div>
    </div>
</div>
@endsection