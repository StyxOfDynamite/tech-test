<template>
    <form>
        <div class="w-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="make">
                        Make
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" v-model="make" id="make" type="text" placeholder="Make">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="model">
                        Model
                    </label>
                    <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" v-model="model" id="model" type="text" placeholder="Model">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="registration">
                        Registration
                    </label>
                    <input class="shadow appearance-none border border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" v-model="registration" id="registration" type="text" placeholder="Registration">
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" @click="search" type="button">
                        Search
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;2020 Acme Corp. All rights reserved.
            </p>
        </div>
    </form>
    <ul class="divide-y divide-gray-200">
        <li v-for="result in results" :key="result.id" class="py-4 flex">
            <div class="ml-3">
                <p class="text-sm font-medium text-gray-500">{{ result.make }}</p>
                <p class="text-sm text-gray-500">{{ result.model }}</p>
                <p class="text-sm text-gray-500">{{ result.registration }}</p>
            </div>
        </li>
    </ul>
</template>
<script>
export default {
    data() {
        return {
            results: ''
        }
    },
    methods: {
        async search() {
            this.results = await axios.get('/api/search', {
                params: {
                    make: this.make,
                    model: this.model,
                    registration: this.registration
                }
            }).then(({data}) => data);
        }
    }
}
</script>
