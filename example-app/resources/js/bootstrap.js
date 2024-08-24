import axios from 'axios';
import bootstrap from 'bootstrap'
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
