<?php
require_once 'header.php';
?>


    <!-- Section Hero START -->
    <section id="hero">
        <video autoplay loop muted>
            <source src="assets/video/hero.MP4" type="video/mp4">
        </video>

        <div class="content">
            <h1>Sapanca Big Loft</h1>
            <p>Sapanca Big Loft olarak konuklarımızın rahatı kadar güvenliği ve
                sağlığına da önem veriyoruz. Bu nedenle Covid-19 Pandemisi ile ilgili tüm gelişmeleri yakından takip
                ediyor ve gerekli önlemleri otelimizde kararlılıkla uyguluyoruz.
            </p>
        </div>
        <h4>En İyi Fiyat Garantisi İle Online Rezervasyon</h4>
    </section>
    <!-- Section Hero END -->

    <!-- Section herobottom START -->
    <section id="herobottom">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-4">
                    <div class="mCard">
                        <i class="bi bi-telephone"></i>
                        <div class="content">
                            <h5>TELEFON</h5>
                            <p>+<?php echo $setting['settings_phone'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mCard">
                        <i class="bi bi-envelope"></i>
                        <div class="content">
                            <h5>E-POSTA</h5>
                            <p><?php echo $setting['settings_email'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mCard">
                        <i class="bi bi-geo-alt"></i>
                        <div class="content">
                            <h5>ADRES</h5>
                            <p class="smal"><?php echo $setting['settings_adress'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section herobottom END -->

    <!-- Section rooms START -->
    <section id="rooms">
        <div class="container">
            <div class="d-flex justify-content-center">
                <h3 class="title">Odalarımız</h3>
            </div>
            <div class="swiper roomSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="mCard">
                            <div class="card-head">
                                <a href=""> <img src="assets/img/room1.JPG"></a>
                            </div>
                            <div class="content">
                                <h4>Havuz Suit</h4>
                                <p>Yatak Tipi: 2 Adet Tek Kişilik Yatak | Kapasite: 2 Kişi | Oda
                                    Büyüklüğü:28m²| Banyo: Küvet</p>
                                <div class="d-flex justify-content-center">
                                    <a href="" class="d-flex justify-content-center align-items-center">
                                        <h5>Oda Detayları</h5> <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="mCard">
                            <div class="card-head">
                                <a href=""> <img src="assets/img/room2.JPG"></a>
                            </div>
                            <div class="content">
                                <h4>Havuz Suit</h4>
                                <p>Yatak Tipi: 1 Adet Çift Kişilik Yatak | Kapasite: 2 Kişi | Oda Büyüklüğü: 28 m²
                                    Banyo:
                                    Küvet</p>
                                <div class="d-flex justify-content-center">
                                    <a href="" class="d-flex justify-content-center align-items-center">
                                        <h5>Oda Detayları</h5> <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="mCard">
                            <div class="card-head">
                                <a href=""> <img src="assets/img/room3.JPG"></a>
                            </div>
                            <div class="content">
                                <h4>Havuz Suit</h4>
                                <p>Yatak Tipi: 2 Adet Tek Kişilik Yatak | Kapasite: 2 Kişi | Oda
                                    Büyüklüğü:28m²| Banyo: Küvet</p>
                                <div class="d-flex justify-content-center">
                                    <a href="" class="d-flex justify-content-center align-items-center">
                                        <h5>Oda Detayları</h5> <i class="bi bi-arrow-right-short"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Section rooms END -->

    <!-- Section maps START -->
    <section id="maps">
        <div class="d-flex justify-content-center">
            <h3 class="title">Konumumuz</h3>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4944.700236926321!2d30.289123367358705!3d40.66760298576975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cca9d6c76270bd%3A0x12141fdffeb05f89!2sSapanca%20Big%20Loft!5e0!3m2!1sen!2str!4v1656941173189!5m2!1sen!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- Section maps END -->

    <!-- Section diff START -->
    <section id="diff">
        <div class="d-flex justify-content-center">
            <h3 class="title">Ayrıcalıklarımız</h3>
        </div>
        <div class="container mt-3">
            <div class="row gx-lg-5 gy-4">
                <div class="col-lg-3 col-md-6">
                    <a href="">
                        <div class="mCard">
                            <img src="assets/img/test.jpg">
                            <div class="content">

                                <div>
                                    <h4>Toplantı ve <br> Etkinlikler</h4>
                                    <p>Farklı ihtiyaçlar için 8 farklı toplantı salonu...</p>
                                    <h3>Detaylı Bilgi İçin Tıklayın.</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="">
                        <div class="mCard">
                            <img src="assets/img/test.jpg">
                            <div class="content">

                                <div>
                                    <h4>Özel Günler</h4>
                                    <p>Farklı ihtiyaçlar için 8 farklı toplantı salonu...</p>
                                    <h3>Detaylı Bilgi İçin Tıklayın.</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="">
                        <div class="mCard">
                            <img src="assets/img/test.jpg">
                            <div class="content">

                                <div>
                                    <h4>Sağlık Kulubü</h4>
                                    <p>Kendinizi şımartın...</p>
                                    <h3>Detaylı Bilgi İçin Tıklayın.</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="">
                        <div class="mCard">
                            <img src="assets/img/test.jpg">
                            <div class="content">

                                <div>
                                    <h4>Yiyecek ve <br> İçecek</h4>
                                    <p>Farklı ihtiyaçlar için 8 farklı toplantı salonu...</p>
                                    <h3>Detaylı Bilgi İçin Tıklayın.</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- Section diff END -->


    <?php
    require_once 'footer.php';
    ?>

