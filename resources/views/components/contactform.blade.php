<script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
</script>

<form id="contact-form" class="w-full max-w-lg" method="POST" action="/contact">

    {{ csrf_field() }}
    {!! RecaptchaV3::field('register') !!}

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="firstname"><span
                    class="text-red-500">*</span>First Name:</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname" required>
        </div>
        <div class="w-full md:w-1/2 px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lastname"><span class="text-red-500">*</span>Last
                Name:</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email"><span class="text-red-500">*</span>Email
                Address:</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" class="form-control" id="email" placeholder="Email" name="email" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="company">Company: </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" class="form-control" id="company" placeholder="Company" name="company">
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="subject"><span class="text-red-500">*</span>Subject:</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="message"><span class="text-red-500">*</span>Message:</label>
            <textarea
                class="h-36 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" class="form-control" id="message" placeholder="Enter your message here" name="message"
                required> </textarea>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-2">
            <!-- Google reCaptcha v2 -->
            {!! htmlFormSnippet() !!}
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 ">
            <div class="p-2 bg-gradient-to-t from-gray-300 to-gray-200 w-20 rounded float-right text-center">
                <button
                    type="submit"
                    data-sitekey="6LdqSAorAAAAACfh1k4WxM8JmiNmy1HDZydAuQN_"
                    data-callback="onSubmit"
                    data-action="submit"
                    class="btn btn-primary g-recaptcha"
                    value="Send">Send
                </button>
            </div>
        </div>
    </div>

</form>
