<template>
    <div class="page-frame">
        <top-menu></top-menu>
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