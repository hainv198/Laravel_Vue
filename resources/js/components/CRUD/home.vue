<template>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">

                            <h2>Data</h2>
                            <button_model></button_model>
                        </div>
                        <form @submit.prevent="handleAddItem" >
                            <label>Name</label>
                            <!--  v-model -> lấy giá trị của ô input , ràng buộc dữ liệu-->
                            <input type="text" placeholder="Name" v-model="customer.name_customer"> <br>
                            <label>Phone</label>
                            <input type="text" placeholder="Phone" v-model="customer.phone_customer"> <br>
                            <label>Address</label>
                            <input type="text" placeholder="Address" v-model="customer.address_customer"> <br>
                            <label>Email</label>
                            <input type="text" placeholder="Email" v-model="customer.email_customer"> <br>
                            <label>city</label>
                            <input type="text" placeholder="city" v-model="customer.city_customer"> <br>
                            <button type="submit"
                                    class="btn btn-outline-primary"
                            >
                                Submit
                            </button>

                        </form>
                        <!--                    <div>
                                                <edit_detail
                                                    v-for="detail in customers"
                                                    v-bind:key="detail.id_customer"
                                                    v-bind:name="detail.name_customer"
                                                    v-bind:city="detail.city_customer"
                                                />
                                            </div>-->
                        <div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"
                                        v-bind:class="[{disabled: !pagination.prev_page}]">
                                        <a class="page-link"
                                           href="#"
                                           @click="fetchCustomer(pagination.prev_page)"
                                        >
                                            Previous
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                        >
                                            Page {{page}} ~  {{pagination.last_page}}
                                        </a>
                                    </li>
                                    <!--v-bind:class .... nếu không có trang trc hoặc sau thì sẽ mất ngược lại -->
                                    <li class="page-item"
                                        v-bind:class="[{disabled: !pagination.next_page}]"
                                    >
                                        <a class="page-link"
                                           href="#"
                                           @click="fetchCustomer(pagination.next_page)"
                                        >
                                            Next
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="card-body" v-for="item in customers" v-bind:key="item.id_customer">
                            <p>{{item.id_customer}}</p>
                            <p>{{item.name_customer}}</p>
                            <p>{{item.phone_customer}}</p>
                            <p>{{item.email_customer}}</p>
                            <p>{{item.city_customer}}</p>
                            <button class=" btn btn-danger"
                                    @click="handleDelete(item.id_customer)"
                            >
                                Delete
                            </button>
                            <button class="btn btn-outline-primary"
                                    @click="handleEdit(item)"
                            >
                                Edit
                            </button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Navbar from "./navbar.vue";
import EditDetail from './edit_detail.vue';
import ButtonModel from "../Atomic/Button";


export default {
    components: {
        'edit_detail' : EditDetail,
        'navbar' : Navbar,
        'button_model':ButtonModel,
    },
    data() {
        return {
            page:[],
            customers: [],
            customer: {
                id_customer:'',
                name_customer:'',
                phone_customer:'',
                address_customer:'',
                email_customer:'',
                city_customer:'',
            },
            id_customer:'',
            pagination:{},
            edit:false
        }

    },
    created() {
        this.fetchCustomer();

    },
    methods: {

        fetchCustomer:function(url) {
            console.log('.... click')
            const vm = this;
            url = url || 'http://127.0.0.1:8000/api/customer'
            console.log("---> " + url)
            /*fetch(url)
                .then(async response => {
                    const data = await response.json();
                    console.log(data)
                    // check for error response
                    if (!response.ok) {
                        // get error message from body or default to response statusText
                        const error = (data && data.message) || response.statusText;
                        return Promise.reject(error);
                    }
                    console.log('---> 56' + data.data[0])
                    this.customers = data;

                })
                .catch(error => {
                    this.errorMessage = error;
                    console.error("There was an error!", error);
                });*/
            fetch(url)
                .then(res => res.json())
                .then(res => {
                    console.log(res.data)
                    this.customers = res.data
                    this.page = res.meta.current_page
                    console.log('1223-->>> ' + res.meta.current_page)
                    vm.makePagination(res.meta, res.links)
                })
                .catch(err => alert(err))
        },
        makePagination:function (meta, links) {
            let pagination_detail = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page: links.next,
                prev_page: links.prev,
            }
            this.pagination = pagination_detail;
        },
        handleDelete:function (id) {
            if (confirm("ban muon xoa")) {
                console.log('delete id' + "" + id)
                axios.delete(`http://127.0.0.1:8000/api/customer/${id}`)
                    .then(res => {
                        alert('Remove Success !!!')
                        this.fetchCustomer();

                    })
                    .catch(err => alert(err));

            }

        },

        handleAddItem:function () {
            console.log('add ->>>> success')
            if (this.edit === false) {
                // append chèn vào
                let formData = new FormData();
                formData.append('name_customer' , this.customer.name_customer)
                formData.append('phone_customer', this.customer.phone_customer)
                formData.append('address_customer', this.customer.address_customer)
                formData.append('email_customer', this.customer.email_customer)
                formData.append('city_customer', this.customer.city_customer)
                axios.post('api/customer/', formData)
                    .then(res => {
                        alert('Add new item success !!!!')
                        this.customer.name_customer = "";
                        this.customer.phone_customer = "";
                        this.customer.address_customer = '';
                        this.customer.email_customer = "";
                        this.customer.city_customer = "";
                        this.fetchCustomer();
                    })
                    .catch(err => {
                        alert(err)
                    })
            } else {
                // edit item
                axios.put(`api/customer/${this.customer.id_customer}`, {
                    name_customer:this.customer.name_customer,
                    phone_customer:this.customer.phone_customer,
                    address_customer:this.customer.address_customer,
                    email_customer:this.customer.email_customer,
                    city_customer:this.customer.city_customer,
                })
                    .then(res => {
                        alert('Back up item success !!!!')
                        this.customer.name_customer = "";
                        this.customer.phone_customer = "";
                        this.customer.address_customer = '';
                        this.customer.email_customer = "";
                        this.customer.city_customer = "";
                        this.fetchCustomer();
                    })
                    .catch(err => {alert(err)})
            }
        },
        handleEdit:function (item) {

            this.edit = true
            console.log(' ---> edit @@'+ ' ' + item.id_customer);
            this.customer.id_customer = item.id_customer;
            this.customer.name_customer = item.name_customer;
            this.customer.address_customer = item.address_customer;
            this.customer.phone_customer = item.phone_customer;
            this.customer.email_customer = item.email_customer;
            this.customer.city_customer = item.city_customer;
        },
    }
}
</script>
