<template>
    <div>
        <Header />
        <main class="mt-lg-0">
            <slot></slot>
        </main>
        <Footer />
    </div>
</template>

<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";

export default {
    name: "Layout",
    components: {
        Header,
        Footer,
    },
};
</script>
