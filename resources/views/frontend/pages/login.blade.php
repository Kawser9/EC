@extends('frontend.master')
@section('content')

<section>
    <div class="con">
        <div class="contactInfo">
            <div>
                <h2>Login Page</h2>
                <ul class="info">
                    {{-- <li>
                        <span><img src="img/location.png"></span>
                        <span>31 Mohakhali Commercial Area,
                            Colombia Super Market,
                             Wireless Gate</span>
                    </li>
                    <li>
                        <span><img src="img/email.png"></span>
                        <span>info@imageretouchinglab.com</span>
                    </li>
                    <li>
                        <span><img src="img/phone.png"></span>
                        <span>+880185-8725212</span>
                    </li> --}}
                </ul>
            </div>
            <ul class="sci">
                <li><a href="#"><img src="img/1.png" alt=""></a></li>
                <li><a href="#"><img src="img/2.png" alt=""></a></li>
                <li><a href="#"><img src="img/3.png" alt=""></a></li>
                <li><a href="#"><img src="img/4.png" alt=""></a></li>
                <li><a href="#"><img src="img/5.png" alt=""></a></li>
            </ul>
        </div>

        <div class="contactForm">
            <h2>Login Here</h2>
            <form action="{{Route('customer.doLogin')}}" method="post">
                @csrf
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="password" name="password" required>
                        <span>Password</span>
                    </div>

                    <div class="inputBox w100">
                        <input type="submit" value="Login">
                    </div>
                    <a href="{{Route('customer.registration')}}">Don't have accout ?Resgister here</a>
                </div>
            </form>
        </div>
    </div>
</section>

<style>
    .fixed-con {
        width: 100vw; /* 100% of the viewport width */
        height: 100vh; /* 100% of the viewport height */
        background: url('your-background-image.jpg') fixed; /* Replace 'your-background-image.jpg' with the actual image URL */
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    section {
        position: relative;
        z-index: 1;
    }
    @import url('https://fonts.googleapis.com/css?family=Tangerine');
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-size: 'Poppins', sans-serif;
    }
    section
    {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #ffffff;
    }
    .background {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    min-height: 100vh;
    background: linear-gradient(to right, #1D2327 50%, #438FF9 50%);
}
    .con
    {
        position: relative;
        min-width: 1100px;
        min-height: 500px;
        display: flex;
        z-index: 1000;
    }
    .con .contactInfo
    {
        position: absolute;
        top: 40px;
        width: 350px;
        height: calc(100% - 80px);
        background: #fc3d5c;
        z-index: 1;
        padding: 40px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 20px 25px rgba(0., 0, 0, 0.15);
    }
    .con .contactInfo h2
    {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }
    .con .contactInfo ul.info
    {
        position: relative;
        margin: 20px 0;
    }
    .con .contactInfo ul.info li
    {
        position: relative;
        list-style: none;
        display: flex;
        margin: 20px 0;
        cursor: pointer;
        align-items: flex-start;
    }
    .con .contactInfo ul.info li span:nth-child(1)
    {
        width: 30px;
        min-height: 30px;
    }
    .con .contactInfo ul.info li span:nth-child(1) img
    {
        max-width: 100%;
        filter: invert(1);
    }
    .con .contactInfo ul.info li span:nth-child(2)
    {
        color: #fff;
        margin-left: 10px;
        font-weight: 300;
    }
    .con .contactInfo ul.sci
    {
        position: relative;
        display: flex;
    }
    .con .contactInfo ul.sci li
    {
        list-style: none;
        margin-right: 15px;
    }
    .con .contactInfo ul.sci li a
    {
        text-decoration: none;
    }
    .con .contactInfo ul.sci li a img
    {
        filter: invert(1);
    }



    .con .contactForm
    {
        position: absolute;
        padding: 70px 50px;
        padding-left: 250px;
        margin-left: 150px;
        width:  calc(100% - 150px);
        height: 100%;
        background: #fff;
        box-shadow: 0 50px 50px rgba(0, 0, 0, 0.25);
    }
    .con .contactForm h2
    {
        color: #0f3959;
        font-size: 24px;
        font-weight: 500;
    }
    .con .contactForm .formBox
    {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }
    .con .contactForm .formBox .inputBox
    {
        position: relative;
        margin-bottom: 25px;
    }
    .con .contactForm .formBox .inputBox.inputBox.w50
    {
        width: 47%;
    }
    .con .contactForm .formBox .inputBox.inputBox.w40
    {
        width: 47%;
    }
    .con .contactForm .formBox .inputBox.inputBox.w100
    {
        width: 90%;
    }
    .con .contactForm .formBox .inputBox input,
    .con .contactForm .formBox .inputBox textarea
    {
        width: 100%;
        resize: none;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 300;
        color: #333;
        border: none;
        outline: none;
        border-bottom: 1px solid #777;
    }
    .con .contactForm .formBox .inputBox textarea
    {
        height: 80px;
    }
    .con .contactForm .formBox .inputBox span
    {
        position: absolute;
        left: 0;
        padding: 5px 0;
        pointer-events: none;
        font-size: 18px;
        font-weight: 300;
        transition: 0.3s;
    }
    .con .contactForm .formBox .inputBox input:focus ~ span,
    .con .contactForm .formBox .inputBox input:valid ~span,
    .con .contactForm .formBox .inputBox textarea:focus ~ span,
    .con .contactForm .formBox .inputBox textarea:valid ~span
    {
        transform: translateY(-20px);
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        color: #f9435b;
        font-weight: 500;
    }
    .con .contactForm .formBox .inputBox input[type="submit"]
    {
        position: relative;
        cursor: pointer;
        background: #ff2f2f;
        color: #fff;
        border: none;
        max-width: 150px;
        padding: 12px;
    }


    @media(max-width : 1200px)
    {
        .con
        {
            width: 90%;
            min-width: auto;
            margin: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }
        .contactInfo
        {
            top: 0;
            height: 550px;
            position: relative;
            box-shadow: none;
        }
        .con .contactForm
        {
            position: relative;
            width: calc(100% - 40px);
            padding-left: 0;
            margin-left: 0;
            padding: 40px;
            height: 550px;
            box-shadow: none;
        }
    }
</style>
@endsection
