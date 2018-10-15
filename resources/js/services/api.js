import axios from 'axios'

export default {

  GetAllSections(){
    return axios.get('/sections')
      .then(response => {
        return response.data
      })
  },

  GetAllSectionSetting(slug){
    return axios.get('/sections/'+slug)
      .then(response => {
        console.log("IM HERE "+response.data);
        return response.data
      })
  }

}
