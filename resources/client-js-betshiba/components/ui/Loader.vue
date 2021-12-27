<template>
    <div class="loaderContainer">
			<template v-if="theme === 'dark'">
                <img style="height: 40px;" src="/img/misc/loading.gif">
            </template>
            <template v-else>
                <img style="height: 40px;" src="/img/misc/loader-white.gif">
			</template>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
	export default {
        computed: {
            ...mapGetters(['theme'])
        },
        data() {
            return {
                expand: false
            }
        }
    }
</script>

<style lang="scss">
    @import "resources/sass/variables";


</style>
