import axios from 'axios'

export function getBreakdowns() {
  return axios.get('/breakdowns')
}
