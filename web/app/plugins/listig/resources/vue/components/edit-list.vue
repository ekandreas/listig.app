<template>
    <div :class="moduleClass">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">{{ lang.editLabel }}</p>
                <button class="delete" @click="close"></button>
            </header>
            <section class="modal-card-body">
                <label class="label">{{ lang.nameLabel }}</label>
                <p class="control">
                    <input ref="editName"
                           class="input"
                           type="text"
                           :placeholder="lang.namePlaceholder"
                           v-model="form.name"
                    >
                </p>
                <label class="label">{{ lang.descriptionLabel }}</label>
                <p class="control">
                    <textarea
                            class="textarea"
                            :placeholder="lang.descriptionPlaceholder"
                            v-model="form.description">
                    </textarea>
                </p>
                <p class="control">
                    <label class="checkbox">
                        <input type="checkbox" v-model="form.private">
                        {{ lang.privateLabel }}
                    </label>
                </p>
            </section>
            <footer class="modal-card-foot">
                <a class="button is-success" @click="save">{{ lang.saveLabel }}</a>
                <a class="button" @click="close">{{ lang.cancelLabel }}</a>
                <a class="button is-danger" @click="destroy">{{ lang.destroyLabel }}</a>
            </footer>
        </div>
    </div>
</template>

<script>
    module.exports = {
        data: function () {
            return {
                moduleClass: 'modal',
                form: {
                    id: 0,
                    name: '',
                    description: '',
                    private: false
                },
                lang: listig.lang,
            }
        },
        methods: {
            edit: function () {
                let self = this;

                self.moduleClass = 'modal is-active';
                setTimeout(function () {
                    self.$refs.editName.focus();
                }, 500);
            },
            close: function () {
                let self = this;

                self.moduleClass = 'modal';
            },
            save: function () {
                let self = this;
                axios.defaults.headers.common['X-WP-Nonce'] = listig.nonce;
                axios.post(listig.restUrl + '/listing/' + self.form.id, self.form)
                    .then(function (response) {
                        self.form.name='';
                        self.form.description='';
                        self.form.private=false;
                        self.moduleClass = 'modal';
                    });
            },
            destroy: function () {
                let self = this;

                self.moduleClass = 'modal';
            }
        }
    };
</script>

<style>
</style>