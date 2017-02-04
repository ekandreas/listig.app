<template>
    <div :class="moduleClass">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ editLabel }}</p>
                <button class="delete" @click="close"></button>
            </header>
            <section class="modal-card-body">
                CONTENT
            </section>
            <footer class="modal-card-foot">
                <a class="button is-success">{{ saveLabel }}</a>
                <a class="button" @click="close">{{ cancelLabel }}</a>
            </footer>
        </div>
    </div>
</template>

<script>
    module.exports = {
        data: function () {
            return {
                moduleClass: 'modal',
                settingsLabel: wplang.settings,
                newListLabel: wplang.newList,
                editLabel: wplang.editLabel,
                saveLabel: wplang.saveLabel,
                cancelLabel: wplang.cancelLabel
            }
        },
        methods: {
            edit: function () {
                var self = this;

                self.moduleClass = 'modal is-active';
            },
            close: function () {
                var self = this;

                self.moduleClass = 'modal';
            }
        }
    };
</script>

<style>
</style>