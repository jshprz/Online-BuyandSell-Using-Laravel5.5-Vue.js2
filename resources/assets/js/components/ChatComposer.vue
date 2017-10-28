<template lang="html">
    <div class="chat-composer">
    <input type="text" class="form-control" placeholder="Type your message here..." v-model="messageText" @keyup.enter="send">
    </div>
</template>

<script>
    export default {
    data()
    {
      return{
      messageText:''
      }
    },
    methods:{
    send(){
        this.$emit('messagesent',{
          chat:this.messageText,
          user:{
          name: $('.uk-align-left .dropdown-toggle').text()
          }
        });
            this.messageText='';
    }
    }
    }
</script>
<style lang="css">
.chat-composer {
display:flex;
}
.chat-composer input{
flex:1 auto;
}
.chat-composer button{
border-radius:0;
}
</style>
