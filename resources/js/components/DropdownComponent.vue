<template>
    <details class="relative" ref="dropdown">
        <summary class="cursor-pointer select-none focus:outline-none" v-text="text" />
        <div v-click-outside="close" class="mt-8 p-3 w-32 absolute top-0 right-0 bg-white border rounded-lg">
            <slot />
        </div>
    </details>
</template>

<script>
    import vClickOutside from 'v-click-outside'

    export default {
        directives: {
            clickOutside: vClickOutside.directive
        },
        props: {
            text: {
                required: true,
                type: String
            }
        },
        methods: {
            close() {
                if (this.$refs.dropdown.open)
                    this.$refs.dropdown.open = false
            }
        }
    }
</script>
