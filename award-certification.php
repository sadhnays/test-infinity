<?php
$pageTitle = 'Awards & Certifications | Infinity SoftHub';
$pageDescription = 'Explore Infinity SoftHub awards, recognitions, and ISO certifications demonstrating our digital transformation and software engineering excellence.';
$pageKeywords = 'Infinity SoftHub achievements, IT awards, ISO certifications, Digital transformation awards';
$activePage = 'about';
require_once 'includes/header.php';
?>

    <!-- Header Section -->
    <section class="header-section">
        <div class="content-wrapper-container">
            <div class="container-fluid pl-0 pr-0">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-caption">
                            <div class="capation-inner">
                                <h1 class="aos-init" data-aos="fade-up" data-aos-delay="100">Awards & Certificates</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="award-certification bottom-bg">
        <div class="content-wrapper-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pb-5">
                        <h2 class="heading aos-init">Assess our achievements, awards, and certifications to gauge our unprecedented growth</h2>
                    </div>
                </div>
            </div>
            <div id="wrapper">
                <div class="content mt-5 mb-4">
                    <div class="tabs"><button class="tablinks active" data-name="All">
                            <p data-title="All">All</p>
                        </button><button class="tablinks" data-name="Awards">
                            <p data-title="Awards">Awards</p>
                        </button><button class="tablinks" data-name="Certifications">
                            <p data-title="Certifications">Certifications</p>
                        </button></div>
                    <div class="wrapper_tabcontent">
                        <div id="All" class="tabcontent active">
                            <h3>All</h3>
                            <div class="blog-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/cloud-award.png'); ?>" alt="Cloud Excellence Award" loading="lazy"></a></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/enterprise-world.png'); ?>" alt="Enterprise World Recognition" loading="lazy"></a></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/global-excellence.png'); ?>" alt="Global Excellence Award" loading="lazy"></a></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/iso.png'); ?>" alt="ISO Certification" loading="lazy"></a></div>
                                        </div>

                                        <div class="col-sm-3 col-md-3 col-lg-3 mt-4">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/iso_2013.png'); ?>" alt="ISO 27001 Security Certification" loading="lazy"></a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Awards" class="tabcontent">
                            <h3>Awards</h3>
                            <div class="blog-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/cloud-award.png'); ?>" alt="Cloud Excellence Award" loading="lazy"></a></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/enterprise-world.png'); ?>" alt="Enterprise World Recognition" loading="lazy"></a></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/global-excellence.png'); ?>" alt="Global Excellence Award" loading="lazy"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="Certifications" class="tabcontent">
                            <h3>Certifications</h3>
                            <div class="blog-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/iso.png'); ?>" alt="ISO Certification" loading="lazy"></a></div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3">
                                            <div class="award-content"><a href="javascript:void(0);"><img src="<?php echo asset('images/awards/iso_2013.png'); ?>" alt="ISO 27001 Security Certification" loading="lazy"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once 'includes/footer.php';
?>

<script src="<?php echo asset('js/blog-template.js'); ?>"></script>
<script src="<?php echo asset('js/chatbot.js'); ?>"></script>
