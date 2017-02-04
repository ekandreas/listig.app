<template>
    <div class="page-frame">

        <top-menu></top-menu>

        &nbsp;<br/>

        <div class="columns">

            <div class="column">
                <post-search></post-search>
            </div>

            <div class="column">
                <listings></listings>
            </div>

            <div class="column">
                <post-edit></post-edit>
                <post-preview></post-preview>
            </div>

        </div>

    </div>
</template>

<script>
    module.exports = {
        component: ListigTopMenu,
        props: ['title']
    };
</script>

<style>
    .page-frame {
        margin-right: 20px;
    }
</style>