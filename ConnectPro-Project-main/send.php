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
            <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0"> <img src="logo.png" style="height: 90px; margin-top: 10px; margin-bottom: 10px;" alt="logo" class="transform transition duration-500 hover:scale-150"> <span class="text-4xl font-light">CONNECT </span> <span class="text-3xl text-blue-400 font-extrabold">Pro</span> </a>
            <!-- Navigation component -->
            <nav class="flex lg:w-1/7 flex-wrap items-center text-base md:ml-auto"> 
                <a class="border-blue-600 text-blue-400 mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="./">Home</a> 
                <a class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="developers.html">Meet Us</a> 
                <a class="mr-5 hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="about.html">Stakeholder Relations</a> 
                <a class="hover:text-gray-900 cursor-pointer border-b border-transparent hover:border-blue-600" href="contactus.html">Contact</a>
            </nav>
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
                        <div class="transform transition duration-500 hover:scale-90 col-md-4 col-sm-6 equal-height">
                            <div class="shadow-lg rounded-lg item">
                                <h4 class="text-gray-800 text-3xl font-semibold">Send Text</h4>
                                <p> The ability to write a text in advance and set it to send at a time of your liking! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="transform transition duration-500 hover:scale-90 col-md-4 col-sm-6 equal-height">
                            <div class="shadow-lg rounded-lg item">
                                <h4 class="text-gray-800 text-3xl font-semibold">Remind your loved ones</h4>
                                <p> We allow our customers to send a reminder message to any number, great for reminding loved ones!</p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="transform transition duration-500 hover:scale-90 col-md-4 col-sm-6 equal-height">
                            <div class="shadow-lg rounded-lg item">
                                <h4 class="text-gray-800 text-3xl font-semibold">Interactive Reminders</h4>
                                <p> Our facilitative design allows our customer to view exact countdown time, cancel a reminder & even come back to their reminder! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="transform transition duration-500 hover:scale-90 col-md-4 col-sm-6 equal-height">
                            <div class="shadow-lg rounded-lg item">
                                <h4 class="text-gray-800 text-3xl font-semibold">24/7 Support</h4>
                                <p> Our team is always ready to help you solve any issues, our customers are very important to us! </p>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </section>
        </div>

        <div class="transform transition duration-500 hover:scale-110 my-3 px-3 w-full overflow-hidden sm:my-3 sm:px-3 sm:w-full md:my-3 md:px-3 md:w-full lg:my-3 lg:px-3 lg:w-1/2 xl:my-3 xl:px-3 xl:w-1/2">
            <!-- countdown component -->
            <div class="max-w-full py-4 px-8 bg-white shadow-lg rounded-lg my-20 lg:mx-10 md:mx-1 sm:mx-1">
                <div>
                    <p class="text-gray-800 text-3xl font-semibold">Success! </p>
                    <div class="space-x-4">
                      <p class="inline-block mt-2 font-semibold text-gray-800">Message:</p>
                      <p class="inline-block mt-2 text-gray-600"> <?php echo $_POST['message'];?></p>
                    </div>

                    <div class="space-x-4">
                      <p class="inline-block mt-2 font-semibold text-gray-800">From:</p>
                      <p class="inline-block mt-2 text-gray-600"> <?php echo $_POST['myname'];?> </p>
                    </div>

                     <div class="space-x-4">
                      <p class="inline-block mt-2 font-semibold text-gray-800">Recipient:</p>
                      <p class="inline-block mt-2 text-gray-600"> <?php echo $_POST['phone'];?> </p>
                    </div>

                    <div class="space-x-4">
                      <p class="inline-block mt-2 font-semibold text-gray-800">Remaining:</p>
                      <p class="inline-block mt-2 text-blue-500 text-xl font-medium" id="demo"></p>
                    </div>

                    <br/>
                    <!-- Progress bar -->
                    <div class="relative pt-1">
                      <div class="flex mb-2 items-center justify-between">
                        <div>
                          <span id="progress-status" class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-blue-600 bg-blue-200">Task in progress
                          </span>
                        </div>
                        <div class="text-right">
                          <span id="percent-value" class="text-xs font-semibold inline-block text-blue-600">
                            0%
                          </span>
                        </div>
                      </div>
                    
                      <div class="overflow-hidden h-3 mb-4 text-xs flex rounded bg-blue-200">
                        <div id="percent-bar" style="width:0%"
                          class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                        </div>
                      </div>
                    </div>
                    <!-- Progress bar -->

                    <!-- Cancel Button -->
                    <div class="">
                        <button class="w-full shadow bg-gray-800 hover:bg-blue-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit" id="submit" name="SubmitButton" onclick="deleteAllCookies()"> Cancel </button>
                    </div>
                    <!-- Cancel Button end -->

                </div>
            </div>
            <!-- countdown component end-->
        </div>
    </div>


