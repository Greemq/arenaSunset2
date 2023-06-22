import {requireAuth} from "./router-guards";

export default [
    {
        path: 'login',
        name: 'login',
        component: () => import('../views/Admin/Login'),
    },
    // {
    //     path: '/',
    //     name: 'admin_main',
    //     beforeEnter: requireAuth,
    //     component: () => import('../views/Admin/AdminDashboard'),
    // },
    {
        path: 'flats',
        name: 'flats_list',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Flats/FlatsList'),
    }, {
        path: 'flats/:id',
        name: 'flats_item',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Flats/FlatsForm'),
    }, {
        path: 'flats/create',
        name: 'flats_create',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Flats/FlatsForm'),
    }, {
        path: 'progress',
        name: 'progress_list',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Progress/ProgressList'),
    }, {
        path: 'progress/:id',
        name: 'progress_item',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Progress/ProgressForm'),
    }, {
        path: 'progress/create',
        name: 'progress_create',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Progress/ProgressForm'),
    },
    {
        path: 'purchase',
        name: 'purchase_list_1',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Purchases/PurchaseList'),
    },
    {
        path: 'purchase_',
        name: 'purchase_list_2',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Purchases/PurchaseList'),
    },
    {
        path: 'purchase/:id',
        name: 'purchase_item_1',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Purchases/PurchaseForm'),
    },
    {
        path: 'purchase_/:id',
        name: 'purchase_item_2',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Purchases/PurchaseForm'),
    },
    {
        path: 'purchase/create',
        name: 'purchase_create_1',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Purchases/PurchaseForm'),
    },
    {
        path: 'purchase_/create',
        name: 'purchase_create_2',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Purchases/PurchaseForm'),
    },
    {
        path: 'contacts',
        name: 'contacts',
        beforeEnter: requireAuth,
        component: () => import('../views/Admin/Contacts'),
    },


];
