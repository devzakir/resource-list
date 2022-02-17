<template>
    <Head title="Links" />
    <Navbar />
        <div class="flex justify-center">
            <div class="flex flex-wrap ">
                <div class="w-full p-3 " v-for="link in links" :key="link.id">
                    <div class="p-4 rounded-xl shadow-md bg-gray-600 text-white">
                        <h4 class="mb-2 text-lg font-semibold">{{ link.title }}</h4>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    import Navbar from '../../Components/Frontend/Navbar.vue'

    export default {
        components: {
            Navbar,
        },
        props: ['collection', 'links'],
    }
</script>
