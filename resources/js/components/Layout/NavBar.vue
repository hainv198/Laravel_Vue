<template>
    <header>
        <div class="v-search-wrapper">

            <div class="v-search-wrapper-mobile">
                <span><i class='bx bx-search' ></i></span>
                <input type="search" placeholder="search">
            </div>
        </div>
        <div class="search-wrapper">
            <label for="v-sidebar-toggle">
                <img v-bind:src="icon_close" alt="" width="44">
            </label>
            <span class="ti-search">
                 Request Detail
            </span>
        </div>
        <div class="dropdown item-button-navbar ">
            <div class="v-social-icons">
                <span><i class='bx bx-bell' ></i></span>
            </div>
            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="../image/cute.jpg" alt="" width="28" style="border-radius: 50%">
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "NavBar",
    data() {
        return {
            icon_close:require('../image/icon-close.svg')
        }
    }
}
</script>

<style scoped lang="scss">
    .btn-profile {
        border: none;
        padding: unset;
        background-color: white;

    }
    .dropdown-toggle::after {
        display: none;
    }
    a#dropdownMenuButton {
        background-color: white;
    }
</style>
