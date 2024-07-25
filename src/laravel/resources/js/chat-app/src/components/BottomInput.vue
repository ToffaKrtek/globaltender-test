
<script>
    export default {
        name: "BottomInput",
        data(){
            return {
                body: '',
            }
        },
        methods: {
            send(){
                console.log(this.body)
            }
        }
    }
</script>
<template>
    <div class="container">
        <textarea v-model="body"></textarea>
        <button class="btn" @click="send">Send</button>
    </div>
</template>
