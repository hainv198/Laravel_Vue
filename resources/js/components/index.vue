<template>
    <div class="master">
        <input type="checkbox" id="v-sidebar-toggle">
        <SideBar/>
        <div class="v-main-container">
            <NavBar/>
            <router-view :key="$route.fullPath"></router-view>
        </div>
    </div>
</template>

<script>
import MainPage from  "./Page/ViewTemplate.vue"
import SideBar from "./Layout/SideBar";
import NavBar from "./Layout/NavBar";
export default {
    name: "home-page",
    components:{NavBar, SideBar, MainPage},
    data() {
        return {
            image_logo: require('./image/Logo_app_service_E-Approval.svg'),
            active: 'home',
        }
    }
}
</script>

<style scoped lang="scss">

</style>
