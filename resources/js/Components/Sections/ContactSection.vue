<template>
    <div class="alert alert-success text-center" role="alert" v-if="showFlash">
        {{ flashMessage }}
    </div>
    <section class="contact_section my-5">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Get In <span>Touch</span></h2>
            </div>
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="form_container">
                        <form @submit.prevent="submit()">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Your Name"
                                        v-model="client_name"
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Phone Number"
                                        v-model="phone"
                                    />
                                </div>
                                <div class="form-group col-lg-6">
                                    <select
                                        name=""
                                        id=""
                                        class="form-control wide"
                                        v-model="category"
                                    >
                                        <option
                                            :value="category.name"
                                            v-for="category in categories"
                                            :key="category.id"
                                        >
                                            {{ category.name }}
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        v-model="email"
                                    />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input
                                        type="text"
                                        class="message-box form-control"
                                        placeholder="Message"
                                        v-model="message"
                                    />
                                </div>
                            </div>
                            <div class="btn_box">
                                <button type="submit">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 px-3">
                    <div class="map_container">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.613674789831!2d96.2237183753371!3d16.84551081818895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1edec1500739f%3A0xe51deb1c7e87327!2sBlack%20Pearl%20Engineering!5e0!3m2!1sen!2sth!4v1696772050652!5m2!1sen!2sth"
                                width="600"
                                height="508"
                                style="border: 0"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { router } from "@inertiajs/vue3";
import { ref } from "vue";
export default {
    props: ["categories"],
    setup(props) {
        let client_name = ref("");
        let phone = ref("");
        let category = ref(props.categories[0].name);
        let email = ref("");
        let message = ref("");

        // Flash message properties
        let flashMessage = ref("We will contact you back ASAP!");
        let showFlash = ref(false);

        function submit() {
            let form = {
                client_name: client_name.value,
                phone: phone.value,
                project_category: category.value,
                email: email.value,
                message: message.value,
            };

            showFlash.value = true;
            // Automatically hide the flash message after 3 seconds
            setTimeout(() => {
                showFlash.value = false;
            }, 3000);
            (client_name.value = ""),
                (phone.value = ""),
                (category.value = ""),
                (email.value = ""),
                (message.value = "");

            router.post("/contact", form);
        }

        return {
            client_name,
            phone,
            category,
            email,
            message,
            submit,
            flashMessage,
            showFlash,
        };
    },
};
</script>

<style>
.flash-message {
    background-color: #4caf50;
    color: white;
    text-align: center;
    padding: 10px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    display: none;
}

.flash-message.show {
    display: block;
}
</style>
