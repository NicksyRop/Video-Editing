<template>
    <div class="h-full w-full"> 
            <div class="h-screen flex-col-reverse overflow-scroll ">
                <div v-for="( message , index) in messages " :key="index">
                    <li>{{message.message}}</li>
                   
                </div>
          
             </div>  

    </div>
</template>

<script>
    export default {

        props : ['messages'],
        
    }
</script>

<style lang="scss" scoped>

</style>