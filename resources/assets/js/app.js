
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue=require('vue');
import Vue from 'vue'

import VeeValidate from 'vee-validate';
Vue.use(VeeValidate);

import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('listcard',{
  template:'<div class="uk-card uk-card-small uk-card-default">'
            +'<div class="uk-card-header">'
            +'<div class="uk-grid-small uk-flex-middle" uk-grid>'
            +'<div class="uk-width-auto">'
            +'<img class="uk-border-circle" width="40" height="40" :src="userimage">'
            +'</div>'
            +'<div class="uk-width-expand">'
            +'<h3 class="uk-card-title uk-margin-remove-bottom"style="font-family:Segoe UI Light">{{productdescription}}</h3>'
            +'<p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">{{createdat}}</time></p>'
            +'</div>'
            +'</div>'
            +'</div>'
            +'<div class="uk-card-media-bottom">'
            +'<img class="uk-border-square uk-align-center" :src="productimage">'
            +'</div>'
            +'<div class="uk-card-footer">'
            +'<a href="#" class="uk-button uk-button-text">DETAILS</a>'
            +'</div>'
            +'</div>',
  props:['userimage','productimage','productdescription','createdat','productprice','firstname','lastname']
});
Vue.component('individual-comment', {
  template:'<li> {{ commentpost }} </li>',
  props: ['commentpost']
});
Vue.component('message', require('./components/message.vue'));
Vue.component('sold', require('./components/sold.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));
Vue.component('chatlist', require('./components/chatlist.vue'));

new Vue({
  el:'#manage-vue',
  data:{
    newComment: '',
    comments: [
      'Looks great Julianne!',
      'I love the sea',
      'Where are you at?'
    ],
    active:'setting',
    inputs:{'firstname':'','lastname':'','contact':''},
    edit:{'edit1':'Edit','edit2':'Edit','edit3':'Edit'},
    active_list:'list1',
    items:[],
    display_image:'',
    product_image:'',
    messages:[],
    color:'success',
    activechat:'',
    users:[],
    notyetsold:[],
    chatmate:[]
  },
  computed:{
    className(){
      return 'list-group-item-'+this.color;
    },
    badgeClass(){
      return 'badge-'+this.color;
    }
  },
  created:function(){
    console.log(this.active);
    console.log(this.inputs.firstname);
    this.getUpload();
    this.notyetsolditem();
    this.getUsers();
    this.getChatmate();
  },
  methods:{
    addComment:function () {
      this.comments.push(this.newComment)
      this.newComment = ''
    },
    getConvo:function(sender,receiver){
      axios.get('chatmates'+sender,receiver).then(response=>{

      });
    },
    getChatmate:function(){
      axios.get('chatmates').then(response=>{
        this.chatmate=response.data.chatmate;
      });
    },
    getUsers:function(){
      axios.get('conversation').then(response=>{
        this.users=response.data.users;
        console.log(this.users);
      });
    },
    notyetsolditem:function(){
      axios.get('itemss').then(response=>{
        this.notyetsold=response.data.items;
        console.log(this.notyetsold);
      });
    },
    sold:function(myid){
      axios.put('/itemss/'+myid).then(response =>{
        this.notyetsolditem();
      });
    },
    chatme:function(chat){
      this.activechat=chat;
      console.log(this.activechat);
    },
    addMessage(message){
    this.messages.push(message);
    axios.post('/send',message).then(response=>{});
    },
    imageChanged:function(event){
        console.log(event.target.files[0]);
        var reader=new FileReader();
          reader.readAsDataURL(event.target.files[0]);
        reader.onload = (e) =>{
          this.product_image=e.target.result;
        }
        console.log(this.product_image);
    },
    imagedisplayChange:function(){
      var reader=new FileReader();
        reader.readAsDataURL(event.target.files[0]);
      reader.onload = (e) =>{
        this.display_image=e.target.result;
      }
    },
    animation:function(){
      toastr.success('','You are now logged in',{timeOut:4000});
    },
    getUpload:function(){
    axios.get('uploaditems').then((response) => {
    this.items=response.data.items;
    this.messages=response.data.message;
    });
    Echo.join('chatroom')
    //.here()
    //.joining()
    //.leaving()
    .listen('ChatSent', (e) =>{
      console.log(e);
    });
  },
   clicklist:function(act){
     this.active=act;
     console.log(this.active);
   },

   clicklist1:function(act){
     this.active_list=act;
     console.log(this.active_list);
   },
   editClick1:function(){
    if (this.edit.edit1=='Close') {
      this.edit.edit1='Edit';
    }
    else {
      this.edit.edit1='Close';
    }
  },
  editClick2:function(){
   if (this.edit.edit2=='Close') {
     this.edit.edit2='Edit';
   }
   else {
     this.edit.edit2='Close';
   }
 },
 editClick3:function(){
  if (this.edit.edit3=='Close') {
    this.edit.edit3='Edit';
  }
  else {
    this.edit.edit3='Close';
  }
}
    }
    //mounted(){
    //  Echo.private('chat')
    //  .listen('ChatEvent',(e) => {
    //    this.chat.message.push(e.message);
        //console.log(e.message);
      //});
    //}
});
