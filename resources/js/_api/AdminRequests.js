import client from "./index";

const AdminRequests = {
    show(id) {
        return client.get('/api/flats/' + id).then(res => res.data);
    },
    list(data) {
        return client.get('/api/flats', {params: data}).then(res => res.data);
    },
    create(data) {
        return client.post('/api/flats', data).then(res => res.data);
    },
    update(id, data) {
        return client.post('/api/flats/' + id + '/update', data).then(res => res.data);
    },

    showProgress(id) {
        return client.get('/api/progress/' + id).then(res => res.data);
    },
    listProgress(data) {
        return client.get('/api/progress', {params: data}).then(res => res.data);
    },
    createProgress(data) {
        return client.post('/api/progress', data).then(res => res.data);
    },
    updateProgress(id, data) {
        return client.post('/api/progress/' + id + '/update', data).then(res => res.data);
    },

    showPurchase(id) {
        return client.get('/api/purchase/' + id).then(res => res.data);
    },
    listPurchases(data) {
        return client.get('/api/purchase', {params: data}).then(res => res.data);
    },
    createPurchases(data) {
        return client.post('/api/purchase', data).then(res => res.data);
    },
    updatePurchases(id, data) {
        return client.post('/api/purchase/' + id + '/update', data).then(res => res.data);
    },
    purchaseOrder(id, data) {
        return client.post('/api/purchase/order/' + id, data).then(res => res.data);
    },


    createContact(data) {
        return client.post('/api/contact', data).then(res => res.data);
    },
    listContacts() {
        return client.get('/api/contact').then(res => res.data);
    },
    makeContactMain(id) {
        return client.post('/api/contact/' + id + '/main').then(res => res.data);
    },
    deleteContact(id) {
        return client.delete('/api/contact/' + id).then(res => res.data);
    }


};

export default AdminRequests;
