<template>
    <div class="flex flex-col xs:w-5/6 sm:w-4/5 md:w-1/2 h-128 text-center mx-auto border-grey-lightest border-4 shadow-md h-128">
        <div class="flex align-items-start border-b-4 border-grey-lightest items-center bg-grey-lightest">
            <div class="flex py-2">
                <div class="circle bg-red ml-2"></div>
                <div class="circle bg-yellow ml-2"></div>
                <div class="circle bg-green ml-2"></div>
            </div>
        </div>

        <div class="flex overflow-auto" style="flex:3;">
            <div class="flex flex-col w-full p-4">
                <div class="flex" :class="{ 'justify-end': message.type == 'client' } " v-for="message in messages">
                    <div class="flex p-4 message md:w-2/5 mb-2 text-left">
                        {{ message.content }}
                    </div>
                </div>

                <!--<div class="flex justify-end">-->
                    <!--<div class="flex p-4 message md:w-2/5 mb-2 text-left">-->
                        <!--**********-->
                    <!--</div>-->
                <!--</div>-->

            </div>
        </div>

        <input @keyup.enter="submitMessage(message)" class="border-t-4 border-grey-lightest py-3" v-model="message">
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [],
                message: "",
                askingForPassword: false,
                askingForEmail: false,
            }
        },

        mounted() {
            this.getWelcomeMessages();
            setTimeout(() => this.messages.push({ content: "Hi there!", type: "bot"}), 1000);
            setTimeout(() => this.messages.push({ content: "Could you please give your email?", type: "bot"}), 3000);
        },

        methods: {
            getWelcomeMessages() {
                axios.post('/chatbot/welcome', { driver: "web", message: "hi"}).then(response => {
                    console.log(response);
                });
            },

            submitMessage(message) {
                if(message !== "") {
                    this.messages.push({ content: message, type: "client"});
                    this.message = "";
                }
            },

            chatbotIsTyping() {

            },

            checks() {
                // check if asking for password
                // check if asking for email
            }
        }
    }
</script>