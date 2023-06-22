import client from "./index";

const ClientRequests = {
    listFlats(data) {
        return client.get('/api/public/flats', {params: data}).then(res => res.data);
    },
    listProgress(data) {
        return client.get('/api/public/progress', {params: data}).then(res => res.data);
    },
    listPurchases(data) {
        return client.get('/api/public/purchases', {params: data}).then(res => res.data);
    },
    getContacts() {
        return client.get('/api/public/contacts').then(res => res.data);
    }


};

export default ClientRequests;
