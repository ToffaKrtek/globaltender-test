
<script>
    import MessageComponent from "./MessageComponent.vue"
    import BottomInput from "./BottomInput.vue"
    export default {
        name: "ChatComponent",
        components: { MessageComponent, BottomInput },
        computed: {
            messages(){
                return [
                    {id: 1, body:"Hello", user_name:"a"}, 
                    {id: 2, body:"Hello2", user_name:"b"}, 
                ]
            }
        }
    }
</script>
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>ЧАТ-МОЛЧАТ</h1></div>
                    <div class="card-body" v-for="message in messages" :key="message.id">
                        <MessageComponent  :message="message"/>
                    </div>
                    <BottomInput />
                </div>
            </div>
        </div>
    </div>
</template>
