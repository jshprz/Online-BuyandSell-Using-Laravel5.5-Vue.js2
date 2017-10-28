
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
 Vue.component('accessories', require('./components/accessories.vue'));
Vue.component('bags', require('./components/bags.vue'));
Vue.component('menstore', require('./components/menstore.vue'));
Vue.component('womenstore', require('./components/womenstore.vue'));
Vue.component('computeraccessories', require('./components/computeraccessories.vue'));
Vue.component('gadgets', require('./components/gadgets.vue'));
Vue.component('vehicle', require('./components/vehicle.vue'));
Vue.component('vehicleaccessories', require('./components/vehicleaccessories.vue'));
Vue.component('listcard', require('./components/listcard.vue'));

const app = new Vue({
  el:'#manage-vue',
  data:{
    chatchat:'',
    approveditems:[],
    mainaccessories:[],
    mainbags:[],
    mainmenstore:[],
    mainwomenstore:[],
    maincomputeraccessories:[],
    maingadgets:[],
    mainvehicle:[],
    mainvehicleaccessories:[],
    accessories:[],
    bags:[],
    menstore:[],
    womenstore:[],
    computeraccessories:[],
    gadgets:[],
    vehicle:[],
    vehicleaccessories:[],
    choose:'accessories',
    pagination:{
      total:0,
      per_page:2,
      from:1,
      to:0,
      current_page:1
    },
    offset:4,
    items:[],
    currentitem:[]
  },
  computed:{
    isActivated:function(){
      return this.pagination.current_page;
    },
    pagesNumber:function(){
      if (!this.pagination.to) {
        return [];
      }
      var from=this.pagination.current_page-this.offset;
      if (from < 1) {
        from=1;
      }
      var to=from+(this.offset * 2);
      if (to >= this.pagination.last_page) {
        to=this.pagination.last_page;
      }
      var pagesArray=[];
      while (from <= to) {
        pagesArray.push(from);
        from++;
      }
      return pagesArray;
    }
  },
  created:function(){
  this.getAccessoriesCategory();
  this.getBagsCategory();
  this.getMenstoreCategory();
  this.getWomenstoreCategory();
  this.getComputeraccessoriesCategory();
  this.getGadgetsCategory();
  this.getVehicleCategory();
  this.getVehicleaccessoriesCategory();
  this.getCurrentCategory();
  this.maingetAccessoriesCategory();
  this.maingetBagsCategory();
  this.maingetMenstoreCategory();
  this.maingetWomenstoreCategory();
  this.maingetComputeraccessoriesCategory();
  this.maingetGadgetsCategory();
  this.maingetVehicleCategory();
  this.maingetVehicleaccessoriesCategory();
  this.getCurrentCategory();
  this.approvedItem(this.pagination.current_page);
  },
  methods:{
    chatnow:function(chat){
      console.log(chat);
    },
    getCurrentItem(){
      axios.get('currentitem').then(response => {
        this.items=response.data.current;
      });
    },
    changePage:function(page){
      this.pagination.current_page=page;
      this.approvedItem(page);
    },
    approvedItem:function(page){
      axios.get('/approveditems?page='+page).then(response => {
        this.approveditems=response.data.approveditems.data;
        this.pagination=response.data.pagination;
      });
    },
    currentclick:function(item){
      axios.put('/current/'+item).then(response=>{
        this.getCurrentCategory();
      });
    },
    getCurrentCategory(){
      axios.get('current').then(response => {
        this.items=response.data.current;
      });
    },
    choosecategory:function(e){
      this.choose=e;
      console.log(this.choose);
    },
    maingetAccessoriesCategory:function(){
      axios.get('authaccessoriesitems').then(response => {
        this.mainaccessories=response.data.accessories;
        console.log(this.accessories);
      });
    },
    maingetBagsCategory:function(){
      axios.get('authbagsitems').then(response => {
        this.mainbags=response.data.bags;
      });
    },
    maingetMenstoreCategory:function(){
      axios.get('authmenstoreitems').then(response => {
        this.mainmenstore=response.data.menstore.data;
      });
    },
    maingetWomenstoreCategory:function(){
      axios.get('authwomenstoreitems').then(response => {
        this.mainwomenstore=response.data.womenstore;
      });
    },
    maingetComputeraccessoriesCategory:function(){
      axios.get('authcomputeraccessoriesitems').then(response => {
        this.maincomputeraccessories=response.data.computeraccessories;
      });
    },
    maingetGadgetsCategory:function(){
      axios.get('authgadgetsitems').then(response => {
        this.maingadgets=response.data.gadgets;
      });
    },
    maingetVehicleCategory:function(){
      axios.get('authvehicleitems').then(response => {
        this.mainvehicle=response.data.vehicle;
      });
    },
    maingetVehicleaccessoriesCategory:function(){
      axios.get('authvehicleaccessoriesitems').then(response => {
        this.mainvehicleaccessories=response.data.vehicleaccessories;
      });
    },
    getAccessoriesCategory:function(){
      axios.get('accessoriesitems').then(response => {
        this.accessories=response.data.approveditems.data;

      });
    },
    getBagsCategory:function(){
      axios.get('bagsitems').then(response => {
        this.bags=response.data.approveditems.data;
      });
    },
    getMenstoreCategory:function(){
      axios.get('menstoreitems').then(response => {
        this.menstore=response.data.approveditems.data;
      });
    },
    getWomenstoreCategory:function(){
      axios.get('womenstoreitems').then(response => {
        this.womenstore=response.data.approveditems.data;
      });
    },
    getComputeraccessoriesCategory:function(){
      axios.get('computeraccessoriesitems').then(response => {
        this.computeraccessories=response.data.approveditems.data;
      });
    },
    getGadgetsCategory:function(){
      axios.get('gadgetsitems').then(response => {
        this.gadgets=response.data.approveditems.data;
      });
    },
    getVehicleCategory:function(){
      axios.get('vehicleitems').then(response => {
        this.vehicle=response.data.approveditems.data;
      });
    },
    getVehicleaccessoriesCategory:function(){
      axios.get('vehicleaccessoriesitems').then(response => {
        this.vehicleaccessories=response.data.approveditems.data;
      });
    }
  }
});
