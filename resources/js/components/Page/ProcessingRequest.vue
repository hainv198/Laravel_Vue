<template>
    <div class="list-request-approval">
        <div class="row">
            <div class="header-search-processing col-sm-6 col-md-8 col-lg-8">
                <div class="search_template">
                    <input type="text" placeholder="Enter template name">
                    <i class='bx bx-search-alt icon-search-one '></i>
                </div>
                <div class="search_template">
                    <input type="text" placeholder="Creator">
                    <i class='bx bx-user icon-search-two'></i>
                </div>
            </div>
            <div class="search-date col-sm-6 col-md-4 col-lg-4">
                <input type="date">
                <div class="icon-date"></div>
                <input type="date">
            </div>
            
        </div>

        <div class="row mt-5">
                <div class="table-template-pc col-md-12">
                <table class="table table-responsive class-table-view-template " style="display:inline-table;">
                    <thead class="thead-light">
                    <tr>
                        <th class=" border table-secondary">Approval Title</th>
                        <th class="text-center border table-secondary">Creator</th>
                        <th class="text-center border table-secondary">Action</th>
                        <th class="text-center border table-secondary">Action</th>
                        <th class="text-center border table-secondary">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr >
                        <td class="template-name">
                            <router-link to="/request-detail">
                                De nghi tam ung cong tac
                            </router-link>

                        </td>
                        <td class="text-center">Nguyen Van Hai</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <i class="mr-1 bx bx-show-alt"></i>
                        </td>
                    </tr>
                    <tr >
                        <td class="template-name">
                            <router-link to="/request-detail">
                                De nghi tam ung cong tac
                            </router-link>

                        </td>
                        <td class="text-center">Nguyen Van Hai</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <i class="mr-1 bx bx-show-alt"></i>
                        </td>
                    </tr>
                    <tr >
                        <td class="template-name">
                            <router-link to="/request-detail">
                                De nghi tam ung cong tac
                            </router-link>

                        </td>
                        <td class="text-center">Nguyen Van Hai</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <i class="mr-1 bx bx-show-alt"></i>
                        </td>
                    </tr>
                    <tr >
                        <td class="template-name">
                            <router-link to="/request-detail">
                                De nghi tam ung cong tac
                            </router-link>

                        </td>
                        <td class="text-center">Nguyen Van Hai</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <i class="mr-1 bx bx-show-alt"></i>
                        </td>
                    </tr>
                    <tr >
                        <td class="template-name">
                            <router-link to="/request-detail">
                                De nghi tam ung cong tac
                            </router-link>

                        </td>
                        <td class="text-center">Nguyen Van Hai</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">1/1/2100</td>
                        <td class="text-center">
                            <i class="mr-1 bx bx-show-alt"></i>
                        </td>
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
import Button from "../Atomic/Button";
export default {
    name: "ProcessingRequset",
    components: {Button}
}
</script>

<style scoped>

</style>
