<template>
    <i v-on:click="deleteItem">
        <font-awesome-icon icon="trash" class="trashStyle"></font-awesome-icon>
    </i>
</template>

<script>
    export default {
        name: "item-delete",
        props: ['affiliate'],
        methods:{
            deleteItem: function(){
                let self = this;

                if(typeof self.affiliate !== 'undefined')
                {
                    axios.delete(`/affiliates/${self.affiliate}`)
                        .then(function (response) {
                            window.open("/affiliates","_self")
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
                }


            }
        }

    }
</script>

<style scoped>
    .trashStyle{
        position: relative;
        top: 0px;
        width: 20px;
        height: 20px;
        display: inline-block;
        color: black;
    }
</style>