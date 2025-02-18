<x-layout title="Home">
    <h1>My First Website</h1>
    <p class="welcome">Welcome :)</p>
    <img class="welcome-img" src="https://www.shutterstock.com/shutterstock/videos/1108429849/thumb/10.jpg?ip=x480"
         alt="Welcome">

    <section>
        <h2>Why Does HBO-ICT Suit Me</h2>
        <img src="{{asset('images/thinking-man.png')}}"
             class="thinking-man" alt="A man pondering about life">
        <div class="text-box">
            <p>Hello, my name is Shiven. I chose this course because I heard that software engineers earn a lot of
                money. I hope you like my website as it is my first time doing something like this ever.</p>
        </div>
        <div class="text-box">
            <p>Here are some more reasons why I think programming is a good fit for me:</p>
        </div>
        <ul class="why-it-fits">
            <li>I like building computers.</li>
            <img  src="{{asset('images/IMG_20240904_152729.jpg')}}"
                 alt="A sick gaming PC" class="gaming-pc">
            <li>I am fascinated by the way computers work.</li>
            <img class="tree-displays"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS95Z5BWcrBlwYhZgeZpOTPUqdjbxWJp4Goh8XZVtCRVfFAEigSpLsEap09w6XSiOiuhQ&usqp=CAU"
                 alt="Tree on display">
            <li>I also find it enjoyable.</li>
        </ul>
        <p class="main-paragrah2">Hope that was enough for you!</p>
    </section>
</x-layout>
