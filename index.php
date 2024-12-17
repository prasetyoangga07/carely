<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika belum login, arahkan ke halaman login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CareLy</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            
/* Styling for the logout button */
.logout-btn {
    background-color: #d9534f;
    color: white;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.logout-btn:hover {
    background-color: #c9302c;
    transform: scale(1.05);
}

.logout-btn:active {
    transform: scale(0.98);
}

/* Adjust the positioning of the logout button in the top right corner */
.logout-container {
    position: absolute;
    top: 16px; /* Adjust this value to move the button down */
    right: 25px;
    margin-top: 10px; /* Fine-tuning the position */
}

/* Make sure the navbar has the right space to prevent the button from overlapping */
.navbar {
    position: relative;
    z-index: 10;
}

/* Ensure the navbar items have proper alignment */
.navbar-nav {
    display: flex;
    align-items: center;
}
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Carely</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Penyakit">Penyakit</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">FREE CHECK</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!-- Logout button -->
            <div class="logout-container">
                <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">CareLy</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Diagnosa Awal Penyakitmu</p>
                <p class="masthead-subheading font-weight-light mb-0 text-italic">"Kecil Gejalanya, Besar Perhatiannya"</p>
            </div>
        </header>
        <!-- Penyakit Section-->
        <section class="page-section Penyakit" id="Penyakit">
            <div class="container">
                <!-- Penyakit Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Penyakit</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Penyakit Grid Items-->
                <div class="row justify-content-center">
                    <!-- Penyakit Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="Penyakit-item mx-auto" data-bs-toggle="modal" data-bs-target="#PenyakitModal1">
                            <div class="Penyakit-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="Penyakit-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Penyakit/f1.png" alt="..." />
                        </div>
                    </div>
                    <!-- Penyakit Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="Penyakit-item mx-auto" data-bs-toggle="modal" data-bs-target="#PenyakitModal2">
                            <div class="Penyakit-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="Penyakit-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Penyakit/f2.png" alt="..." />
                        </div>
                    </div>
                    <!-- Penyakit Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="Penyakit-item mx-auto" data-bs-toggle="modal" data-bs-target="#PenyakitModal3">
                            <div class="Penyakit-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="Penyakit-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Penyakit/f3.png" alt="..." />
                        </div>
                    </div>
                    <!-- Penyakit Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="Penyakit-item mx-auto" data-bs-toggle="modal" data-bs-target="#PenyakitModal4">
                            <div class="Penyakit-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="Penyakit-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Penyakit/f4.png" alt="..." />
                        </div>
                    </div>
                    <!-- Penyakit Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="Penyakit-item mx-auto" data-bs-toggle="modal" data-bs-target="#PenyakitModal5">
                            <div class="Penyakit-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="Penyakit-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Penyakit/f5.png" alt="..." />
                        </div>
                    </div>
                    <!-- Penyakit Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="Penyakit-item mx-auto" data-bs-toggle="modal" data-bs-target="#PenyakitModal6">
                            <div class="Penyakit-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="Penyakit-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/Penyakit/f6.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">CHECK YOUR HEALTH CONDITION!</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Selamat datang di CareLy, platform inovatif yang dirancang untuk membantu Anda memahami kesehatan Anda dengan lebih baik! Kami percaya bahwa kesehatan adalah aset paling berharga, dan melalui teknologi canggih serta informasi terpercaya, kami hadir untuk memberikan solusi praktis dan mudah dalam mendiagnosa berbagai gejala penyakit.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Apakah Anda merasa tidak enak badan tetapi tidak yakin apa yang sedang terjadi dengan tubuh Anda? Jangan khawatir, kami hadir untuk membantu! Melalui sistem diagnosa pintar kami, Anda bisa mendapatkan gambaran awal tentang kondisi kesehatan Anda hanya dalam hitungan menit.</p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <!-- Tombol untuk membuka modal -->
                    <a class="btn btn-xl btn-outline-light" href="diagnosa.php">
                        Free Diagnose
                    </a>
                </div>         
        </section>
            <!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <?php
        // Koneksi ke database
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "carely";

        $conn = new mysqli($host, $user, $password, $database);

        // Periksa koneksi database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Cek jika request method POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil data input dari form
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);
            $message = htmlspecialchars($_POST['message']);

            // Validasi input (jika semua field tidak kosong)
            if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
                // Simpan ke database menggunakan prepared statement
                $stmt = $conn->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $email, $phone, $message);

                if ($stmt->execute()) {
                    echo "<script>alert('Pesan berhasil dikirim!');</script>";
                } else {
                    echo "<script>alert('Terjadi kesalahan: " . $stmt->error . "');</script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('Semua field harus diisi!');</script>";
            }
        }
        $conn->close();
        ?>

        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <form id="contactForm" method="POST" action="">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name..." required />
                        <label for="name">Full name</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" required />
                        <label for="email">Email address</label>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="(123) 456-7890" required />
                        <label for="phone">Phone number</label>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="message" id="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                        <label for="message">Message</label>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary btn-xl" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>


                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>@ifunsoed23 &copy; Informatika Medik </small></div>
        </div>
        <!-- Penyakit Modals-->
        <!-- Penyakit Modal 1-->
        <div class="Penyakit-modal modal fade" id="PenyakitModal1" tabindex="-1" aria-labelledby="PenyakitModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Penyakit Modal - Title-->
                                    <h2 class="Penyakit-modal-title text-secondary text-uppercase mb-0">Influenza</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Penyakit Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/Penyakit/f1.png" alt="..." />
                                    <!-- Penyakit Modal - Text-->
                                    <p class="mb-4">Influenza adalah infeksi saluran pernapasan yang disebabkan oleh virus influenza tipe A, B, atau C. Infeksi ini dapat menyerang hidung, tenggorokan, dan paru-paru. Influenza sering disebut sebagai flu dan dapat menyebabkan gejala ringan hingga berat.</p>
                                        <p>
                                        Gejala Influenza:
                                        Demam tinggi (sering tiba-tiba)
                                        Batuk, biasanya kering
                                        Sakit tenggorokan
                                        Nyeri otot atau sendi
                                        Lemas atau kelelahan
                                        Sakit kepala
                                        Pilek atau hidung tersumbat
                                        </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Penyakit Modal 2-->
        <div class="Penyakit-modal modal fade" id="PenyakitModal2" tabindex="-1" aria-labelledby="PenyakitModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Penyakit Modal - Title-->
                                    <h2 class="Penyakit-modal-title text-secondary text-uppercase mb-0">Influenza Berat</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Penyakit Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/Penyakit/f2.png" alt="..." />
                                    <!-- Penyakit Modal - Text-->
                                    <p class="mb-4"> Dalam kasus berat, flu dapat berkembang menjadi infeksi saluran pernapasan akut berat atau Severe Acute Respiratory Infections (SARI), yang memerlukan perawatan di rumah sakit.</p>
                                    <p>Pada kasus berat, seperti SARI, gejala tambahan dapat berupa:
                                        
                                        Kesulitan bernapas
                                        Nyeri dada
                                        Penurunan kesadaran</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Penyakit Modal 3-->
        <div class="Penyakit-modal modal fade" id="PenyakitModal3" tabindex="-1" aria-labelledby="PenyakitModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Penyakit Modal - Title-->
                                    <h2 class="Penyakit-modal-title text-secondary text-uppercase mb-0">Pneumonia</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Penyakit Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/Penyakit/f3.png" alt="..." />
                                    <!-- Penyakit Modal - Text-->
                                    <p class="mb-4">Pneumonia adalah infeksi pada satu atau kedua paru-paru yang menyebabkan peradangan pada kantung udara kecil di paru-paru (alveoli). Kantung udara tersebut dapat terisi cairan atau nanah, yang mengakibatkan kesulitan bernapas. Pneumonia dapat disebabkan oleh bakteri, virus, jamur, atau iritasi kimia.</p>
                                    <p>Gejala Pneumonia:
                                        Batuk (sering kali menghasilkan dahak kental yang berwarna kuning, hijau, atau bahkan darah).
                                        Demam dan menggigil.
                                        Sesak napas atau napas cepat.
                                        Nyeri dada yang memburuk saat batuk atau bernapas dalam.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Penyakit Modal 4-->
        <div class="Penyakit-modal modal fade" id="PenyakitModal4" tabindex="-1" aria-labelledby="PenyakitModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Penyakit Modal - Title-->
                                    <h2 class="Penyakit-modal-title text-secondary text-uppercase mb-0">Sinusitis</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Penyakit Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/Penyakit/f4.png" alt="..." />
                                    <!-- Penyakit Modal - Text-->
                                    <p class="mb-4">Sinusitis adalah peradangan atau infeksi pada sinus, yaitu rongga udara kecil yang terletak di belakang dahi, pipi, dan mata. Sinus membantu melembabkan udara yang kita hirup dan biasanya mengalirkan lendir melalui saluran hidung. Ketika saluran ini tersumbat, bakteri atau virus dapat berkembang dan menyebabkan infeksi.</p>
                                    <p>Gejala Sinusitis:
                                        Hidung tersumbat atau berair.
                                        Nyeri atau tekanan pada wajah (di sekitar dahi, pipi, mata, atau gigi atas).
                                        Sakit kepala.
                                        Demam (terutama pada sinusitis bakteri).
                                        Kehilangan kemampuan mencium bau.
                                        Lendir tebal berwarna kuning atau hijau.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Penyakit Modal 5-->
        <div class="Penyakit-modal modal fade" id="PenyakitModal5" tabindex="-1" aria-labelledby="PenyakitModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Penyakit Modal - Title-->
                                    <h2 class="Penyakit-modal-title text-secondary text-uppercase mb-0">Bronkitis kronis</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Penyakit Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/Penyakit/f5.png" alt="..." />
                                    <!-- Penyakit Modal - Text-->
                                    <p class="mb-4">Bronkitis kronis adalah salah satu jenis penyakit paru obstruktif kronis (PPOK) yang ditandai dengan peradangan jangka panjang pada saluran bronkial, menyebabkan produksi lendir berlebihan dan penyempitan saluran udara.</p>
                                    <p>Gejala utama bronkitis kronis meliputi:

                                        Batuk berkepanjangan yang menghasilkan dahak.
                                        Sesak napas, terutama setelah aktivitas fisik.
                                        Napas berbunyi (mengi).
                                        Kelelahan atau rasa lemah.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Penyakit Modal 6-->
        <div class="Penyakit-modal modal fade" id="PenyakitModal6" tabindex="-1" aria-labelledby="PenyakitModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Penyakit Modal - Title-->
                                    <h2 class="Penyakit-modal-title text-secondary text-uppercase mb-0">Malaria</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Penyakit Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/Penyakit/f6.png" alt="..." />
                                    <!-- Penyakit Modal - Text-->
                                    <p class="mb-4">Malaria adalah penyakit infeksi yang disebabkan oleh parasit Plasmodium. Parasit ini ditularkan kepada manusia melalui gigitan nyamuk Anopheles betina yang terinfeksi. Malaria terutama ditemukan di wilayah tropis dan subtropis, di mana kondisi lingkungan mendukung keberlangsungan hidup nyamuk dan parasit tersebut.</p>
                                    <p>Gejala Malaria
                                        Gejala muncul setelah masa inkubasi 7–30 hari, tergantung pada jenis parasit. Gejala umum meliputi:
                                        
                                        Demam tinggi yang berulang.
                                        Menggigil dan berkeringat.
                                        Sakit kepala.
                                        Mual dan muntah.
                                        Kelelahan.
                                        Nyeri otot.
                                        Dalam kasus berat (Plasmodium falciparum), dapat menyebabkan anemia berat, kerusakan organ, koma, atau bahkan kematian.</p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
