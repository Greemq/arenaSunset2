import client from "./index";
import {setTokenToClient} from "./index";
import {LS_USERS, LS_TOKEN} from "../_types";
import {AUTH, RESET} from "../_types/store-types";
import store from "../store";

const authApi = {
    async login(data) {
        return await client.post('/api/auth/login', data).then(res => {
            this.setAuthorization(data.email, data.password, res.data.data.token);
        });

    },
    setAuthorization(email, password, token) {
        const authdata = window.btoa(email + ':' + encodeURIComponent(password));

        localStorage.setItem(LS_USERS, JSON.stringify(authdata));
        localStorage.setItem(LS_TOKEN, token);

        setTokenToClient(token);
        store.commit(AUTH + RESET);

    },
    getToken() {
        return localStorage.getItem(LS_TOKEN);
    },
};

export default authApi;
