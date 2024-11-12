<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitten - Pet Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-light">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
            <i class="fa-solid fa-paw" style="color: #FFD43B;"></i>
            <span class="ms-2">Kitten</span>
        </a>            
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- ... existing code ... -->
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#collections">Collections</a></li>
        <li class="nav-item"><a class="nav-link" href="#shop">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="#blogs">Blogs</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact-us">Contact</a></li>
        <!-- Ikon Sign In -->
        <li class="nav-item">
            <a class="nav-link" onclick="window.location.href='signin.html'" style="cursor: pointer;">
                <i class="fas fa-user"></i> Sign In
            </a>
        </li>
        <!-- Ikon Tas Belanja -->
        <li class="nav-item">
            <a class="nav-link" href="#cart">
                <i class="fas fa-shopping-cart"></i> Cart
            </a>
        </li>
    </ul>
</div>

</nav>


    <!-- Hero Section -->
    <section id="home" class="hero-section text-white">
        <div class="container d-flex align-items-center">
            <div class="hero-content w-50">
                <h1>HIGH QUALITY <br>PET SHOP</h1>
                <p class="lead">Sale up to 40% off today</p>
                <a href="#shop" class="btn btn-dark btn-lg">Shop Now</a>
            </div>
            <!-- <div class="hero-image w-50">
                <img src="assets/cat.png" alt="Dog Image" class="img-fluid">
            </div> -->
        </div>
    </section>

    <!-- Pet Info Section -->
<section id="collections" class="pet-info-section py-5">
    <div class="container text-center">
        <h2 class="mb-4">Adopt a Pet</h2>
        <p class="mb-4">Find a new furry Friend</p>
        <p class="mb-4">Every cat has a unique story to tell, and we’re here to help you write the next chapter together. Visit us today to explore our wonderful selection of lovable cats, and let’s create a bond that will last a lifetime!</p>
        <div id="petCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Pet 1 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/fluffy.png" alt="Fluffy" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Fluffy</h5>
                                        <p><strong>Gender:</strong> Female</p>
                                        <p><strong>Neutered:</strong> Yes</p>
                                        <p><strong>Age:</strong> 2 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="fluffy">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pet 2 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/charlie.png" alt="Charlie" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Charlie</h5>
                                        <p><strong>Gender:</strong> Male</p>
                                        <p><strong>Neutered:</strong> Yes</p>
                                        <p><strong>Age:</strong> 2 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="charlie">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pet 3 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/lucky.png" alt="Lucky" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Lucky</h5>
                                        <p><strong>Gender:</strong> Male</p>
                                        <p><strong>Neutered:</strong> Yes</p>
                                        <p><strong>Age:</strong> 5 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="lucky">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pet 4 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/magdalene.png" alt="Magdalene" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Magdalene</h5>
                                        <p><strong>Gender:</strong> Female</p>
                                        <p><strong>Neutered:</strong> No</p>
                                        <p><strong>Age:</strong> 2 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="magdalene">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Pet 5 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/bella.png" alt="Bella" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Bella</h5>
                                        <p><strong>Gender:</strong> Female</p>
                                        <p><strong>Neutered:</strong> Yes</p>
                                        <p><strong>Age:</strong> 3 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="bella">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pet 6 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/max.png" alt="Max" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Max</h5>
                                        <p><strong>Gender:</strong> Male</p>
                                        <p><strong>Neutered:</strong> Yes</p>
                                        <p><strong>Age:</strong> 4 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="max">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pet 7 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/daisy.png" alt="Daisy" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Daisy</h5>
                                        <p><strong>Gender:</strong> Female</p>
                                        <p><strong>Neutered:</strong> Yes</p>
                                        <p><strong>Age:</strong> 1 year</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="daisy">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Pet 8 -->
                            <div class="col-lg-3 mb-4">
                                <div class="card text-center">
                                    <div class="card-img-top">
                                        <img src="assets/rocky.png" alt="Rocky" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Rocky</h5>
                                        <p><strong>Gender:</strong> Male</p>
                                        <p><strong>Neutered:</strong> No</p>
                                        <p><strong>Age:</strong> 2 years</p>
                                        <a href="#" class="btn btn-more-info" data-bs-toggle="modal" data-bs-target="#moreInfoModal" data-pet-id="rocky">MORE INFO</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#petCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#petCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    
    
