<template>
    <section class="portfolio_section py-5">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our Work Portfolio</h2>
            </div>
            <div class="filterNav">
                <FilterNav
                    :categories="categories"
                    @filteredValue="filteredValue"
                    :currentSubNav="currentSubNav"
                />
            </div>

            <Splide :options="{ rewind: true }" aria-label="My Favorite Images">
                <SplideSlide
                    v-for="project in filteredProjects"
                    :key="project.id"
                >
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
                                        @click="openModal(project.id)"
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
            <div class="modal-background" v-if="isModalOpen">
                <div class="modal-container">
                    <div class="modal-content">
                        <Splide
                            :options="{ rewind: true }"
                            aria-label="My Favorite Images"
                        >
                            <SplideSlide
                                v-for="image in images"
                                :key="image.id"
                            >
                                <h2>Site Photos</h2>
                                <div v-if="loading" class="spinner"></div>
                                <img
                                    :src="image.image_url"
                                    alt="Sample 1"
                                    class="modalImage"
                                    @load="imageLoaded"
                                />
                            </SplideSlide>
                        </Splide>
                        <button
                            @click="isModalOpen = false"
                            class="btn btn-danger"
                        >
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import FilterNav from "../FilterNav.vue";
import { Splide, SplideSlide } from "@splidejs/vue-splide";
import { computed, onMounted, ref } from "vue";

export default {
    props: ["projects", "categories"],
    components: {
        FilterNav,
        Splide,
        SplideSlide,
    },

    setup(props) {
        let isModalOpen = ref(false);
        let projects = ref(props.projects);
        let images = ref([]);
        const loading = ref(true);
        const loadedImagesCount = ref(0);
        let currentSubNav = ref("");

        onMounted(() => {
            if (props.categories.length > 0) {
                currentSubNav.value = props.categories[0].id;
            }
        });
        let openModal = (projectId) => {
            let project = projects.value.find(
                (project) => project.id === projectId
            );
            if (project) {
                images.value = project.images;
                isModalOpen.value = true;
                loadedImagesCount.value = 0;
            }
        };
        const imageLoaded = () => {
            loadedImagesCount.value++;
            if (loadedImagesCount.value === images.value.length) {
                loading.value = false;
            }
        };
        let filteredValue = (value) => {
            currentSubNav.value = value;
        };
        const filteredProjects = computed(() => {
            return projects.value.filter(
                (project) => project.category.id === currentSubNav.value
            );
        });

        return {
            openModal,
            isModalOpen,
            images,
            loading,
            imageLoaded,
            filteredValue,
            filteredProjects,
            currentSubNav,
        };
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

.spinner {
    border: 4px solid rgba(255, 255, 255, 0.3);
    border-radius: 50%;
    border-top: 4px solid #003471;
    width: 40px;
    height: 40px;
    animation: spin 2s linear infinite;
    margin: 0 auto;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.filterNav {
    width: 80%;
    margin: auto;
    text-align: center;
}
</style>
