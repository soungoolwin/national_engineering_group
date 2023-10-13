<template>
    <Navbar />
    <slot />
    <InfoSection />
</template>

<script>
import InfoSection from "../Components/Sections/InfoSection.vue";
import Navbar from "../Components/Navbar.vue";

export default {
    components: {
        InfoSection,
        Navbar,
    },
};
</script>

<style></style>