<!-- Product Display Section (Updated) -->
<section id="shop" class="product-selections py-5">
    <div class="container">
        <h2 class="text-center mb-4">Shop Our Products</h2>
        <div class="row">
            <!-- Produk 1 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/royal.jfif" alt="Royal Canin" class="img-fluid">
                        <div class="product-overlay">
                            <img src="assets/royal2.jfif" alt="Product 1 Alternate" class="img-fluid">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <h4>Royal Canin</h4>
                        <p class="price">Rp200.000</p>
                        <!-- Cart Icon -->
                        <button class="btn btn-primary add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 2 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/bed.jfif" alt="Fluff Bed Kitten" class="img-fluid">
                        <div class="product-overlay">
                            <img src="assets/bed2.jfif" alt="Product 2 Alternate" class="img-fluid">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <h4>Bed for Kitten</h4>
                        <p class="price">Rp1.520.000</p>
                        <!-- Cart Icon -->
                        <button class="btn btn-primary add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 3 -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/pet.jfif" alt="Premium Necklace" class="img-fluid">
                        <div class="product-overlay">
                            <img src="assets/pet2.jfif" alt="Product 3 Alternate" class="img-fluid">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <h4>Necklace Kitten</h4>
                        <p class="price">Rp135.000</p>
                        <!-- Cart Icon -->
                        <button class="btn btn-primary add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 4 (Duplikasi Produk 1) -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/maxima.jpg" alt="Maxima" class="img-fluid">
                        <div class="product-overlay">
                            <img src="assets/maxima2.jpg" alt="Product 4 Alternate" class="img-fluid">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <h4>Maxima</h4>
                        <p class="price">Rp265.000</p>
                        <!-- Cart Icon -->
                        <button class="btn btn-primary add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 5 (Duplikasi Produk 2) -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/proplan.jpg" alt="Proplan cat food" class="img-fluid">
                        <div class="product-overlay">
                            <img src="assets/proplan2.jpg" alt="Product 5 Alternate" class="img-fluid">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <h4>Proplan cat food</h4>
                        <p class="price">Rp129.999</p>
                        <!-- Cart Icon -->
                        <button class="btn btn-primary add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Produk 6 (Duplikasi Produk 3) -->
            <div class="col-md-4 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="assets/excel.jpeg" alt="Premium Excel catfood" class="img-fluid">
                        <div class="product-overlay">
                            <img src="assets/excel2.jpg" alt="Product 6 Alternate" class="img-fluid">
                        </div>
                    </div>
                    <div class="product-info text-center">
                        <h4>Premium Excel catfood</h4>
                        <p class="price">Rp400.000</p>
                        <!-- Cart Icon -->
                        <button class="btn btn-primary add-to-cart">
                            <i class="fas fa-shopping-cart"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Modal -->
    <div class="modal fade" id="moreInfoModal" tabindex="-1" aria-labelledby="moreInfoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="moreInfoModalLabel">Pet Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="petMoreInfoText">
                    <!-- Content will be injected here by JavaScript -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

 <!-- Blog Section -->
