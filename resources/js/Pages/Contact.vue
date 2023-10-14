<template>
    <ContactSection :categories="categories" />
</template>

<script>
import ContactSection from "../Components/Sections/ContactSection.vue";
export default {
    props: ["categories"],
    components: { ContactSection },
};
</script>

<style></style>
