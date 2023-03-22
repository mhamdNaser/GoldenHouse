@extends('layout.master')

@section('title', 'About Us')

<div class="row p-5 myboxshadow"
    style="background-image: url({{ url('/images/about-bg.jpg') }}); background-size: cover; background-attachment: fixed; position: center center">
    <div class="col-lg-12 p-5 m-5 myopacity0 rounded-3">
        <div class="row g-2 justify-content-center align-items-center text-dark pb-5">
            <div class="col-lg-6 text-center">
                <img src="{{ url('/images/login.jpg') }}" alt=""><br>
                <h1 class="fs-1 fw-bold mypimarytext mytextshadow text-center  mb-5" style="margin-top: -4rem">
                    The Golden House
                </h1>
            </div>
            <div class="col-lg-6 justify-content-center text-center p-5 myopacity rounded-3 bg-light">
                <p class=" fs-5">We started as a small company in 2022<br>
                    The main objective was to secure housing for students coming to Aqaba to complete their
                    studies <br>
                    Soon our partnerships began to increase and we expanded to serve students all over
                    Jordan<br>
                </p>
                <div class=" text-center">
                    <h5>The two governors who are in it</h5>
                    <p>
                        Amman -
                        Karak -
                        Ajloun -
                        Salt -
                        snag
                    </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-around align-items-center text-dark myopacity0 rounded-3 bg-light mt-5">
            <div class="col-lg-6 justify-content-center text-center p-5 bg-light ">
                <p class="fs-5">We started as a small company in 2022<br>
                    Our company is focused on providing a convenient and hassle-free experience for students looking for
                    housing rentals. We offer a variety of properties that are fully furnished and equipped with all the
                    necessary amenities to make your stay comfortable and enjoyable. <br>

                    In addition to our housing rentals, we also provide cleaning services to ensure that your living
                    space is always clean and tidy. Our team of experienced cleaners will come in regularly to clean the
                    common areas and take care of any specific requests you may have. <br>

                    We also provide delivery services to make your move-in and move-out process as smooth as possible.
                    We can deliver furniture, appliances, and other items directly to your rental property so you don't
                    have to worry about the logistics. <br>

                    Overall, our goal is to make your housing experience as stress-free as possible, so you can focus on
                    your studies and enjoy your time as a student. <br>
                </p>
            </div>
            <div class="col-lg-6">
                <img class="v-100 w-100 rounded-end" src="{{ url('/images/about2.jpg') }}" alt=""><br>
            </div>
        </div>
    </div>
</div>
</div>
