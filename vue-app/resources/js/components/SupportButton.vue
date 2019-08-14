<template>
    <div class="mb-100">
        <a class="button is-success" @click="$modal.show('contact-support-modal')">Support</a>
        <modal
            name="contact-support-modal"
            height="auto"
            width="100%"
            :pivotY="1"
            classes="box has-text-centered has-background-white is-radiusless"
        >
            <div class="py-5">
                <h1 class="title">Have a Question?</h1>
                <div class="columns is-mobile is-centered">
                    <form
                        autocomplete="off"
                        @submit.prevent="contactSupport"
                        class="column is-half"
                        @keydown="submitted = false"
                    >
                        <div class="field">
                            <div class="control">
                                <input
                                    type="text"
                                    name="name"
                                    id="name"
                                    class="input is-minimal"
                                    :class="errors.name ? 'is-danger' : ''"
                                    placeholder="What`s your name?"
                                    v-model="message.name"
                                    @keydown="delete errors.name"
                                    required/>

                                <span
                                    class="is-size-7 has-text-danger"
                                    v-text="errors.name[0]"
                                    v-if="errors.name"
                                ></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input
                                    type="text"
                                    name="email"
                                    id="email"
                                    class="input is-minimal"
                                    :class="errors.email ? 'is-danger' : ''"
                                    placeholder="Witch email addres should we respond to?"
                                    v-model="message.email"
                                    @keydown="delete errors.email"
                                    required/>

                                <span
                                    class="is-size-7 has-text-danger"
                                    v-text="errors.email[0]"
                                    v-if="errors.email"
                                ></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <textarea
                                    id="body"
                                    class="textarea"
                                    :class="errors.question ? 'is-danger' : ''"
                                    name="question"
                                    data-autosize
                                    required
                                    placeholder="What`s your question?"
                                    v-model="message.question"
                                    @keydown="delete errors.question"
                                ></textarea>

                                <span
                                    class="is-size-7 has-text-danger"
                                    v-text="errors.question[0]"
                                    v-if="errors.question"
                                ></span>
                            </div>
                        </div>
                        <div class="field">
                            <div class="control">
                                <input
                                    name="verification"
                                    id="verification"
                                    class="input is-minimal"
                                    :class="errors.verification ? 'is-danger' : ''"
                                    placeholder="What is 1 + 4?"
                                    v-model="message.verification"
                                    @keydown="delete errors.verification"
                                    required/>

                                <span
                                    class="is-size-7 has-text-danger"
                                    v-text="errors.verification[0]"
                                    v-if="errors.verification"
                                ></span>
                            </div>
                        </div>
                        <div class="field is-grouped is-grouped-right">
                            <div class="control">
                                <button class="button is-rounded px-3 is-uppercase" @click="cancel">Cancel</button>
                            </div>
                            <div class="control">
                                <button class="button is-link is-outlined is-rounded px-3 is-uppercase"
                                        :disabled="submitted">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </modal>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "SupportButton",
        data() {
            return {
                message: {},
                errors: {},
                submitted: false
            };
        },

        methods: {
            cancel() {
                this.$modal.hide('contact-support-modal');
                this.resetForm();
            },

            contactSupport() {
                this.submitted = true;

                axios
                    .post('/contact', this.message)
                    .then(() => {
                        this.$modal.hide('contact-support-modal');

                        this.resetForm();

                        this.$swal('Thanks!', 'We will be in touch soon.', 'success');
                    })
                    .catch(errors => {
                        this.errors = errors.response.data.errors;
                    });
            },

            resetForm() {
                this.message = {};
                this.submitted = false;
            }
        }
    }
</script>

<style scoped lang="scss">
    .py-5 {
        padding: {
            top: 3rem;
            bottom: 3rem;
        }
    }

    .px-3 {
        padding: {
            left: 2.5rem;
            right: 2.5rem;
        };
    }

    .py-100 {
        padding: {
            top: 100vh;
            bottom: 100vh;
        };
    }

    .my-100 {
        margin: {
            top: 100vh;
            bottom: 100vh;
        };
    }

    .mb-100 {
        margin: {
            bottom: 100vh;
        };
    }

    .mb-150 {
        margin: {
            bottom: 150vh;
        };
    }

    .mb-200 {
        margin: {
            bottom: 200vh;
        };
    }
</style>
