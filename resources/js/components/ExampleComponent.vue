<template>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            $('#top').css('height',$(window).height());
            $('#top > .overlay').css('height','inherit');
        }
    }
</script>
