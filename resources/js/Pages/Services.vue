<template>
    <ServiceSection :services="services" />
</template>

<script>
import ServiceSection from "../Components/Sections/ServiceSection.vue";
export default {
    components: { ServiceSection },
    props: ["services"],
};
</script>

<style></style>
