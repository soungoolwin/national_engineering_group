<template>
    <HeroSection></HeroSection>

    <!-- about section -->
    <AboutSection></AboutSection>

    <!-- portfolio section -->
    <PortfolioSection :projects="projects" :categories="categories" />

    <!-- service section -->
    <ServiceSection :services="services"></ServiceSection>
</template>

<script>
import Layout from "../Layouts/Layout.vue";

import ContactSection from "../Components/Sections/ContactSection.vue";
import ServiceSection from "../Components/Sections/ServiceSection.vue";
import PortfolioSection from "../Components/Sections/PortfolioSection.vue";
import AboutSection from "../Components/Sections/AboutSection.vue";
import HeroSection from "../Components/Sections/HeroSection.vue";
export default {
    components: {
        Layout,

        ContactSection,
        ServiceSection,
        PortfolioSection,
        AboutSection,
        HeroSection,
    },
    props: ["services", "projects", "images", "categories"],
};
</script>

<style></style>
