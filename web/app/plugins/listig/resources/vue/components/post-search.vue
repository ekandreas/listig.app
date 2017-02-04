<template>
        <nav class="panel">
            <p class="panel-heading">
                Post Search
            </p>
            <div class="panel-block">
                <div class="columns">
                    <div class="column is-4">
                        <div class="control has-icon">
                            <input class="input is-small" type="text" placeholder="Search">
                            <span class="icon is-small">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="control">
                            <p class="control">
                                <span class="select is-small">
                                    <select>
                                      <option>-- no author --</option>
                                      <option v-for="author in authors" value="author.data.ID">{{ author.data.display_name }}</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="control">
                            <p class="control">
                                <span class="select is-small">
                                    <select>
                                      <option>-- no posttype --</option>
                                      <option v-for="posttype in posttypes" value="posttype.name">{{ posttype.label }}</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="panel-block">
                <strong>post title 1</strong>
            </a>
            <a class="panel-block is-active">
                <strong>post title 2</strong>
            </a>
            <a class="panel-block">
                <strong>post title 3</strong>
                &nbsp;
                <span class="tag is-info pull-right post-label">33</span>
            </a>
            <div class="panel-block">
                <button class="button is-outlined">
                    1
                </button>&nbsp;
                <button class="button is-outlined">
                    2
                </button>&nbsp;
                <button class="button is-outlined">
                    3
                </button>
            </div>
        </nav>
</template>

<script>
    module.exports = {
        mounted: function () {
            let self = this;
            axios.defaults.headers.common['X-WP-Nonce'] = listig.nonce;
            axios.get(listig.restUrl + '/author')
                .then(function (response) {
                    self.authors = response.data;
                });
            axios.get(listig.restUrl + '/posttype')
                .then(function (response) {
                    self.posttypes = response.data;
                });
        },
        data: function () {
            return {
                authors: [],
                posttypes: [],
                form: {
                    author: 0,
                    search: '',
                    posttype: ''
                },
                lang: listig.lang,
            }
        }
    };
</script>

<style>
    .post-label {
        float:right;
    }
</style>