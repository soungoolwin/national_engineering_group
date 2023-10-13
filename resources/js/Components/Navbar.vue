<template>
    <!-- header section strats -->
    <header class="header_section">
        <div class="header_top">
            <div class="container-fluid header_top_container">
                <a class="navbar-brand" href="index.html"> NE<span>G</span> </a>

                <div class="contact_nav">
                    <a href="https://maps.app.goo.gl/YiAyu4j8v5QdMFbJ8">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span> Location </span>
                    </a>
                    <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span> Call : +95 9761008866 </span>
                    </a>
                    <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span> demo@gmail.com </span>
                    </a>
                </div>
                <div class="social_box">
                    <a href="">
                        <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i class="fa-brands fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="">
                        <i
                            class="fa-brands fa-instagram"
                            aria-hidden="true"
                        ></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="header_bottom navBg">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a
                        class="navbar-brand navbar_brand_mobile"
                        href="index.html"
                    >
                        NE<span>G</span>
                    </a>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class=""> </span>
                    </button>

                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <Link class="nav-link" href="/">Home</Link>
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/services"
                                    >Services</Link
                                >
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/projects"
                                    >Projects</Link
                                >
                            </li>
                            <li class="nav-item">
                                <Link class="nav-link" href="/contact"
                                    >Contact Us</Link
                                >
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style>
.navBg {
    background-color: #003471;
}
</style>
