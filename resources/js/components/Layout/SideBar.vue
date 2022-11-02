
         <template>
            <div class="v-sidebar">
                <div class="v-sidebar-header">
                    <h3 class="v-brand">
                        <span class="header-logo">
                            <img v-bind:src="image_logo" width="35.21" alt="">
                            <span class="title-logo">
                                E-Approval
                            </span>
                            <span class="title-info">@hainv198dssds</span>
                        </span>

                    </h3>
                    <img class="logo_sidebar" v-bind:src="image_logo" width="35.21" alt="">
<!--                    <label for="v-sidebar-toggle" class="v-ti-menu-alt"><i class='bx bx-slider'></i></label>-->
                </div>
                <!--    sidebar meunu -->
                <div class="v-sidebar-menu">
                    <ul>
                        <li>
                            <router-link to="/">
                                <span>
                                    <img v-bind:src="image_sidebar_1" alt="" width="28">
                                </span>
                                <span>Template</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/request-list">
                                <span>
                                    <img v-bind:src="image_sidebar_2" alt="" width="28">
                                </span>
                                <span>My Request</span>
                            </router-link>
                        </li>
                        <li>
                            <router-link to="/request-list-approver">
                                <span>
                                    <img v-bind:src="image_sidebar_3" alt="" width="28">
                                </span>
                                <span>Approval</span>
                            </router-link>
                        </li>

                        <li>
                            <router-link to="/setting">
                                <span>
                                    <img v-bind:src="image_sidebar_4" alt="" width="28">
                                </span>
                                <span>Setting</span>
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
    </template>

    <style scoped lang="scss">
        .sidebar_home {
            /*background-color: #1d643b;*/
            border-radius: unset;
            max-width: 230px;
        }
        .button_logo {
            opacity: 1!important;
            margin-top: 10px;
            color:#222;

            h6 {
                margin: unset ;
                font-size: 1.3rem;
            }
            span {
                font-size: 11px;
                color:#222222;
                font-weight: lighter;
            }
        }
    </style>

<script>

export default {
    name: "SideBar",
    data() {
        return {
            image_logo: require('../image/Logo_app_service_E-Approval.svg'),
            image_sidebar_1: require('../image/Frame.svg'),
            image_sidebar_2: require('../image/img_sidebar_2.svg'),
            image_sidebar_3: require('../image/img_sidebar_3.svg'),
            image_sidebar_4: require('../image/img_sidebar_4.svg'),
            active: 'home',
        }
    }
}
</script>



