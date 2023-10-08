<template>
    <HeroSection></HeroSection>

    <!-- about section -->
    <AboutSection></AboutSection>

    <!-- portfolio section -->
    <PortfolioSection></PortfolioSection>

    <!-- service section -->
    <ServiceSection></ServiceSection>

    <!-- contact section -->
    <ContactSection></ContactSection>

    <!-- info section -->

    <InfoSection></InfoSection>
</template>

<script>
import InfoSection from "../Components/Sections/InfoSection.vue";
import ContactSection from "../Components/Sections/ContactSection.vue";
import ServiceSection from "../Components/Sections/ServiceSection.vue";
import PortfolioSection from "../Components/Sections/PortfolioSection.vue";
import AboutSection from "../Components/Sections/AboutSection.vue";
import HeroSection from "../Components/Sections/HeroSection.vue";
export default {
    components: {
        InfoSection,
        ContactSection,
        ServiceSection,
        PortfolioSection,
        AboutSection,
        HeroSection,
    },
};
</script>

<style></style>
