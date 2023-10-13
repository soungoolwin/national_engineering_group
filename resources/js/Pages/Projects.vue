<template>
    <PortfolioSection :projects="projects" />
</template>

<script>
import PortfolioSection from "../Components/Sections/PortfolioSection.vue";
export default {
    props: ["projects"],
    components: { PortfolioSection },
};
</script>

<style></style>
