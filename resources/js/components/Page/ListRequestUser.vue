<template>
    <section class="table-template">
        <div class="container-fulid list-request">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <nav v-bind:class="active" v-on:click.prevent>
                        <router-link to="request-list/draft" class="home" v-on:click="makeActive('home')">Draft(12)</router-link>
                        <router-link to="request-list/profile" class="projects" v-on:click="makeActive('projects')">Processing(10)</router-link>
                        <a href="#" class="services" v-on:click="makeActive('services')">Approved(50)</a>
                        <a href="#" class="contact" v-on:click="makeActive('contact')">Rejected(50)</a>
                        <a href="#" class="withdrawn" v-on:click="makeActive('withdrawn')">Withdrawn(50)</a>
                    </nav>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-end">
                    <div class="button-create-new">
                        <a data-toggle="modal" data-target="#exampleModalCenter" >
                            Create request
                        </a>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="exampleModalLongTitle">Template</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <span class="description-model">Approval Title</span>
                                <span class="err-message-model">*</span>
                                <div class="center con-selects mt-2">
                                    <vs-select
                                        filter
                                        placeholder="Creator"
                                        v-model="creator"
                                    >
                                        <vs-option label="Vuesax" value="1">
                                            Vuesax
                                        </vs-option>
                                        <vs-option label="Vue" value="2">
                                            Vue
                                        </vs-option>
                                        <vs-option label="Javascript" value="3">
                                            Javascript
                                        </vs-option>
                                        <vs-option label="Sass" value="4">
                                            Sass
                                        </vs-option>
                                        <vs-option label="Typescript" value="5">
                                            Typescript
                                        </vs-option>
                                        <vs-option label="Webpack" value="6">
                                            Webpack
                                        </vs-option>
                                        <vs-option label="Nodejs" value="7">
                                            Nodejs
                                        </vs-option>
                                    </vs-select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <DraftRequest/>
        </div>
        <div class="list-request-mobile">
            <ul class="tab-menu-mobile">
                <li class="list-mobile">
                    <a class="router-moblie" href="">
                        <i class='bx bx-notepad'></i>
                        <span class="message_mobile">12</span>
                    </a>
                </li>
                <li class="list-mobile">

                    <a class="router-moblie" href="">
                        <i class='bx bx-sidebar'></i>
                        <span class="message_mobile">12</span>
                    </a>
                </li>
                <li class="list-mobile">

                    <a class="router-moblie" href="">
                        <i class='bx bx-paper-plane'></i>
                        <span class="message_mobile">12</span>
                    </a>
                </li>
                <li class="list-mobile">
                    <a class="router-moblie" href="">
                        <i class='bx bx-user-x'></i>
                        <span class="message_mobile">12</span>

                    </a>
                </li>
                <li class="list-mobile">
                    <a class="router-moblie" href="">
                        <i class='bx bx-calendar-edit'></i>
                        <span class="message_mobile">12</span>
                    </a>
                </li>
                <li class="list-mobile">

                    <a class="router-moblie" href="">
                        <i class='bx bx-list-plus' ></i>
                        <span class="message_mobile">43</span>
                    </a>

                </li>
            </ul>
            <hr>
            <p>Filter..</p>
            <div class="filter-date-mobile">
                <input type="date">
                <input type="date">
            </div>
            <div class="table-template-mobile">
                <div class="card-list-request">
                    <h5>Approval Title</h5>
                    <p>Đề nghị tạm ứng công tác</p>
                    <p>30/12/2022</p>
                </div>
                <div class="active-mobile">
                    <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                        <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                        <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#">
                            <i class='mr-1 bx bxs-trash'></i>
                            Delete
                        </a>
                        <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                    </div>
                    <!--Model handle-->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body" style="color: #ee0802">
                                        <span>
                                            Are you sure you want to delete this item ?
                                        </span>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <router-view/>
    </section>
</template>

<script>
import DraftRequest from './DraftRequest'
export default {
    name: "ListRequestUser",
    components:{DraftRequest},

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
