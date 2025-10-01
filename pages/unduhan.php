<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Unduhan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <!-- <li class="breadcrumb-item text-white active" aria-current="page">FAQ</li> -->
                <li class="breadcrumb-item text-white active" aria-current="page">Unduhan</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h6 style="font-size: 23px;" class="text-secondary text-uppercase">Unduhan</h6>
                <h1 style="font-size: 20px;" class="mb-4">Berkas Permohonan</h1>
                <!-- <p class="mb-4 fw-medium">Unduh form untuk pengajuan layanan di PTI Universitas Gajayana Malang.</p> -->
                <!-- tabel untuk pelayanan  -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Layanan</th>
                            <th scope="col">Formulir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Formulir pengajuan akun e-mail Mahasiswa</td>
                            <td>
                                <a href="pages/form_email.php?file=form-akun-email.docx" target="_blank">Unduh</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Formulir pengajuan akun internet Mahasiswa</td>
                            <td> <a href="pages/form_email.php?file=form-akun-internet.docx" target="_blank">Unduh</a></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <br>
                <!-- end pengajuan  -->

                <!-- panduan untuk mahasiswa  -->
                <h6 style="font-size: 23px;" class="text-secondary text-uppercase">Panduan Pengguna</h6>
                <h1 style="font-size: 20px;" class="mb-4">Panduan Mahasiswa</h1>
                <!-- <p class="mb-4 fw-medium">Panduan sistem akademik dan LMS untuk Mahaiswa Universitas Gajayana Malang.</p> -->
                <table class="table table-hover">
                    <thead>
                        <tr>

                            <th scope="col">Panduan</th>
                            <th scope="col">Unduh | View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Panduan Pembayaran Kuliah</td>
                            <td>
                                <a href="pages/panduanPembayaran.php?file=tatacara-pembayaran.pdf" target="_blank">
                                    Unduh</a> | <a href="https://drive.google.com/file/d/1A9gsS-dd-KhWtCMdo2fO3B0XdoFlhdOR/view?usp=sharing" target="_blank">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Panduan Sistem Informasi Akademik Online Mahasiswa</td>
                            <td>
                                <a href="pages/panduanSiska.php?file=sistem-akademik.pdf" target="_blank">
                                    Unduh</a> | <a href="https://drive.google.com/file/d/1edV4FO64Ok3Vl6Z01tYjMLVDReQ0dq1Y/view?usp=sharing" target="_blank">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Panduan LMS Mahasiswa</td>
                            <td>
                                <a href="pages/panduanLms.php?file=panduan-lms-mahasiswa.pdf"> Unduh</a> | <a href="https://drive.google.com/file/d/1p8g2S2NS8c8qJOBkTAnYKdIPJMrn1zTe/view?usp=sharing" target="_blank">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <!-- panduan utnuk dosen  -->
                <!-- <h6 class="text-secondary text-uppercase">Panduan</h6> -->
                <h1 style="font-size: 20px;" class="mb-4">Panduan Dosen</h1>
                <!-- <p class="mb-4 fw-medium">Panduan sistem akademik dan LMS untuk Dosen Universitas Gajayana Malang.</p> -->

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Panduan</th>
                            <th scope="col">Unduh | View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Panduan Sistem Informasi Akademik Online untuk Dosen</td>
                            <td>
                                <a href="pages/panduansiskadosen.php?file=sistem-akademik-dosen.pdf" target="_blank">
                                    Unduh
                                </a> | <a href="https://drive.google.com/file/d/1-tguydFW2EBDQYYFjILcTqPUB7cm_VlV/view?usp=sharing" target="_blank">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Panduan LMS untuk Dosen</td>
                            <td>
                                <a href="pages/panduanLms.php?file=panduan-lms-dosen.pdf"> Unduh</a> | <a href="https://drive.google.com/file/d/1aW5ZtQKJ-IZSDGjyMj8AokCgpZyGZKz4/view?usp=sharing" target="_blank">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table> <br><br>
                <!-- end panduan untuk dosen  -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Footer Start -->
<?php include "templates/footer.php" ?>
<!-- Footer End -->

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>