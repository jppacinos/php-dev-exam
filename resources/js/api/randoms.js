import axios from 'axios'

export function getRandoms() {
  return axios.get('/randoms')
}
