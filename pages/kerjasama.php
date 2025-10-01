<!-- Page Header Start -->
<div class="container-fluid page-header mb-2 py-5">
    <div class="container">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Kerjasama</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Kerjasama</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container">
    <div class="row g-5">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
            <h6 style="font-size: 23px;" class="text-secondary text-uppercase">Kerjasama</h6>
            <h1 style="font-size: 20px;" class="mb-4">Kerjasama PTI</h1>
            <p class="mb-4 fw-medium">Pusat Teknologi Informasi (PTI) Universitas Gajayana (Uniga) melakukan berbagai kerja sama strategis dengan perusahaan teknologi terkemuka seperti Google, Icon Plus, dan Microsoft. Berikut adalah beberapa bentuk kerja sama yang dilakukan:</p>
            <p class="fw-medium"><b class="text-primary">1. Google</b></p>
            <p>PTI Uniga bekerja sama dengan Google untuk menyediakan akses ke berbagai layanan pendidikan berbasis cloud, seperti Google Workspace for Education. Melalui kerja sama ini, mahasiswa, dosen, dan staf dapat menggunakan layanan email, Google Drive, Google Meet, serta berbagai alat kolaborasi lainnya yang memudahkan proses pembelajaran dan administrasi.</p>
            <p class="fw-medium"><b class="text-primary"><a href="https://plniconplus.co.id/" target="_blank">2. Icon Plus</a> </b></p>
            <p>Icon Plus, anak perusahaan PLN, berkolaborasi dengan PTI Uniga dalam penyediaan dan pengembangan infrastruktur jaringan dan koneksi internet kampus. Kerja sama ini bertujuan untuk meningkatkan kualitas jaringan internet dan memastikan ketersediaan layanan konektivitas yang stabil dan cepat di seluruh lingkungan kampus.</p>
            <p class="fw-medium"><b class="text-primary">3. Microsoft</b></p>
            <p>Melalui kerja sama dengan Microsoft, PTI Uniga menyediakan akses ke berbagai perangkat lunak dan layanan Microsoft, termasuk lisensi Office yang meliputi Word, Excel, PowerPoint, dan lainnya.</p>
            <p class="fw-medium"><b class="text-primary"><a href="https://jagoanhosting.com/" target="_blank">4. Jagoan Hosting</a></b></p>
            <p>Dengan Jagoan Hosting, PTI Uniga menyediakan layanan web hosting yang handal untuk berbagai unit dan organisasi di lingkungan universitas. Kerjasama ini memungkinkan hosting website yang aman dan stabil untuk mendukung kebutuhan komunikasi, publikasi, serta kegiatan akademik dan administrasi kampus.</p>
            <p class="fw-medium"><b class="text-primary"><a href="https://indotamakaryanusantara.com/" target="_blank">5. Indotama Karya Nusantara</a></b></p>
            <p>PTI Uniga juga bekerja sama dengan Indotama Karya Nusantara dalam hal penyediaan layanan teknologi informasi dan solusi IT yang mendukung infrastruktur digital kampus. Kolaborasi ini bertujuan untuk memperkuat keamanan, efisiensi, dan perkembangan teknologi di lingkungan universitas.</p>
            <p class="mb-4 fw-medium">Dengan kolaborasi ini, PTI Uniga memastikan bahwa seluruh sivitas akademika memiliki akses ke teknologi terbaru dan dapat memanfaatkannya untuk mendukung pembelajaran, penelitian, dan administrasi dengan lebih efektif dan efisien.</p>
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
    $(window).on('load', function() {
        // Tambahkan class 'active' pada elemen navbar setelah semua elemen termuat
        $('#navabout').addClass('active');
        $('#navhome').removeClass('active');
    });
</script>