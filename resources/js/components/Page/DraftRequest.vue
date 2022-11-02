<template>
    <div class="list-request-detail-user">
        <div class="row">
            <div class="col-sm-6 col-md-8 col-lg-8">
                <div class="search_template">
                    <input type="text" placeholder="Enter template name">
                    <i class='bx bx-search-alt icon-search'></i>
                </div>
            </div>
            <div class="search-date col-sm-6 col-md-4 col-lg-4">
                <input type="date">
                <div class="icon-date"></div>
                <input type="date">
            </div>
        </div>
        <div class=" row mt-5">
            <div class="table-template-pc col-md-12">
                <table class="table  table-responsive class-table-view-template " style="display:inline-table;">
                    <thead class="thead-light">
                    <tr>
                        <th class=" border table-secondary">
                            <button v-on:click="sort_title = !sort_title" class="sort-button">
                                <span>Approval Title</span>
                                <i v-if="sort_title" class='bx bx-sort-down'></i>
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
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="template-name">De nghi tam ung cong tac</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <div class="dropdown ">
                                <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenterDelete">
                                        <i class='mr-1 bx bxs-trash'></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Approval Template</h5>
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
                    </tr>
                    <tr>
                        <td class="template-name">De nghi tam ung cong tac</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <div class="dropdown ">
                                <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenterDelete">
                                        <i class='mr-1 bx bxs-trash'></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Approval Template</h5>
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
                    </tr>
                    <tr>
                        <td class="template-name">De nghi tam ung cong tac</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <div class="dropdown ">
                                <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenterDelete">
                                        <i class='mr-1 bx bxs-trash'></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Approval Template</h5>
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
                    </tr>
                    <tr>
                        <td class="template-name">De nghi tam ung cong tac</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <div class="dropdown ">
                                <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenterDelete">
                                        <i class='mr-1 bx bxs-trash'></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Approval Template</h5>
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
                    </tr>
                    <tr>
                        <td class="template-name">De nghi tam ung cong tac</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <div class="dropdown ">
                                <a class="btn-action  dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-dots-vertical-rounded'></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-show-alt'></i> View</a>
                                    <a class="dropdown-item" href="#"><i class='mr-1 bx bx-edit'></i> Edit</a>
                                    <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenterDelete">
                                        <i class='mr-1 bx bxs-trash'></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item"><i class='mr-1 bx bx-copy-alt'></i> Duplicate</a>
                                </div>
                            </div>
                        </td>
                        <div class="modal fade" id="exampleModalCenterDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Delete Approval Template</h5>
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
                    </tr>

                    </tbody>
                </table>
                <nav aria-label="Page navigation example" class="justify-content-end">
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
</template>

<script>
export default {
    name: "DraftRequest",
    data() {
        return {
            sort_title:true,
            sort_date:true,
        }
    }
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
.status-public {
    color: #02de5d;
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

</style>

