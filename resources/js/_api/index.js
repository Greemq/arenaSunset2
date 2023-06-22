import i18nService from "../_services/i18n.service";
import axios from "axios";

const client = axios.create({
    baseURL: process.env.MIX_URL || 'http://localhost',
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-Localization': i18nService.getCurrentLocale(),
        // 'service': 2
    },
    // onUploadProgress: function (progressEvent) {
    //     const uploadPercent = parseInt(Math.round((progressEvent.loaded / progressEvent.total) * 100));
    //
    // }
    // }.bind(this),
});

export function handleResponse(res) {
    return res.data;
}

export const setLocaleHeader = locale => {
    client.defaults.headers['X-Localization'] = locale;
};
export const setTokenToClient = token => {
    client.defaults.headers.common.Authorization = 'Bearer ' + token;
};

export default client;
