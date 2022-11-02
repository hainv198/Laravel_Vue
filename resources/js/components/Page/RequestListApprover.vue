<template>
    <section class="table-template">
        <div class="container-fulid list-request">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <nav v-bind:class="active" v-on:click.prevent>
                        <router-link to="" class="home" v-on:click="makeActive('home')">Processing(10)</router-link>
                        <router-link to="" class="projects" v-on:click="makeActive('projects')">Approved(50)</router-link>
                        <a href="#" class="services" v-on:click="makeActive('services')">Rejected(50)</a>
                    </nav>
                </div>
            </div>
            <hr>
            <ProcessingRequset/>
        </div>

    </section>
</template>

<script>
import ProcessingRequset from "./ProcessingRequest";
export default {
    name: "RequestListApprover",
    components: {ProcessingRequset},
    data() {
        return {
            active: "home",
            creator: '',
            status:''
        }

    },
    methods: {
        makeActive: function (item) {
            this.active = item;
        },
    },
}
</script>

<style scoped>

</style>
