<template>
    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our <span>Services</span></h2>
            </div>
            <div class="row">
                <div
                    class="col-sm-6 col-md-4"
                    v-for="service in services"
                    :key="service.id"
                >
                    <div class="box">
                        <div class="img-box">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="#053574"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"
                                />
                            </svg>
                        </div>
                        <div class="detail-box">
                            <h5>{{ service.title }}</h5>
                            <p>
                                {{ service.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <Link href="/services">Read More</Link>
            </div>
        </div>
    </section>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    props: ["services"],
    components: {
        Link,
    },
    setup() {},
};
</script>

<style></style>