<section id="blogs" class="latest-blogs py-5">
    <div class="container">
        <h2 class="text-center mb-4">Latest Blog Posts</h2>
        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#blogModal" data-title="Mengenal Kucing Jakarta" data-image="assets/kucingjakarta.webp" data-text="Kucing Jakarta memiliki tempat khusus dalam kehidupan urban ibukota. Mereka adalah bagian penting dari komunitas, baik sebagai hewan peliharaan di rumah maupun kucing jalanan yang membutuhkan perhatian. Dengan dukungan dari komunitas dan fasilitas yang ada, kita bisa memastikan kucing-kucing ini mendapatkan perhatian dan perawatan yang mereka butuhkan. Apakah Anda seorang pecinta kucing atau hanya penasaran tentang kehidupan kucing di Jakarta, ada banyak cara untuk terlibat dan mendukung kesejahteraan kucing di kota ini. Mulailah dengan mencari tahu lebih banyak tentang komunitas kucing lokal dan cara Anda bisa berkontribusi.">
                                <img src="assets/kucingjakarta.webp" alt="Kucing Jakarta: Menyelami Dunia Kucing di Ibukota" class="img-fluid">
                                <div class="blog-info">
                                    <h4>Mengenal Kucing Jakarta</h4>
                                    <p>Kucing Jakarta memiliki tempat khusus dalam kehidupan urban ibukota. Mereka adalah bagian penting dari komunitas, baik sebagai hewan peliharaan di rumah maupun kucing jalanan yang membutuhkan perhatian. Dengan dukungan dari komunitas dan fasilitas yang ada, kita bisa memastikan kucing-kucing ini mendapatkan perhatian dan perawatan yang mereka butuhkan.</p>
                                    <p>Apakah Anda seorang pecinta kucing atau hanya penasaran tentang kehidupan kucing di Jakarta, ada banyak cara untuk terlibat dan mendukung kesejahteraan kucing di kota ini. Mulailah dengan mencari tahu lebih banyak tentang komunitas kucing lokal dan cara Anda bisa berkontribusi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#blogModal" data-title="Apa Itu Stres pada Kucing?" data-image="assets/kucingstres.webp" data-text="Stres pada kucing adalah masalah serius yang bisa mempengaruhi kesehatan dan kebahagiaan mereka. Dengan memahami penyebab dan tanda-tanda stres, serta menerapkan strategi untuk mengatasi masalah tersebut, Anda dapat membantu kucing Anda merasa lebih nyaman dan bahagia. Jika Anda khawatir tentang stres kucing Anda atau jika masalah berlanjut, jangan ragu untuk berkonsultasi dengan dokter hewan untuk mendapatkan bantuan profesional. Menjaga kucing Anda dalam keadaan sehat dan bahagia memerlukan perhatian dan upaya yang konsisten. Dengan perhatian dan kasih sayang, Anda dapat membantu kucing Anda mengatasi stres dan menjalani kehidupan yang lebih baik.">
                                <img src="assets/kucingstres.webp" alt="Kucing Stres: Memahami dan Mengatasi Masalah Kesehatan Emosional pada Kucing" class="img-fluid">
                                <div class="blog-info">
                                    <h4>Apa Itu Stres pada Kucing?</h4>
                                    <p>Stres pada kucing adalah masalah serius yang bisa mempengaruhi kesehatan dan kebahagiaan mereka. Dengan memahami penyebab dan tanda-tanda stres, serta menerapkan strategi untuk mengatasi masalah tersebut, Anda dapat membantu kucing Anda merasa lebih nyaman dan bahagia. Jika Anda khawatir tentang stres kucing Anda atau jika masalah berlanjut, jangan ragu untuk berkonsultasi dengan dokter hewan untuk mendapatkan bantuan profesional.</p>
                                    <p>Menjaga kucing Anda dalam keadaan sehat dan bahagia memerlukan perhatian dan upaya yang konsisten. Dengan perhatian dan kasih sayang, Anda dapat membantu kucing Anda mengatasi stres dan menjalani kehidupan yang lebih baik.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#blogModal" data-title="Memahami Tahapan Perkembangan Kucing" data-image="assets/perkembangan.webp" data-text="Memahami tahapan perkembangan kucing membantu Anda memberikan perawatan yang lebih baik dan mendukung kesehatan mereka sepanjang hidup mereka. Setiap tahap pertumbuhan memiliki kebutuhan dan perubahan khusus yang penting untuk diperhatikan. Dengan perhatian dan perawatan yang tepat, kucing Anda dapat menjalani kehidupan yang sehat dan bahagia dari bayi hingga dewasa. Jika Anda memiliki pertanyaan tentang perkembangan kucing Anda atau jika Anda melihat tanda-tanda masalah, jangan ragu untuk berkonsultasi dengan dokter hewan. Mereka dapat memberikan panduan dan saran yang bermanfaat untuk memastikan kucing Anda tumbuh dengan baik.">
                                <img src="assets/perkembangan.webp" alt="Perkembangan Kucing: Memahami Tahapan Pertumbuhan dari Bayi hingga Dewasa" class="img-fluid">
                                <div class="blog-info">
                                    <h4>Memahami Tahapan Perkembangan Kucing</h4>
                                    <p>Memahami tahapan perkembangan kucing membantu Anda memberikan perawatan yang lebih baik dan mendukung kesehatan mereka sepanjang hidup mereka. Setiap tahap pertumbuhan memiliki kebutuhan dan perubahan khusus yang penting untuk diperhatikan. Dengan perhatian dan perawatan yang tepat, kucing Anda dapat menjalani kehidupan yang sehat dan bahagia dari bayi hingga dewasa.</p>
                                    <p>Jika Anda memiliki pertanyaan tentang perkembangan kucing Anda atau jika Anda melihat tanda-tanda masalah, jangan ragu untuk berkonsultasi dengan dokter hewan. Mereka dapat memberikan panduan dan saran yang bermanfaat untuk memastikan kucing Anda tumbuh dengan baik.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Slide -->
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#blogModal" data-title="Mengapa Adopsi Kucing?" data-image="assets/openadopsi.webp" data-text="Adopsi kucing adalah langkah yang mulia dan memerlukan tanggung jawab. Dengan mempersiapkan diri dan rumah Anda, serta memberikan perawatan dan perhatian yang diperlukan, Anda dapat memberikan kehidupan yang bahagia dan sehat untuk kucing Anda. Setiap kucing yang diadopsi membawa kebahagiaan dan cinta ke dalam rumah Anda, dan mereka sangat berterima kasih atas kesempatan kedua yang Anda berikan. Jika Anda mempertimbangkan untuk mengadopsi kucing, kunjungi penampungan lokal atau yayasan adopsi untuk menemukan teman baru Anda. Kucing yang penuh kasih menunggu untuk menemukan rumah yang penuh kasih dari Anda.">
                                <img src="assets/openadopsi.webp" alt="Adopsi Kucing: Panduan Lengkap untuk Menjadi Pemilik Kucing yang Bertanggung Jawab" class="img-fluid">
                                <div class="blog-info">
                                    <h4>Mengapa Adopsi Kucing?</h4>
                                    <p>Adopsi kucing adalah langkah yang mulia dan memerlukan tanggung jawab. Dengan mempersiapkan diri dan rumah Anda, serta memberikan perawatan dan perhatian yang diperlukan, Anda dapat memberikan kehidupan yang bahagia dan sehat untuk kucing Anda. Setiap kucing yang diadopsi membawa kebahagiaan dan cinta ke dalam rumah Anda, dan mereka sangat berterima kasih atas kesempatan kedua yang Anda berikan.</p>
                                    <p>Jika Anda mempertimbangkan untuk mengadopsi kucing, kunjungi penampungan lokal atau yayasan adopsi untuk menemukan teman baru Anda. Kucing yang penuh kasih menunggu untuk menemukan rumah yang penuh kasih dari Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="blog-card" data-bs-toggle="modal" data-bs-target="#blogModal" data-title="Tanda-Tanda Kucing Sakit" data-image="assets/sakit.webp" data-text="Mengidentifikasi dan menangani masalah kesehatan pada kucing Anda dengan cepat sangat penting untuk kesejahteraan mereka. Dengan memantau tanda-tanda sakit dan segera mencari perawatan profesional, Anda dapat membantu kucing Anda pulih dan kembali ke kondisi sehat. Jangan ragu untuk berkonsultasi dengan dokter hewan jika Anda memiliki kekhawatiran mengenai kesehatan kucing Anda. Memberikan perawatan yang tepat dan perhatian khusus adalah bagian dari tanggung jawab Anda sebagai pemilik kucing. Dengan upaya yang tepat, Anda dapat memastikan bahwa kucing Anda hidup sehat dan bahagia.">
                                <img src="assets/sakit.webp" alt="Mengenali dan Menangani Kucing Sakit: Panduan Lengkap untuk Pemilik Kucing" class="img-fluid">
                                <div class="blog-info">
                                    <h4>Tanda-Tanda Kucing Sakit</h4>
                                    <p>Mengidentifikasi dan menangani masalah kesehatan pada kucing Anda dengan cepat sangat penting untuk kesejahteraan mereka. Dengan memantau tanda-tanda sakit dan segera mencari perawatan profesional, Anda dapat membantu kucing Anda pulih dan kembali ke kondisi sehat. Jangan ragu untuk berkonsultasi dengan dokter hewan jika Anda memiliki kekhawatiran mengenai kesehatan kucing Anda.</p>
                                    <p>Memberikan perawatan yang tepat dan perhatian khusus adalah bagian dari tanggung jawab Anda sebagai pemilik kucing. Dengan upaya yang tepat, Anda dapat memastikan bahwa kucing Anda hidup sehat dan bahagia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blogCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#blogCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</section>

