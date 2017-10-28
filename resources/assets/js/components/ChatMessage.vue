<template>

                                        <li class="media" v-if="present">

                                                            <div class="media-body">
                                                              <div class="media">
                                                                <img class="d-flex mr-3 uk-border-circle" src="img/men_01.jpg" alt="Generic placeholder image mr-7" height="10" width="20">
                                                                    <div class="media-body">
                                                                      <h5 class="uk-margin-remove-top">{{who}}</h5>
                                                                         <p class="uk-margin-remove-bottom"><slot></slot></p>
                                                                            <small class="text-muted">{{date}}</small>
                                                                                <hr>
                                                                                        </div>

                                                                                    </div>


                                                                                </div>
                                                                            </li>


</template>

<script>
    export default{
    props:[
    'color','whoami','date','id','authid','getmess'
    ],
    data(){
    return{
    present:false
    }
    },
    computed:{
    className(){
      return 'list-group-item-'+this.color;
    },
    badgeClass(){
    return 'badge-'+this.color;
    },
    who(){
    return this.whoami;
    },
    datedate(){
    return this.date;
    }
    },
    methods:{
    mess(){
    return this.getmess;
    }
    },
        mounted() {

            if(this.authid !== this.id){
            this.present=false;
            }
            else{
            this.present=true;
            }


            console.log('Component mounted.')
        }
    }
</script>
