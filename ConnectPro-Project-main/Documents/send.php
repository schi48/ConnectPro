<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.4.6/dist/tailwind.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
    <title>CONNECTPro - Homepage</title>
</head>

<body class="bg-gray-200">

    <!-- Fontswesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>

    <!-- Header component -->
    <header class="text-gray-100 bg-gray-800 body-font shadow w-full">
        <div class="container mx-auto flex bg-gradient-to-br from-fuchsia-500 to-purple-600 flex-wrap p-5 flex-col md:flex-row items-center">
            <!-- Logo -->
            <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0"> <img src="logo.png" style="height: 90px; margin-top: 10px; margin-bottom: 10px;" alt="logo"> <span class="text-4xl font-light">CONNECT </span> <span class="text-3xl text-blue-400 font-extrabold">Pro</span> </a>
            
            <!-- Navigation component -->
            <nav class="flex lg:w-1/7 flex-wrap items-center text-base md:ml-auto"> <a class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="index.html">About</a> <a class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="contact.html">Services</a> <a class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="index.html">Stakeholder Relations</a> <a class="hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="index.html">Contact</a> </nav>
        </div>
    </header>

    <!-- Main Container-->
    <div class="flex flex-wrap overflow-hidden sm:-mx-4 md:-mx-2">
        <div class="my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 sm:w-full md:my-3 md:px-3 md:w-full lg:my-3 lg:px-3 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
            
            <!-- Column Content Animation-->
            <section class="we-offer-area text-center bg-gray">
                <div class="mr-auto lg:w-2/7 container">
                    <div class="row our-offer-items less-carousel">
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <h4>Set Text</h4>
                                <p> The ability to write a text in advance and set it to send at a time of your liking! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <h4>Chat with your loved ones</h4>
                                <p> We allow our customers to exchange text back and fourth with their loved ones just like any other texting platforms! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <h4>Calendar Reminder</h4>
                                <p> Our "Set Text" ability also allows our customer to have it as a calendar reminder! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <h4>24/7 Support</h4>
                                <p> Our team is always ready to help you solve any issues, our customers are very important to us! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </section>
        </div>

        <?php
            $message = "";
            $emailExtension = "before";
            if($_POST['extension'] == "T-mobile") $emailExtension =  "@tmomail.net";
            if($_POST['extension'] == "AT&T") $emailExtension =  "@txt.att.net";
            if($_POST['extension'] == "Verizon Wireless") $emailExtension =  "@vtext.com";
            if($_POST['extension'] == "Sprint") $emailExtension =  "@messaging.sprintpcs.com";
            $recipient = $_POST['phone'] . $emailExtension;
            $message = str_replace(" ", "%20",$_POST['message']);
            $output = '';
            $url = "http://localhost/cgi-bin/sendsms.py?message=" . $message . "&phone=" . $recipient;
            $response = file_get_contents($url);
            if(strlen($response) == 1)echo '<span class="py-40 text-center m-auto text-3xl text-blue-400 font-extrabold">Success we have sent your message!</span>';
            else echo '<span class="py-40 text-center m-auto text-3xl text-red-400 font-extrabold">Message failed!</span>'; 
        ?>
            <!-- Footer component -->
            <div class="bg-gray-800 text-white py-3 px-4 text-center fixed left-0 bottom-0 right-0 z-40"> Copyright © 2021 All Rights Reserved - CONNECTPro <a class="underline text-gray-200" href="https://www.google.com">Privacy Policy</a> </div>
</body>

</html>