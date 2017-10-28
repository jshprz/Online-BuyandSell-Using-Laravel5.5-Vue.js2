<template>
    <div class="chat-log">
    <chat-message></chat-message>
    </div>
</template>

<script>
export default {
    data(){
      return{
      messages:[
      {
      message:'Hey!',
      user:'Joshua'
      },
      {
      message:'Hello!',
      user:'joshua'
      }
      ]
      }
    }
    }
</script>
<style lang="css">
.chat-log .chat-message:nth-child(even){
background-color:#ccc;
}
</style>