<!-- Blog Modal -->
<div class="modal fade" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered blog-modal-dialog-centered" role="document">
        <div class="modal-content blog-modal-content">
            <div class="modal-header blog-modal-header">
                <h5 class="modal-title blog-modal-title" id="blogModalLabel">Blog Title</h5>
                <button type="button" class="btn-close blog-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body blog-modal-body">
                <img src="" alt="Blog Image" class="img-fluid blog-modal-image">
                <p>Blog content goes here...</p>
            </div>
            <div class="modal-footer blog-modal-footer">
                <button type="button" class="btn btn-secondary blog-btn-close" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal HTML -->
<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blogModalLabel">Blog Post Title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="" alt="Blog Post Image" class="img-fluid modal-image">
                <p class="modal-text">Detailed content of the blog post...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<section id="contact-us">
<div class="contact-us">
    <div class="contact-form">
        <h2>Contact Us</h2>
        <div class="form-group-row">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="Your Email">
            </div>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Subject">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" placeholder="Your Message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="contact-map">
        <div id="map"></div>
    </div>
</div>

<div class="counter-section">
    <div class="counter-item">
        <i class="fas fa-users"></i>
        <h3><span class="counter" data-target="1500">0</span></h3>
        <p>HAPPY CLIENTS</p>
    </div>
    <div class="counter-item">
        <i class="fas fa-user-tie"></i>
        <h3><span class="counter" data-target="14">0</span></h3>
        <p>PROFESSIONALS</p>
    </div>
    <div class="counter-item">
        <i class="fas fa-home"></i>
        <h3><span class="counter" data-target="900">0</span></h3>
        <p>ADOPTED PETS</p>
    </div>
    <div class="counter-item">
        <i class="fas fa-award"></i>
        <h3><span class="counter" data-target="12">0</span></h3>
        <p>PRIZES</p>
    </div>
