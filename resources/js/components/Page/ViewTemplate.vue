<template>
        <section class="table-template">
            <div class="container-fulid">
                <div class="row justify-content-sm-between flex-nowrap">
                    <div class="col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center ">
                        <h5 class="m-0">List Of E-approval Template</h5>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 d-flex justify-content-end">
                        <router-link to="create-new-template" class="button_create"> Create Template</router-link>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-md-7 col-lg-7">
                        <div class="search_template">
                            <input type="text" placeholder="Enter template name">
                            <i class='bx bx-search-alt icon-search'></i>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="search_template">
                            <input type="text" placeholder="Creator">
                            <i class='bx bx-user'></i>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2 col-lg-2">
                        <div class="select-dropdown">
                            <select :name="name" :id="id" ref="input" v-model="value">
                                <option v-for="option in options" :value="option.value">
                                    {{ option.text }}
                                </option>
                            </select>
                            <div class="select-box" v-on:click="status = !status">
                                <span class="value" @click="toggleFocus">
                                    {{ [ null, '' ].includes(value) ? placeholder : findText(value)}}
                                </span>
                                <span class="toggle" >
                                    <i v-if="status" class='bx bx-chevron-down' ></i>
                                    <i v-else class='bx bx-chevron-up'></i>
                                </span>
                            </div>
                            <div class="options" v-if="focused">
                                <ul>
                                    <li
                                        v-for="option in options"
                                        @click="selectOption(option.value)"
                                        :data-value="option.value"
                                        :class="{selected: value === option.value}"
                                    >
                                        {{ option.text }}
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <table class="table  table-responsive class-table-view-template " style="display:inline-table;">
                            <thead class="thead-light">
                                <tr>
                                    <th class=" border ">
                                        <button v-on:click="sort_name = !sort_name" class="sort-button">
                                            <span>Template Name</span>
                                            <i v-if="sort_name" class='bx bx-sort-down'></i>
                                            <i v-else class='bx bx-sort-up' ></i>
                                        </button>
                                    </th>
                                    <th class="text-center border table-secondary">
                                        <button v-on:click="sort_creator = !sort_creator" class="sort-button">
                                            <span>Creator</span>
                                            <i v-if="sort_creator" class='bx bx-sort-down'></i>
                                            <i v-else class='bx bx-sort-up' ></i>
                                        </button>
                                    </th>
                                    <th class="text-center border table-secondary">
                                        <button v-on:click="sort_date = !sort_date" class="sort-button">
                                            <span>Last modified date</span>
                                            <i v-if="sort_date" class='bx bx-sort-down'></i>
                                            <i v-else class='bx bx-sort-up' ></i>
                                        </button>
                                    </th>
                                    <th class="text-center border table-secondary">

                                        <button v-on:click="sort_date = !sort_date" class="sort-button">
                                            <span>Status</span>
                                        </button>
                                    </th>
                                    <th class="text-center border table-secondary">

                                        <button v-on:click="sort_date = !sort_date" class="sort-button">
                                            <span>Action</span>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <router-link to="/template-view" class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</router-link>
                                                <router-link to="/edit-template" class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</router-link>
                                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                                    <i class='mr-1 bx bxs-trash'></i>
                                                    Delete
                                                </a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>
                                    </td>
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title " id="exampleModalLongTitle">Delete Approval Template</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body" style="color: #ee0802">
                                                    <span style="font-size: 14px">
                                                        Are you sure you want to delete this item ?
                                                    </span>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                        <span style="font-size: 14px">
                                                            Cancel
                                                        </span>
                                                    </button>
                                                    <button type="button" class="btn btn-primary">
                                                        <span style="font-size: 14px">
                                                            Ok
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bxs-trash'></i> Delete</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bxs-trash'></i> Delete</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bxs-trash'></i> Delete</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bxs-trash'></i> Delete</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bxs-trash'></i> Delete</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="template-name">De nghi tam ung cong tac</td>
                                    <td>Hai NV 198</td>
                                    <td>1/1/2100</td>
                                    <td class="status-public"><i class='bx bxs-circle'></i> Public</td>
                                    <td>
                                        <div class="dropdown ">
                                            <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class='bx bx-dots-vertical-rounded'></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bxs-trash'></i> Delete</a>
                                                <a class="dropdown-item" href="#"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <nav class="justify-content-end" aria-label="Page navigation example">
                            <ul class="pagination justify-content-end">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">10</a></li>

                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

</template>

<script>
import Button from "../Atomic/Button";
export default {
    name: "category",
    components: {Button},
    data() {
        return {
            creator: '',
            sort_name:true,
            sort_creator:true,
            sort_date:true,
            status:true,
            id: "test",
            name: "test",
            placeholder: "Status",
            useRealInput: false,
            value: "",
            focused: false,
            options: [
                { value: 1, text: "Option 1" },
                { value: 2, text: "Option 2" },
                { value: 3, text: "Option 3" },
            ],
        }
    },
    methods: {
        toggleFocus() {
            if (this.useRealInput) {
                this.$refs.input.focus();
            } else {
                this.focused = !this.focused;
            }
        },
        selectOption(value) {
            if (value !== this.value) {
                this.value = value;
                this.$refs.input.value = value;
                this.toggleFocus();
            }
        },
        findText(value) {
            const option = this.options.filter((option) => {
                if (option.value === value) return true;
            })[0];
            return option === undefined ? "" : option.text;
        },
    },
}
</script>

<style scoped lang="scss">

.dropdown-menu {
    position: absolute;
    will-change: transform;
    top: 11px !important;
    left: -125px !important;
    transform: translate3d(37px, 22px, 0px);
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.dropdown-toggle::after {
    display: none;
}
.dropdown-item {
    padding: 0.45rem 1.5rem;
}
nav {
    display: block!important;
}
.status-public {
    color: #00D684;
    i {
        font-size: 10px;
    }
}
td.template-name {
    color: #0b8ffc;
}



.vs-select-content {
    width: 100%;
    max-width: none;
}
/*.select-dropdown {
    border: 1px solid black;
    position: relative;

    select {
        opacity: 0;
        position: absolute;
        top: -9999px;
    }

    .select-box {
        padding: 1rem;
        display: flex;

        .value {
            flex: 1;
        }
    }

    .options {
        border-top: 2px solid black;

        ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        li {
            padding: .5rem;
            border-bottom: 1px solid grey;
            cursor: pointer;

            &:last-of-type {
                border-bottom: none;
            }

            &:hover, &.selected {
                background: #e7e7e7;
            }

            &.disabled, &.selected {
                cursor: not-allowed;
            }

            &.disabled {
                background: lighten(#e7e7e7, 2);
                color: grey;
            }
        }
    }
}*/


</style>
