<template>
    <section class="portfolio_section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Work Portfolio</h2>
            </div>

            <Splide :options="{ rewind: true }" aria-label="My Favorite Images">
                <SplideSlide v-for="project in projects" :key="project.id">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <div class="image-container">
                                    <img
                                        :src="project.image_url"
                                        alt="Sample 1"
                                        class="image"
                                    />
                                    <div
                                        class="overlay"
                                        @click="openModal = true"
                                    >
                                        <p class="see-more">See More</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <p class="text">
                                    <i class="fa-solid fa-location-dot mr-3"></i
                                    >{{ project.name }}
                                </p>
                                <p>
                                    <i class="fa-regular fa-calendar mr-3"></i
                                    >{{ project.completed_date }}
                                </p>
                                <p>
                                    <i class="fa-solid fa-angle-right mr-3"></i>
                                    {{ project.description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </SplideSlide>
            </Splide>
        </div>
        <div class="modal-background" v-if="openModal">
            <div class="modal-container">
                <div class="modal-content">
                    <h2>Project Photos</h2>
                    <Splide
                        :options="{ rewind: true }"
                        aria-label="My Favorite Images"
                    >
                        <SplideSlide>
                            <img
                                src="../../../img/p1.jpg"
                                alt="Sample 1"
                                class="modalImage"
                            />
                        </SplideSlide>
                        <SplideSlide>
                            <img
                                src="../../../img/p2.jpg"
                                alt="Sample 2"
                                class="modalImage"
                            />
                        </SplideSlide>
                    </Splide>
                    <button @click="openModal = false" class="btn btn-danger">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import { ref } from "vue";

export default {
    props: ["projects"],
    components: {
        Splide,
        SplideSlide,
    },

    setup() {
        let openModal = ref(false);

        return { openModal };
    },
};
</script>

<style>
.image {
    width: 70%;
    height: 70%;
    max-width: 100%;
    height: auto;
    margin: auto;
    transition: filter 0.3s ease-in-out;
}
.modalImage {
    widows: 70%;
    height: 70%;
    max-width: 90%;
    margin: auto;
    height: auto;
}
/* CSS for the image container and overlay */
.image-container {
    position: relative;
    overflow: hidden;
    cursor: pointer; /* Show pointer cursor on hover */
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
    color: #fff;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    display: flex;
    justify-content: center;
    align-items: center;
}

.see-more {
    display: none;
}

/* Show the overlay and blur the image on hover */
.image-container:hover .image {
    filter: blur(5px); /* Add blur effect to the image */
}

.image-container:hover .overlay {
    opacity: 1; /* Show the overlay */
}

.image-container:hover .see-more {
    display: block; /* Show "See More" text on hover */
}

.text {
    color: white;
}

.modal-background {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(5px); /* Adds the blur effect */
    z-index: 999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-container {
    background: white;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.modal-content {
    text-align: center;
    color: black;
}
</style>
