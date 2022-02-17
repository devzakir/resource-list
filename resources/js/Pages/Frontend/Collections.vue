<template>

    <Head title="Collections" />
    <Navbar />
        <div class="flex justify-center">
            <div class="flex flex-wrap ">
                <div class="w-1/4 p-3 " v-for="collection in collections" :key="collection.id">
                    <Link :href="route('collections.links', collection.slug)">
                        <div class="p-4 rounded-xl shadow-md bg-gray-600 text-white">
                            <h4 class="mb-2 text-lg font-semibold">{{ collection.name }}</h4>
                        </div>
                    </Link>
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
        props: ['collections', 'space'],
    }
</script>
