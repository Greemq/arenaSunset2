import {requireAuth} from "./router-guards";

export default [
    {
        path: '',
        name: 'main_page',
        // beforeEnter: requireAuth,
        component: () => import('../views/Client/Main/ClientMain'),
    },
    {
        path: 'bc',
        name: 'bc',
        // beforeEnter: requireAuth,
        component: () => import('../views/Client/BC/BCMain'),
    },

];
