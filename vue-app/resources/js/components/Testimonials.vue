<template>
    <div class="columns has-text-centered-tablet">
        <div class="column is-8">
            <div class="box has-background-light">
                <a :href="testimonial.link"
                   :id="'testimonial-'+index"
                   class="tw-p-4"
                   target="_blank"
                   v-for="(testimonial, index) in testimonials"
                   @mouseover="updateFeaturedTestimonial(testimonial)"
                   @mouseout="clearTimer"
                >
                    <img :src="'https://laracasts.com/images/reviews/'+testimonial.avatar"
                         :alt="testimonial.name"
                         class="is-circle tw-w-12 tw-border-2 tw-border-solid hover:tw-border-blue-darker"
                         :class="featuredTestimonial.id === testimonial.id ? 'border-blue-darker' : 'tw-border-transparent' "
                    >
                </a>
            </div>
        </div>
        <div class="column is-4">
            <div class="box has-background-light">
                <img :src="'https://laracasts.com/images/reviews/'+ featuredTestimonial.avatar"
                     :alt="featuredTestimonial.name"
                     class="is-circle tw-w-12"
                >

                <p v-text="featuredTestimonial.name"></p>

                <p v-text="featuredTestimonial.body"></p>


            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import _ from 'lodash';

    export default {
        name: "Testimonials",
        data() {
            return {
                testimonials: [],
                featuredTestimonial: {},
                timer: null
            }
        },

        created() {
            axios.get('/api/testimonials.json')
                .then(response => {
                    this.testimonials = response.data;
                    this.featuredTestimonial = response.data[0];
                });
        },

        methods: {
            updateFeaturedTestimonial: _.throttle(function (testimonial) {
                console.log('I WAS CALLED');
                this.featuredTestimonial = testimonial;
            }, 2000),

            clearTimer() {
                clearTimeout(this.timer);
            }
        }
    }
</script>

<style scoped>

</style>
