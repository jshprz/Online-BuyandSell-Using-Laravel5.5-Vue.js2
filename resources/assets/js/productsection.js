
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
    mainothers:[],
    guestaccessories:[],
    guestbags:[],
    guestmenstore:[],
    guestwomenstore:[],
    guestcomputeraccessories:[],
    guestgadgets:[],
    guestvehicle:[],
    guestvehicleaccessories:[],
    guestothers:[],
    accessories:[],
    bags:[],
    menstore:[],
    womenstore:[],
    computeraccessories:[],
    gadgets:[],
    vehicle:[],
    vehicleaccessories:[],
    others:[],
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
  this.getCurrentCategory();
  this.approvedItem(this.pagination.current_page);
  this.getOthersCategory();
  this.getGuestAccessoriesCategory(this.pagination.current_page);
  this.getGuestBagsCategory(this.pagination.current_page);
  this.getGuestMenstoreCategory(this.pagination.current_page);
  this.getGuestWomenstoreCategory(this.pagination.current_page);
  this.getGuestComputeraccessoriesCategory(this.pagination.current_page);
  this.getGuestGadgetsCategory(this.pagination.current_page);
  this.getGuestVehicleCategory(this.pagination.current_page);
  this.getGuestVehicleccessoriesCategory(this.pagination.current_page);
  this.getGuestOthersCategory(this.pagination.current_page);

  },
  watch:{
    'choose':function(){
      if (this.choose=="accessories") {
          this.maingetAccessoriesCategory(this.pagination.current_page);
      }
      else if (this.choose=="bags") {
        this.maingetBagsCategory(this.pagination.current_page);
      }
      else if (this.choose=="menstore") {
        this.maingetMenstoreCategory(this.pagination.current_page);
      }
      else if (this.choose=="womenstore") {
        this.maingetWomenstoreCategory(this.pagination.current_page);
      }
      else if (this.choose=="computeraccessories") {
        this.maingetComputeraccessoriesCategory(this.pagination.current_page);
      }
      else if (this.choose=="gadgets") {
        this.maingetGadgetsCategory(this.pagination.current_page);
      }
      else if (this.choose=="vehicle") {
        this.maingetVehicleCategory(this.pagination.current_page);
      }
      else if (this.choose=="vehicleaccessories") {
        this.maingetVehicleaccessoriesCategory(this.pagination.current_page);
      }
      else {
        this.maingetOthersCategory(this.pagination.current_page);
      }
    }
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
      this.maingetAccessoriesCategory(page);
      this.maingetBagsCategory(page);
      this.maingetMenstoreCategory(page);
      this.maingetWomenstoreCategory(page);
      this.maingetComputeraccessoriesCategory(page);
      this.maingetGadgetsCategory(page);
      this.maingetVehicleCategory(page);
      this.maingetVehicleaccessoriesCategory(page);
      this.maingetOthersCategory(page);
      this.getGuestAccessoriesCategory(page);
      this.getGuestBagsCategory(page);
      this.getGuestMenstoreCategory(page);
      this.getGuestWomenstoreCategory(page);
      this.getGuestComputeraccessoriesCategory(page);
      this.getGuestGadgetsCategory(page);
      this.getGuestVehicleCategory(page);
      this.getGuestVehicleccessoriesCategory(page);
      this.getGuestOthersCategory(page);
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
        console.log(this.item);
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
    maingetAccessoriesCategory:function(page){
      axios.get('authaccessoriesitems?page='+page).then(response => {
        this.mainaccessories=response.data.accessories.data;
        this.pagination=response.data.pagination;

      });
    },
    maingetBagsCategory:function(page){
      axios.get('/authbagsitems?page='+page).then(response => {
        this.mainbags=response.data.bags.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetMenstoreCategory:function(page){
      axios.get('authmenstoreitems?page='+page).then(response => {
        this.mainmenstore=response.data.menstore.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetWomenstoreCategory:function(page){
      axios.get('authwomenstoreitems?page='+page).then(response => {
        this.mainwomenstore=response.data.womenstore.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetComputeraccessoriesCategory:function(page){
      axios.get('authcomputeraccessoriesitems?page='+page).then(response => {
        this.maincomputeraccessories=response.data.computeraccessories.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetGadgetsCategory:function(page){
      axios.get('authgadgetsitems?page='+page).then(response => {
        this.maingadgets=response.data.gadgets.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetVehicleCategory:function(page){
      axios.get('authvehicleitems?page='+page).then(response => {
        this.mainvehicle=response.data.vehicle.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetVehicleaccessoriesCategory:function(page){
      axios.get('authvehicleaccessoriesitems?page='+page).then(response => {
        this.mainvehicleaccessories=response.data.vehicleaccessories.data;
        this.pagination=response.data.pagination;
      });
    },
    maingetOthersCategory:function(page){
      axios.get('authothersitems?page='+page).then(response => {
        this.mainothers=response.data.others.data;
        this.pagination=response.data.pagination;
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
    },
    getOthersCategory:function(){
      axios.get('othersitems').then(response => {
        this.others=response.data.approveditems.data;
      });
    },
    getGuestAccessoriesCategory:function(page){
      axios.get('guestaccessoriesitems?page='+page).then(response=>{
        this.guestaccessories=response.data.accessories.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestBagsCategory:function(page){
      axios.get('guestbagsitems?page='+page).then(response=>{
        this.guestbags=response.data.bags.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestMenstoreCategory:function(page){
      axios.get('guestmenstoreitems?page='+page).then(response=>{
        this.guestmenstore=response.data.menstore.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestWomenstoreCategory:function(page){
      axios.get('guestwomenstoreitems?page='+page).then(response=>{
        this.guestwomenstore=response.data.womenstore.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestComputeraccessoriesCategory:function(page){
      axios.get('guestcomputeraccessoriesitems?page='+page).then(response=>{
        this.guestcomputeraccessories=response.data.computeraccessories.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestGadgetsCategory:function(page){
      axios.get('guestgadgetsitems?page='+page).then(response=>{
        this.guestgadgets=response.data.gadgets.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestVehicleCategory:function(page){
      axios.get('guestvehicleitems?page='+page).then(response=>{
        this.guestvehicle=response.data.vehicle.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestVehicleccessoriesCategory:function(page){
      axios.get('guestvehicleaccessoriesitems?page='+page).then(response=>{
        this.guestvehicleaccessories=response.data.vehicleaccessories.data;
        this.pagination=response.data.pagination;
      });
    },
    getGuestOthersCategory:function(page){
      axios.get('guestothersitems?page='+page).then(response=>{
        this.guestothers=response.data.others.data;
        this.pagination=response.data.pagination;
      });
    },
  }
});
