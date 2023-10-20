<template>
    <section class="info_section">
        <div class="info_container layout_padding2">
            <div class="container">
                <div class="info_logo">
                    <a class="navbar-brand" href="index.html">
                        NE<span>G</span>
                    </a>
                </div>
                <div class="info_main">
                    <div class="row">
                        <div class="col-md-4 col-lg-2">
                            <div class="info_link-box">
                                <h5>Useful Link</h5>
                                <ul>
                                    <li class="nav-item">
                                        <Link class="nav-link" href="/"
                                            >Home</Link
                                        >
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
                        </div>
                        <div class="col-md-3">
                            <h5>Welding</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscinaliquaLoreadipiscing
                            </p>
                        </div>
                        <div class="col-md-3 mx-auto">
                            <h5>social media</h5>
                            <div class="social_box">
                                <a href="#">
                                    <i
                                        class="fa-brands fa-facebook"
                                        aria-hidden="true"
                                    ></i>
                                </a>
                                <a href="#">
                                    <i
                                        class="fa-brands fa-twitter"
                                        aria-hidden="true"
                                    ></i>
                                </a>
                                <a href="#">
                                    <i
                                        class="fa-brands fa-linkedin"
                                        aria-hidden="true"
                                    ></i>
                                </a>
                                <a href="#">
                                    <i
                                        class="fa-brands fa-instagram"
                                        aria-hidden="true"
                                    ></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h5>Our welding center</h5>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscinaliquaLoreadipiscing
                            </p>
                        </div>
                    </div>
                </div>
                <div class="info_bottom">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="info_contact">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a
                                            href="https://maps.app.goo.gl/YiAyu4j8v5QdMFbJ8"
                                            class="link-box"
                                        >
                                            <i
                                                class="fa fa-map-marker"
                                                aria-hidden="true"
                                            ></i>
                                            <span> Location </span>
                                        </a>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#" class="link-box">
                                            <i
                                                class="fa fa-phone"
                                                aria-hidden="true"
                                            ></i>
                                            <span> Call +95 9761008866 </span>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="link-box">
                                            <i
                                                class="fa fa-envelope"
                                                aria-hidden="true"
                                            ></i>
                                            <span> demo@gmail.com </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
};
</script>

<style></style>
