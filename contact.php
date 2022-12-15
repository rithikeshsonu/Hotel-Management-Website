<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - Contact</title>
    <?php require('include/links.php') ?>
</head>

<body class="bg-light">
    <!-- Including header source file  -->
    <?php require('include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center"> Contact us </h2>
        <div class="h-line bg-dark">
        </div>
        <p class = "text-center mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque totam modi <br> facilis et inventore ipsam nulla blanditiis reprehenderit harum iusto!</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- left side of the page  -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class = "bg-white rounded shadow p-4" >
                    <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230660.99610611217!2d81.66149884934819!3d25.4021973904255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398534c9b20bd49f%3A0xa2237856ad4041a!2sPrayagraj%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1668543315580!5m2!1sen!2sin"  loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/dBfo2LyNj5GRuiiA8" target = "_blank" class = "d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>Road no.4, Prayagraj, UP.
                    </a>
                    <h5 class = "mt-4">Call us</h5>
                    <a href="tel: +918106550909" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i>
                        +919999999999
                    </a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto:aaa@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill ME-2"></i>
                        aaa@gmail.com
                    </a>
                    <h5 class = "mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram  me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 ">
                        <i class="bi bi-youtube me-1"></i>
                    </a>
                </div>
            </div>
            <!-- Right section of the page  -->
            <div class="col-lg-6 col-md-6 px-4">
                <div class = "bg-white rounded shadow p-4" >
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3 ">
                            <label class="form-label" style = "font-weight: 500">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3 ">
                            <label class="form-label" style = "font-weight: 500">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3 ">
                            <label class="form-label" style = "font-weight: 500">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3 ">
                            <label class="form-label" style = "font-weight: 500">Message</label>
                            <textarea class="form-control shadow-none" rows="5" style = "resize: none"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div> 
        </div>
    </div>



    <!-- <br><br><br><br><br><br><br> -->
    <!-- Including footer source file  -->
    <?php require('include/footer.php') ?>

</body>
</html>