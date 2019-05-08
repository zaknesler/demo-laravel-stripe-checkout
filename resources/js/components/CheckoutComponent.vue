<template>
    <div>
        <a href="#" class="inline-block btn" @click="checkout">Checkout</a>
    </div>
</template>

<script>
    export default {
        props: ['stripeKey', 'stripeSessionId'],

        methods: {
            checkout() {
                const stripe = Stripe(this.stripeKey)

                stripe.redirectToCheckout({
                    sessionId: this.stripeSessionId
                }).then((result) => {
                    console.log(result)
                    // If `redirectToCheckout` fails due to a browser or network
                    // error, display the localized error message to your customer
                    // using `result.error.message`.
                })
            }
        }
    }
</script>
