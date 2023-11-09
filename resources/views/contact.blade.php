@extends('layouts.app')
@section('title', 'Contact Page')
@section('content')
<style>
    .container_l {
        /* max-width: 400px; */
        width: 100%;
        margin: 0 auto;
        display: flex;
        align-items: center;
        /* float: right; */

    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
        font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
        background: #F9F9F9;
        padding: 25px;
        margin: 150px 0;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    #contact h4 {
        margin: 5px 0 15px;
        display: block;
        font-size: 13px;
        font-weight: 400;
    }

    fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 5px;
        padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    }

    #contact textarea {
        height: 100px;
        max-width: 100%;
        resize: none;
    }

    #contact button[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        background: #4CAF50;
        color: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
    }

    #contact button[type="submit"]:hover {
        background: #43A047;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .copyright {
        text-align: center;
    }

    #contact input:focus,
    #contact textarea:focus {
        outline: 0;
        border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }

    :-ms-input-placeholder {
        color: #888;
    }

    .container_c {
        height: 30 px;
    }

    .map {
        width: 100%;
    }

    */ .container_l {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 24px;
        border-radius: 20%;
        margin-top: 150px;
        margin-left: auto;
        margin-right: auto;
        width: 1060px;

    }

    .school_pic {
        flex: 1;
        padding: 10px;
    }

    .school_pic img {
        width: 100%;
        height: 494px;
        border-radius: 20px;
        box-shadow: 0 0 30px rgba(2, 2, 2, 0.808);
    }


    form {
        flex: 1;
        padding: 20px;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        border-radius: 20px;
        box-shadow: 0 0 30px rgba(2, 2, 2, 0.808);

    }

    h1 {
        color: red;
        font-size: 24px;
    }

    h4 {
        font-size: 16px;
        margin-top: 10px;
    }

    fieldset {
        margin: 10px 0;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    button {
        background-color: red;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: rgb(3, 221, 69);
    }


    .background-image {
        /* background-image: url('https://static.vecteezy.com/system/resources/previews/005/263/636/non_2x/contact-us-concept-icons-such-as-mobile-phone-e-mail-address-chat-global-communication-on-dark-blue-background-for-presentation-web-banner-article-business-and-network-connection-and-company-free-vector.jpg'); */
        /* Set your background image here */
        background-size: cover;
        background-position: center;
        height: 50vh;
        display: flex;
        /* align-items: center; */
        justify-content: center;
    }

    .card-container {
        display: flex;
        justify-content: space-around;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 20px;
        text-align: center;
        width: 300px;
        margin: 10px;
        top: 170px;
        height: 15em;

    }



    .card h2 {
        font-size: 24px;
    }

    .card p {
        font-size: 18px;
    }
</style>
<div class="text-sm breadcrumbs container">
    <ul>
        <li>
            <a href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{ url('/contact') }}" style="color: #A0D053;">
                Contact Us
            </a>
        </li>
    </ul>
</div>




<section>

    <div class="background-image">
        <div class="card-container">
            <div class="card">
                <i class="fa-solid fa-phone fa-shake fa-2xl" style="color: #0dfd11;padding-top: 15px; padding-bottom: 15px"></i>
                <h2 style="padding: 10px;"></h2>
                <p>+8801654829</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-envelope fa-bounce fa-2xl" style="color: #0ae623; padding-top: 15px; padding-bottom: 15px"></i>
                <h2>school@gmail.com</h2>

                <p>This is the second card content.</p>
            </div>

            <div class="card">
                <i class="fa-solid fa-mug-hot fa-beat fa-2xl" style="color: #17f207; padding-top: 15px; padding-bottom: 25px"></i>
                <h2>We are always free for coffee</h2>
                <p style="color:black">"Brings coffee when you come"</p>
            </div>
        </div>
    </div>


    <div class="container_l">
        <div class="school_pic">
            <img src="fontend/assets/images/gallery/1.jpg" alt="School Picture" />
        </div>
        <form id="contact" action="" method="post">
            <h1 style="color: red">Step to Success School</h1>
            <h4>Contact us for any related quote</h4>
            <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>
    </div>
    </div>

</section>

<script src="https://kit.fontawesome.com/bf499eed93.js" crossorigin="anonymous"></script>
@endsection