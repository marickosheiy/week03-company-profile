@extends('layouts.app')

@section('content')

<section class="contact-page">

    <div class="contact-header">
        <p class="section-label">GET IN TOUCH</p>

        <h1>Let's Work Together.</h1>

        <p>
            Have an idea, a project, or a question?
            We'd love to hear from you.
        </p>
    </div>


    <div class="contact-container">

        <div class="contact-info">

            <h2>Contact Velora Digital</h2>

            <p>
                Whether you are starting a new project or looking for
                ways to improve your existing digital presence, our team
                is ready to help.
            </p>

            <div class="contact-detail">
                <strong>Address</strong>
                <p>Santa Rosa, Laguna, Philippines</p>
            </div>

            <div class="contact-detail">
                <strong>Email</strong>
                <p>hello@veloradigital.test</p>
            </div>

            <div class="contact-detail">
                <strong>Phone</strong>
                <p>+63 917 555 0188</p>
            </div>

            <div class="social-links">
                <strong>Follow Us</strong>

                <div>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>

        </div>


        <div class="contact-form">

            <h2>Send Us a Message</h2>

            <form>

                <label for="name">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                >

                <label for="email">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                >

                <label for="subject">Subject</label>
                <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="What can we help you with?"
                >

                <label for="message">Message</label>
                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Tell us about your project..."
                ></textarea>

                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </div>

</section>

@endsection