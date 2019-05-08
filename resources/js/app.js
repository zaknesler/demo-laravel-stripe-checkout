import './bootstrap'

import ExampleComponent from './components/ExampleComponent.vue'
import CheckoutComponent from './components/CheckoutComponent.vue'
import DropdownComponent from './components/DropdownComponent.vue'

Vue.component('example-component', ExampleComponent)
Vue.component('checkout', CheckoutComponent)
Vue.component('dropdown', DropdownComponent)

const app = new Vue({
    el: '#app',
    data: {
        displayNavigation: false
    }
})
