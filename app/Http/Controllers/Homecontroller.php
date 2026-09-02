<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('index', [
            'home'        => $this->home(),
            'skills'      => $this->skills(),
            'experiences' => $this->experiences(),
            'careers'     => $this->careers(),
            'projects'    => $this->projects(),
        ]);
    }

    private function home(): array
    {
        return [
            'foto' => 'img/fotohome.png',
            'name' => 'Muhamad Shafwan Dzaki',
            'title' => 'Frontend Developer',
            'deskripsi' => 'Frontend Development yang juga menguasai UI/UX Design. Saya terbiasa menggunakan Laravel dan Tailwind CSS, untuk membangun website yang responsif, serta Figma untuk merancang website yang menarik. Saya juga memiliki semangat untuk terus belajar berbagai teknologi frontend lainnya guna mengembangkan kemampuan dan pengalaman saya.',
            'linkinstagram' => 'https://www.instagram.com/shafwandzaki_?igsi=MWp5eTR3Y2kwMWF1ZQ==',
            'linkemail' => 'mailto:shafwandzaki19@gmail.com',
            'linklinkedin' => 'https://www.linkedin.com/in/muhamad-shafwan-dzaki-8744b93aa?utm_source=share_via&utm_content=profile&utm_medium=member_android'
        ];
    }

    private function skills(): array
    {
        return [
            ['nameskill' => 'HTML', 'iconskill' => 'icon/html.png', 'category' => 'Frontend Development', 'percent' => 100],
            ['nameskill' => 'CSS', 'iconskill' => 'icon/css.png', 'category' => 'Frontend Development', 'percent' => 100],
            ['nameskill' => 'Laravel Blade', 'iconskill' => 'icon/laravel.png', 'category' => 'Frontend Development', 'percent' => 50],
            ['nameskill' => 'TailwindCSS', 'iconskill' => 'icon/tailwindcss.png', 'category' => 'Frontend Development', 'percent' => 50],
            ['nameskill' => 'Python', 'iconskill' => 'icon/python.png', 'category' => 'Core Programming', 'percent' => 50],
            ['nameskill' => 'C++', 'iconskill' => 'icon/cplus.png', 'category' => 'Core Programming', 'percent' => 60],
            ['nameskill' => 'PHP', 'iconskill' => 'icon/php.png', 'category' => 'Backend Development', 'percent' => 10],
            ['nameskill' => 'Flutter', 'iconskill' => 'icon/flutter.png', 'category' => 'Mobile Development', 'percent' => 40],
            ['nameskill' => 'Git', 'iconskill' => 'icon/git.png', 'category' => 'Tools & Deployment', 'percent' => 60],
            ['nameskill' => 'GitHub', 'iconskill' => 'icon/github.png', 'category' => 'Tools & Deployment', 'percent' => 60],
            ['nameskill' => 'GitLab', 'iconskill' => 'icon/gitlab.png', 'category' => 'Tools & Deployment', 'percent' => 50],
            ['nameskill' => 'MySQL', 'iconskill' => 'icon/mysql.png', 'category' => 'Database', 'percent' => 30],
            ['nameskill' => 'Figma', 'iconskill' => 'icon/figma.png', 'category' => 'UI/UX Design', 'percent' => 70],
            ['nameskill' => 'Excel', 'iconskill' => 'icon/excel.png', 'category' => 'Lainnya', 'percent' => 80],
            ['nameskill' => 'Affinity', 'iconskill' => 'icon/affinity.png', 'category' => 'Lainnya', 'percent' => 80],
            ['nameskill' => 'Capcut', 'iconskill' => 'icon/capcut.png', 'category' => 'Lainnya', 'percent' => 70],
        ];
    }

    private function experiences(): array
    {
        return [
            [
                'grup' => 'Pengalaman Terkait',
                'iconex' => 'icon/pengalaman.png',
                'posisi' => 'Mobile Developer',
                'namaperusahaan' => 'Schoolmedia, PT. Janish Lintas Data',
                'waktu' => 'April 2026 - Agustus 2026',
                'lokasi' => 'Ciner, Depok',
                'deskripsi' => 'Berperan sebagai Mobile Developer dengan fokus pada pengembangan front-end aplikasi menggunakan Flutter. Terlibat dalam pengembangan aplikasi Jurnal Akademik dan SBIZ, mulai dari implementasi desain ke dalam aplikasi, pengembangan tampilan hingga melakukan pengujian serta revisi tampilan. Pada proyek SBIZ, turut terlibat dalam perancangan UI/UX menggunakan Figma, meliputi riset, penyusunan user flow, desain antarmuka, dan prototype.'
            ],

            [
                'grup' => 'Pengalaman Lainnya',
                'iconex' => 'icon/freelance.png',
                'posisi' => 'Cameraman Streaming',
                'namaperusahaan' => 'Freelance',
                'waktu' => 'November 2024 - Sekarang',
                'lokasi' => 'Jakarta Barat, DKI Jakarta',
                'deskripsi' => 'Bekerja sebagai freelance cameraman dalam berbagai kegiatan dan acara yang membutuhkan layanan live streaming. Bertanggung jawab dalam mengoperasikan kamera, menentukan angle dan framing, serta memastikan kebutuhan visual selama acara dapat tersampaikan dengan baik. Berkoordinasi dengan tim produksi untuk mendukung kelancaran proses live streaming dari persiapan hingga acara selesai.'
            ],

            [
                'grup' => 'Organisasi & Lembaga',
                'iconex' => 'icon/organisasi.png',
                'posisi' => 'Divisi Media Kreatif',
                'namaperusahaan' => 'Himpunan Mahasiswa Teknik Informatika',
                'waktu' => 'September 2025 - September 2026',
                'lokasi' => 'Universitas Mercu Buana',
                'deskripsi' => 'Berperan dalam Divisi Media & Creative dengan fokus pada kebutuhan visual dan dokumentasi kegiatan organisasi. Bertanggung jawab dalam melakukan dokumentasi foto dan video, membuat desain grafis untuk kebutuhan publikasi, serta mendukung produksi konten media organisasi. Pengalaman ini mengembangkan kemampuan dalam bidang visual communication, photography, graphic design, content creation, dan teamwork.'
            ],

            [
                'grup' => 'Organisasi & Lembaga',
                'iconex' => 'icon/organisasi.png',
                'posisi' => 'Divisi Dokumentasi',
                'namaperusahaan' => 'Karang Taruna RT.07',
                'waktu' => 'Agustus 2021 - Sekarang',
                'lokasi' => 'RT.07, Kebon Jeruk, Jakarta Barat',
                'deskripsi' => 'Terlibat dalam berbagai kegiatan dan acara yang diselenggarakan oleh Karang Taruna, termasuk kegiatan perayaan 17 Agustus dan perlombaan masyarakat. Berkontribusi sebagai bagian dari kepanitiaan sekaligus lebih sering bertanggung jawab pada dokumentasi foto dan video untuk mengabadikan rangkaian kegiatan. Pengalaman ini melatih kemampuan dalam teamwork, koordinasi, dan bekerja secara responsif dalam situasi lapangan.'
            ],

            [
                'grup' => 'Organisasi & Lembaga',
                'iconex' => 'icon/organisasi.png',
                'posisi' => 'Tim Multimedia & Tim Hadroh',
                'namaperusahaan' => 'Lembaga Studi Islam Al-Awfiya',
                'waktu' => 'November 2021 - Sekarang',
                'lokasi' => 'Kebon Jeruk, Jakarta Barat',
                'deskripsi' => 'Aktif dalam berbagai kegiatan kreatif dan produksi media di Lembaga Studi Islam Al-Awfiya. Berkontribusi sebagai bagian dari tim hadroh, cameraman dalam kegiatan live streaming, serta kru produksi podcast. Terlibat dalam proses produksi mulai dari persiapan teknis, pengoperasian kamera, hingga produksi konten. Pengalaman ini memperkuat kemampuan dalam multimedia production, videography, live streaming, teamwork, dan technical production.'
            ],
        ];
    }

    private function projects(): array
    {
        return [
            [
                'grup' => 'Proyek Terkait',
                'img' => 'img/bannersbiz.png',
                'namaproject' => 'Sbiz - Aplikasi Marketplace Berbasis Mobile',
                'deskripsi' => 'SBiz merupakan aplikasi marketplace berbasis mobile yang dikembangkan sebagai bentuk pengembangan dari platform SBiz berbasis website yang telah tersedia sebelumnya. Aplikasi ini dirancang untuk memberikan pengalaman berbelanja yang lebih praktis dan mudah diakses melalui perangkat mobile.',
                'detail' => 'SBiz merupakan aplikasi marketplace berbasis mobile yang dikembangkan sebagai bentuk pengembangan dari platform SBiz berbasis website yang telah tersedia sebelumnya. Aplikasi ini dirancang untuk memberikan pengalaman berbelanja yang lebih praktis, mudah, dan fleksibel melalui perangkat mobile. Pengguna dapat mengakses layanan marketplace kapan saja dan di mana saja, mulai dari mencari produk hingga melihat informasi seperti detail, harga, dan ketersediaan barang. Tampilan antarmuka serta navigasi aplikasi dirancang secara sederhana agar pengguna dapat mengakses berbagai fitur dengan mudah. Dengan demikian, SBiz Mobile diharapkan dapat memberikan pengalaman berbelanja yang lebih nyaman dan efisien bagi pengguna.
                Sebagai pengembangan dari platform website, SBiz Mobile tetap menyediakan fungsi utama marketplace dengan menyesuaikannya terhadap kebutuhan pengguna perangkat mobile. Pengguna dapat menjelajahi produk, melihat detail produk, melakukan pembelian, serta memantau informasi terkait pesanan dan transaksi. Aplikasi ini juga dirancang dengan tampilan yang responsif dan navigasi yang sederhana untuk mempermudah penggunaan setiap fitur. Pengembangan SBiz Mobile bertujuan untuk meningkatkan aksesibilitas layanan serta mendukung proses jual beli secara lebih fleksibel dan optimal. Secara keseluruhan, aplikasi ini diharapkan mampu memberikan layanan marketplace yang praktis, efektif, dan sesuai dengan kebutuhan pengguna di era digital.',
                'linkproject' => 'https://play.google.com/store/apps/details?id=id.co.sbiz'
            ],

            [
                'grup' => 'Proyek Terkait',
                'img' => 'img/bannerdesainsbiz.png',
                'namaproject' => 'Desain UI/UX - Aplikasi Marketplace Berbasis Mobile',
                'deskripsi' => 'Sebuah desian aplikasi marketplace dengan berbagai fitur dibuat menggunakan component dengan figma. Perancangan UI/UX mencakup pembuatan user flow, wireframe, struktur navigasi, layout halaman, hingga desain antarmuka final. Desain dibuat dengan mempertimbangkan kemudahan navigasi & kenyamanan pengguna.',
                'detail' => 'Perancangan aplikasi marketplace dilakukan menggunakan Figma dengan memanfaatkan berbagai komponen untuk membangun tampilan antarmuka yang konsisten dan terstruktur. Proses perancangan UI/UX mencakup pembuatan user flow untuk menggambarkan alur interaksi pengguna dalam aplikasi. Selain itu, dibuat wireframe sebagai rancangan awal untuk menentukan struktur dan penempatan elemen pada setiap halaman. Struktur navigasi juga dirancang untuk memudahkan pengguna dalam berpindah dari satu halaman ke halaman lainnya. Seluruh proses perancangan dilakukan secara bertahap hingga menghasilkan desain antarmuka final yang siap digunakan sebagai acuan pengembangan aplikasi.
                Dalam proses pembuatan desain, setiap halaman disusun dengan memperhatikan layout, hierarki informasi, serta konsistensi penggunaan komponen dan elemen visual. Desain antarmuka dibuat dengan mempertimbangkan kemudahan navigasi agar pengguna dapat menemukan fitur dan informasi yang dibutuhkan dengan cepat. Selain itu, aspek kenyamanan pengguna juga menjadi perhatian dalam menentukan ukuran elemen, penggunaan warna, tipografi, serta tata letak. Pemanfaatan komponen pada Figma membantu menjaga konsistensi desain sekaligus mempermudah proses pengembangan dan perubahan desain. Dengan pendekatan tersebut, rancangan UI/UX diharapkan dapat menghasilkan pengalaman pengguna yang intuitif, nyaman, dan sesuai dengan kebutuhan aplikasi marketplace.',
                'linkproject' => 'https://www.figma.com/design/CAhdaoEwTV9XCJfOPxH1tZ/SBiz?node-id=774-3288&t=q5Bnrz1IurSPyx3y-0'
            ],

            [
                'grup' => 'Proyek Terkait',
                'img' => 'img/bannerjurnalakademik.png',
                'namaproject' => 'Jurnal Akademik - Aplikasi Pembelajaran Berbasis Mobile',
                'deskripsi' => 'Jurnal Akademik merupakan aplikasi pembelajaran siswa berbasis mobile yang dikembangkan sebagai bentuk pengembangan dari platform Jurnal Akademik berbasis website. Aplikasi ini dirancang untuk memudahkakn siswa, guru, dan orang tua untuk memantu perkembangan pembelajaran siswa dengan praktis melalui perangkat mobile.',
                'detail' => 'Jurnal Akademik merupakan aplikasi pembelajaran siswa berbasis mobile yang dikembangkan sebagai bentuk pengembangan dari platform Jurnal Akademik berbasis website yang telah tersedia sebelumnya. Aplikasi ini dirancang untuk memudahkan siswa, guru, dan orang tua dalam memantau perkembangan pembelajaran siswa melalui perangkat mobile. Dengan adanya aplikasi ini, informasi terkait aktivitas dan perkembangan akademik dapat diakses dengan lebih praktis dan fleksibel. Pengguna dapat memperoleh informasi pembelajaran tanpa harus selalu mengakses platform melalui komputer atau laptop. Hal ini diharapkan dapat meningkatkan kemudahan serta efisiensi dalam proses pemantauan kegiatan akademik siswa.
                Dalam pengembangannya, Jurnal Akademik Mobile menyediakan berbagai informasi yang berkaitan dengan aktivitas dan perkembangan pembelajaran siswa. Siswa dapat menggunakan aplikasi untuk mengakses informasi akademik, sementara guru dan orang tua dapat memantau perkembangan pembelajaran secara lebih mudah. Antarmuka aplikasi dirancang dengan navigasi yang sederhana dan mudah dipahami agar dapat digunakan oleh setiap pengguna sesuai dengan kebutuhannya. Selain meningkatkan aksesibilitas informasi, aplikasi ini juga diharapkan dapat mendukung komunikasi dan pemantauan antara siswa, guru, dan orang tua. Secara keseluruhan, Jurnal Akademik Mobile menjadi salah satu solusi untuk mendukung proses pembelajaran dan pemantauan akademik secara lebih praktis di era digital.',
                'linkproject' => 'https://play.google.com/store/apps/details?id=id.schoolmedia.jurnal'
            ],

            [
                'grup' => 'Proyek Terkait',
                'img' => 'img/bannerjasabersihrumah.png',
                'namaproject' => 'SuruhinAja - Tampilan Website Jasa Bersih Rumah',
                'deskripsi' => 'SuruhinAja merupakan website jasa bersih rumah, tampilan web ini dibangun menggunakan HTML, CSS, dan JavaScript. fitur di website ini dapat memesan jasa bersih rumah dari jauh dan dapat mengatur jadwal pemesanan.',
                'detail' => 'SuruhinAja merupakan website layanan jasa kebersihan rumah yang dirancang untuk memudahkan pengguna dalam menemukan dan memesan layanan kebersihan sesuai dengan kebutuhan. Website ini dibangun menggunakan teknologi **HTML, CSS, dan JavaScript** untuk menghasilkan tampilan yang informatif, interaktif, dan mudah digunakan. Pengguna dapat mengakses layanan secara online tanpa perlu datang langsung atau melakukan pemesanan secara manual. Melalui website ini, pengguna dapat memilih layanan kebersihan yang tersedia sesuai dengan kebutuhan. Dengan adanya SuruhinAja, proses pemesanan jasa kebersihan dapat dilakukan dengan lebih praktis dan efisien.
                Fitur yang tersedia pada website SuruhinAja memungkinkan pengguna untuk melakukan pemesanan jasa kebersihan dari jarak jauh melalui perangkat yang terhubung dengan internet. Pengguna juga dapat menentukan jadwal pemesanan sesuai dengan waktu yang diinginkan sehingga layanan dapat disesuaikan dengan aktivitas pengguna. Informasi mengenai layanan disajikan secara jelas agar pengguna dapat menentukan pilihan sebelum melakukan pemesanan. Tampilan website dirancang dengan memperhatikan kemudahan navigasi dan kenyamanan pengguna dalam mengakses setiap fitur. Secara keseluruhan, SuruhinAja diharapkan dapat menjadi solusi praktis dalam memenuhi kebutuhan jasa kebersihan rumah secara online.',
                'linkproject' => '#'
            ],

            [
                'grup' => 'Proyek Terkait',
                'img' => 'img/bannerlaundry.png',
                'namaproject' => 'Web Laundry Expres - Tampilan Website Laundry',
                'deskripsi' => 'Laundry Expres merupakan website laundry yang dikembangkan menggunakan HTML, CSS, dan JavaScript sebagi tampilannya. fitur di website ini dapat memesan dan mengatur jadwal pengambilan cucian ketempat pelanggan dan akan diantar setelah cucian selesai.',
                'detail' => 'Laundry Express merupakan website layanan laundry yang dikembangkan menggunakan **HTML, CSS, dan JavaScript** sebagai teknologi utama dalam membangun tampilan dan interaksi pada website. Website ini dirancang untuk memberikan kemudahan kepada pelanggan dalam melakukan pemesanan layanan laundry secara online. Pengguna dapat mengakses layanan tanpa perlu datang langsung ke tempat laundry untuk melakukan pemesanan. Informasi mengenai layanan dapat disajikan secara jelas sehingga pelanggan dapat memilih layanan sesuai dengan kebutuhan. Dengan adanya Laundry Express, proses pemesanan laundry diharapkan menjadi lebih praktis, mudah, dan efisien.
                Fitur utama pada website Laundry Express memungkinkan pelanggan untuk melakukan pemesanan sekaligus mengatur jadwal pengambilan cucian dari lokasi pelanggan. Setelah cucian selesai diproses, cucian akan diantarkan kembali ke lokasi pelanggan sesuai dengan jadwal yang telah ditentukan. Sistem ini memberikan kemudahan bagi pelanggan karena seluruh proses dapat dilakukan tanpa harus datang langsung ke tempat laundry. Tampilan website juga dirancang dengan memperhatikan kemudahan navigasi agar pengguna dapat melakukan pemesanan dengan mudah. Secara keseluruhan, Laundry Express diharapkan dapat menjadi solusi layanan laundry yang praktis dengan sistem pengambilan dan pengantaran yang lebih efisien.',
                'linkproject' => '#'
            ],

            [
                'grup' => 'Karya Saya Yang Lain',
                'img' => 'img/project6.jpg',
                'namaproject' => 'Fotografi',
                'deskripsi' => 'Beberapa karya fotografi saya dengan berbagai macam genre seperti potrait, landscape, streen, moment, dll. juga dengan berbagai mood seperti warm, cool, moody, dll serta dengan berbagai macam style atau gaya visual.',
                'linkproject' => '#'
            ],

            [
                'grup' => 'Karya Saya Yang Lain',
                'img' => 'img/project7.jpg',
                'namaproject' => 'Desain Grafis',
                'deskripsi' => 'Beberapa karya desain grafis saya dengan berbagai macam ukuran dan kreativitas dari potrait, landscape, story, feed, poster, flayer, banner, kolase, dll serta dengan berbagai macam style atau gaya visual.',
                'linkproject' => '#'
            ]
        ];
    }

    private function careers(): array
    {
        return [
            [
                'icon' => 'icon/career.png',
                'tingkatan' => 'Sarjanah Teknik Informatika',
                'namainstitusi' => 'Universitas Mercu Buana',
                'waktu' => 'September 2023 - Sekarang',
                'deskripsi' => 'Program Studi Teknik Informatika, dengan mata kuliah terkait: 1. Pengembangan Web 2. Pengembangan Aplikasi 3. Desainer UI/UX 4. Data Science 5. Kecerdasan Buatan'
            ],

            [
                'icon' => 'icon/career.png',
                'tingkatan' => 'Sekolah Menengah Atas',
                'namainstitusi' => 'SMA AL-Chasanah',
                'waktu' => ' September 2020 - Mei 2023',
                'deskripsi' => 'Jurusan MIPA, Mempelajari berbagai bidang seperti Matematika, Fisika, Kimia, dan Biologi, sekaligus mengembangkan kemampuan berpikir logis, analitis, pemecahan masalah, dan ketelitian.'
            ],
        ];
    }
}
