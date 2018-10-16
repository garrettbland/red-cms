import axios from 'axios'

export default {

  GetAllSections(){
    return axios.get('/sections')
      .then(response => {
        return response.data
      })
  },

  AddSection(title){
    console.log("sectiontitle: "+title);
    return axios.post('/add/section',{
      title: title
    })
    .then(response => {
      return response.data
    })
  },

  GetSectionTitle(id){
    return axios.get('/sections/'+id+'/title')
      .then(response => {
        return response.data
      })
  },

  GetAllSectionSetting(id){
    return axios.get('/sections/'+id)
      .then(response => {
        return response.data
      })
  },

  AddSetting(payload){
    return axios.post('/add/setting',{
          title: payload.title,
          value: payload.value,
          type: payload.type,
          section_id: payload.section_id
    })
    .then(response => {
      return response
    })
  },

  UpdateSetting(payload){
    return axios.post('/update/setting',{
          value: payload.value,
          id: payload.id
    })
    .then(response => {
      return response
    })
  }

}
