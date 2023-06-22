import client from "./index";

const fileUpload = {
    upload(data) {
        return client.post('/api/upload-file', data).then(res => res.data);
    },
};

export default fileUpload;
