window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
Vue.use(VeeValidate);
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
Vue.component('chat-message',{
template:'<div>'
          +'<p>{{message}}</p>'
          +'<small>{{user}}</small>'
          +'</div>',
          props:['message','user']
});


new Vue({
  el:'#manage-vue',
  data:{
    active:'setting',
    inputs:{'firstname':'','lastname':'','contact':''},
    edit:{'edit1':'Edit','edit2':'Edit','edit3':'Edit'},
    active_list:'list1',
    items:[],
    display_image:'',
    product_image:'',
    messages:[
      {
        message:'sadsdasd',
        user:'adasd'
      }
    ],
    chat:[],
    messageText:'',
    upload:{}
  },
  created:function(){
    console.log(this.active);
    console.log(this.inputs.firstname);
    this.getUpload();
    this.getMessage();
  },
  methods:{
    sendMessage:function(){
      this.messages.push({
        message:this.messageText,
        user:''
      });
      axios.post('messages',this.messageText).then(response=>{
        this.getMessage();
      });
    },
    getMessage:function(){
      axios.get('messages').then(response => {
        this.chat=response.data.messages;
      });
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
},

  UpdateUser:function(){
    axio.put('')
  }
    }
});
//createUpload:function(){
  //  this.$http.post('uploaditems',this.product)
  //  .then(response=>{
  //    console.log('success');
//    });
//  }
//