<style>.hide { position:absolute; top:-1px; left:-1px; width:1px; height:1px; }</style>
<iframe id="myframe" onload="getAPIResult()" name="hiddenFrame" class="hide"></iframe>
<form name="formData" id="formData" action="call.php" method="POST" target="hiddenFrame">
        <input type="hidden" name="message" value="<?php echo $_POST['message'];?>" />
        <input type="hidden" name="extension" value="<?php echo $_POST['extension'];?>" />
        <input type="hidden" name="myname" value="<?php echo $_POST['myname'];?>" />
        <input type="hidden" name="phone" value="<?php echo $_POST['phone'];?>" />
        <input type="submit" value=""/>
</form>

<script>
async function getAPIResult(){
    var result = document.getElementById('myframe').contentWindow.document.body.innerText
    if(result.length > 0){
        document.querySelector("#percent-bar").style.width = '100%';
        document.querySelector("#percent-value").innerText = '100%';
        if(result == "Message has been sent successfully" || result.length == 34){
            document.getElementById("demo").innerHTML = "Message Sent!";
            document.querySelector("#progress-status").innerText = "Task Completed";
        } else {
            document.getElementById("demo").innerHTML = "Message Failed!";
            document.querySelector("#progress-status").innerText = "Task Failed";
        }
    } else {
        await new Promise(r => setTimeout(r, 1000));
        getAPIResult();
    }
}

const deleteAllCookies = () => {
  const cookies = document.cookie.split(";");
  for (const cookie of cookies) {
    const eqPos = cookie.indexOf("=");
    const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
  document.location.href="/";
}


// Set the date we're counting down to
var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
var today  = new Date();

var myTime = "<?php echo $_POST['mytime']?>:00";
var myDate = today.toLocaleDateString("en-US") + " " + myTime;

//end date
var countDownDate = new Date(myDate).getTime();

//start date
var start = new Date().getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Now date Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  var pct = Math.max(0, Math.min(100, 100 * ( (now-start) / (countDownDate-start))));
  //console.log("Percentage:  " + pct);

  document.querySelector("#percent-bar").style.width = pct + '%';
  document.querySelector("#percent-value").innerText = Math.round(pct) + '%';

  // Time calculations for days, hours, minutes and seconds
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.querySelector("#formData").submit();
  }
}, 1000);


</script>
    
    <!-- Cookies Pop-up -->
    <div id="cookiesBox" class="flex flex-col space-y-4 min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-gray-900 bg-opacity-75 px-10 " style="display: none;">
        <div class="shadow-lg rounded-lg flex flex-col p-8 bg-gray-800 shadow-md hover:shodow-lg rounded-2xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="rounded-lg lg:w-16 lg:h-16 rounded-2xl lg:p-3 sm:w-0 sm:h-0 sm:p-0 border border-gray-800 text-blue-400 bg-gray-900" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="flex flex-col ml-3">
                        <div class="font-medium leading-none text-gray-100">Cookie Policy</div>
                        <p class="text-sm text-gray-500 leading-none mt-1">We use cookies to improve user experience. By clicking “Okay“ or by remaining on our website, you agree to our website's cookie use.

                        </p>
                    </div>
                </div>
                <button class="flex-no-shrink bg-blue-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-blue-600 text-white rounded-full" onclick="document.getElementById('cookiesBox').style.display='none'">Okay</button>
            </div>
        </div>
    </div>
    <!-- Cookies Pop-up End-->

    <!-- Footer component -->
    <div class="bg-gray-800 text-white py-3 px-4 text-center fixed left-0 bottom-0 right-0 z-40"> Copyright © 2021 All Rights Reserved - CONNECTPro <a class="underline text-gray-200" onclick="document.getElementById('cookiesBox').style.display='flex'" >Cookie Policy</a> </div>
</body>

</html>