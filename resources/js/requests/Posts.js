import axios from 'axios';

export const index = async () => {
  const { data } = await axios
    .get('posts');

  return data;
};
