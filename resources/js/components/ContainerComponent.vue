<template>
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Chat page</h3></div>

                    <div class="card-body">
                      <message-component :messages="messages"></message-component>
                      <input-component v-on:messagesent="getMessages()"></input-component> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import InputComponent from './InputComponent.vue'
import MessageComponent from './MessageComponent.vue'
    export default {
  components: {
       InputComponent ,
       MessageComponent
       
       },
        

            
        data() {
            return {
                messages : '',
            }
        },
        methods: {
            
            getMessages() {

                axios.get('/chats/messages')
                .then( response => {

                    this.messages = response.data;
                })
            }

        },created() {
            this.getMessages();
        },
    }
</script>
