import Axios from 'axios';

const api = Axios.create({
    baseURL: wp_fasa.rest_url || ''
});

export default api;