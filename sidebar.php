<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo  strpos("index", $baseHref) !== false ? '' : 'collapsed'; ?>" href="index">
                <i class="bi bi-grid"></i>
                <span>Anasayfa</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo  strpos("admins", $baseHref) !== false ? '' : 'collapsed'; ?>" href="admins">
                <i class="bi bi-person-fill"></i>
                <span>Adminler</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo  strpos("genel-ayarlar social-medias logos contact-ayarlar", $baseHref) !== false ? '' : 'collapsed'; ?>" data-bs-target="#site-ayarlar" data-bs-toggle="collapse" href="#">
                <i class="bi bi-gear"></i><span>Site Ayarları</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="site-ayarlar" class="nav-content collapse <?php echo  strpos("genel-ayarlar social-medias logos contact-ayarlar", $baseHref) !== false ? 'show' : ''; ?>" data-bs-parent="#sidebar-nav">
                <li>
                    <a class="<?php echo  strpos("genel-ayarlar", $baseHref) !== false ? 'active' : ''; ?>" href="genel-ayarlar">
                        <i class="bi bi-circle"></i><span>Genel Ayarlar</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo  strpos("social-medias", $baseHref) !== false ? 'active' : ''; ?>" href="social-medias">
                        <i class="bi bi-circle"></i><span>Sosyal Medyalar</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo  strpos("logos", $baseHref) !== false ? 'active' : ''; ?>" href="logos">
                        <i class="bi bi-circle"></i><span>Site Logoları</span>
                    </a>
                </li>
                <li>
                    <a class="<?php echo  strpos("contact-ayarlar", $baseHref) !== false ? 'active' : ''; ?>" href="contact-ayarlar">
                        <i class="bi bi-circle"></i><span>İletişim Bilgileri</span>
                    </a>
                </li>

            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>
                <li>
                    <a href="components-accordion">
                        <i class="bi bi-circle"></i><span>Accordion</span>
                    </a>
                </li>

            </ul>
        </li>




        <li class="nav-heading">Sayfalar</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->
    </ul>

</aside>
<!-- End Sidebar-->