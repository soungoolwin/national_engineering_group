<template>
    <div class="dropdown">
        <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            data-toggle="dropdown"
            aria-expanded="false"
        >
            {{ selectedCategory ? selectedCategory : currentSubNav }}
        </button>
        <div class="dropdown-menu">
            <div v-for="category in categories" :key="category.id">
                <button
                    class="dropdown-item"
                    @click="filterBy(category.id, category.name)"
                >
                    {{ category.name }}
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["currentSubNav", "categories"],
    data() {
        return {
            selectedCategory: null,
        };
    },
    methods: {
        filterBy(id, name) {
            this.$emit("filteredValue", id);
            this.selectedCategory = name;
        },
    },
    mounted() {
        if (this.categories.length > 0) {
            this.selectedCategory = this.categories[0].name;
        }
    },
};
</script>

<style>
.all {
    background-color: #21c55d;
}
</style>
