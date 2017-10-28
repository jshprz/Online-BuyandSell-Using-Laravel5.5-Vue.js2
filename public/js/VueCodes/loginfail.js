window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
Vue.use(VeeValidate);
new Vue({
el:'#manage-vue',
data:{
  errors:{'exists':'','confirmed':'','email':''},
},
created:function(){
  this.getVueItems();
},
methods:{
  getVueItems:function(){
    axios.get('shoppeitems').then(response =>{
    if (response.data.email) {
      this.errors.email=response.data.email;

    }
    else if (response.data.exists) {
      this.errors.exists=response.data.exists;

    }
    else {
      this.errors.confirmed=response.data.confirmed;

    }
  });
},

}
});
