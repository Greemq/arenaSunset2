import AdminRoutes from "./admin";
import ClientRoutes from "./clientRoutes";

export default [

    {
        path: 'admin',
        component: () => import('../views/Admin/AdminMain'),
        children: AdminRoutes
    },
    {
        path: '',
        name:'client_main',
        component: () => import('../views/Client/ClientTemplate'),
        children: ClientRoutes
    },

];