</div>

<div class="contact-info-grid">
    <div class="contact-info-item">
        <i class="fas fa-envelope"></i>
        <h3>Send us a Message</h3>
        <p>email@yoursite.com</p>
    </div>
    <div class="contact-info-item">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Visit our Location</h3>
        <p>Pet Street 123 - New York</p>
    </div>
    <div class="contact-info-item">
        <i class="fas fa-phone"></i>
        <h3>Call us today</h3>
        <p>(123) 456-789</p>
    </div>
    <div class="contact-info-item">
        <i class="fas fa-heart"></i>
        <h3>Follow us on Social Media</h3>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
</section>


<footer class="footer">
    <div class="footer-content">
      <div class="footer-logo">
        <i class="fas fa-paw"></i> KITTEN!
        <p>Cras enim wisi elit aenean, amet eros curabitur. Wisi ad eget ipsum metus sociis Cras enim wisi elit aenean.</p>
      </div>
      <div class="footer-contact">
        <h3><i class="fas fa-phone"></i> Contact Us</h3>
        <p>(123) 456-789</p>
        <p>email@yoursite.com</p>
        <p>Pet Street 123 - New York</p>
      </div>
      <div class="footer-hours">
        <h3><i class="far fa-clock"></i> Working Hours</h3>
        <p>Open 9am - 10pm</p>
        <p>Holidays - Closed</p>
        <p>Weekends - Closed</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 Kitten! Developed by webRedox | All rights reserved.</p>
    </div>
  </footer>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>