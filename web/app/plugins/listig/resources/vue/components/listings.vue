<template>
    <div>
        <nav class="panel" v-for="list in listings">
            <p class="panel-heading">
                {{ list.name }}
                <a class="icon pull-right gear-icon" @click="edit(list)">
                    <i class="fa fa-gear"></i>
                </a>
            </p>
            <a class="panel-block">
                post 1
            </a>
            <a class="panel-block">
                post 2
            </a>
            <a class="panel-block">
                post 3
            </a>
        </nav>
    </div>
</template>

<script>
    module.exports = {
        data: function () {
            return {
                listings: []
            }
        },
        created: function () {
            let self = this;
            window.eventBus.$on('list-rebound', function () {
                self.getAll();
            });
        },
        mounted: function () {
            let self = this;
            self.getAll();
        },
        methods: {
            getAll: function () {
                let self = this;
                axios.defaults.headers.common['X-WP-Nonce'] = listig.nonce;
                axios.get(listig.restUrl + '/listing')
                    .then(function (response) {
                        self.listings = response.data;
                    });
            },
            edit: function (list) {
                window.eventBus.$emit('list-edit', list);
            }
        }
    };
</script>

<style>
    .gear-icon {
        color: #999;
    }
</style>