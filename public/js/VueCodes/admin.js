window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
new Vue({
el:'#manage-vue',
data:{
active:'',
items:[],
choose:'accessories',
render:[],
fillitems:{'approved':''},
category:{'accessories':'','bags':'','menstore':'','womenstore':'','computeraccessories':'','gadgets':'','vehicle':'','vehicleaccessories':''}
},
created:function(){
this.getPendingItems();
this.approvedItem();

},
methods:{
  choosecategory:function(e){
    this.choose=e;
    console.log(this.choose);
  },
  clicklist:function(act){
    this.active=act;
    console.log(this.active);
  },
  getPendingItems:function(){
    axios.get('/products').then(response => {
      this.items=response.data.items;
    });
  },

  approveItem:function(id){
    var input=this.fillitems;
    axios.put('/products/'+id).then((response) => {
      this.fillitems={'id':''};
      toastr.success('1 item successfully approved',{timeout:5000});
      this.getPendingItems();
    });

  },
 deleteItem:function(item){
   axios.delete('products/'+item.id).then(response => {
     toastr.error('1 record has been disposed',{timeout:5000});
     this.getPendingItems();
   });
}
}
});
