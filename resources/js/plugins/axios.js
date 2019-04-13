import axios from 'axios';

axios.interceptors.request.use((config) => {
  config.baseURL = 'http://localhost/api';

  return config;
});
