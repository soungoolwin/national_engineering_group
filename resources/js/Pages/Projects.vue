<template>
    <PortfolioSection :projects="projects" :categories="categories" />
</template>

<script>
import PortfolioSection from "../Components/Sections/PortfolioSection.vue";
export default {
    props: ["projects", "categories"],
    components: { PortfolioSection },
};
</script>

<style></style>
