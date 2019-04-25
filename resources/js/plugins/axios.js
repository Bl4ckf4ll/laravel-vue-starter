import axios from 'axios';

axios.interceptors.request.use((config) => {
  config.baseURL = process.env.MIX_API_URL;

  return config;
});
