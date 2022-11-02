
import ViewTemplate from "./components/Page/ViewTemplate";
import RequestList from './components/Page/ListRequestUser.vue';
import CreateNewTemplate from "./components/Page/CreateNewTemplate";
import UserProfile from "./components/Page/error.vue"
import RequestListApprover from "./components/Page/RequestListApprover.vue";
import Setting from "./components/Page/Setting";
import RequestDetail from "./components/Page/RequestDetail";
import ViewDetailTemplate from "./components/Page/CreateNewRequest";
import EditTemplate from "./components/Page/EditTemplate";
import UpdateTemplate from "./components/Page/UpdateTemplate";
const routes = [
    {
        path: '/',
        component: ViewTemplate,
        name: 'home-page',
    },
    {
        path: '/template-view',
        component: ViewDetailTemplate,
        name: 'ViewDetailTemplate'
    },
    {
        path: '/edit-template',
        component: EditTemplate,
        name: EditTemplate
    },
    {
        path: '/update-template',
        component: UpdateTemplate,
        name: UpdateTemplate
    },
    {
        path: '/request-list',
        component: RequestList,
        name: 'RequestList',
        children :[
            {
                path: 'profile',
                component: UserProfile,
            }
        ]
    },
    {
        path: '/create-new-template',
        component: CreateNewTemplate,
        name: CreateNewTemplate
    },
    {
        path: '/request-list-approver',
        component: RequestListApprover,
        name: RequestListApprover,
        children: [
            /*{
                path: '',
                component: DraftRequest,
            },*/
        ]
    },
    {
        path: '/setting',
        component: Setting,
        name: Setting
    },

    {
        path: '/request-detail',
        component:RequestDetail,
        name: RequestDetail
    }


];

export default routes;
