@extends('layout.main')

@section('main')
<div class="home">
    <div class="content">
        <h1>CONTACT ME</h1>
        <hr>
        <p>This is where your text starts. You can click here and start typing. Incidunt ut labore et dolore magnam 
        aliquam quaerat voluptatem ut enim ad minima veniam quis nostrum exercitationem ullam corporis suscipit 
        laboriosam nisi ut aliquid ex ea commodi.</p>
        <br><br>
        <form action="" method="post">
            <label for="name">Your Name</label><br>
            <input type="text" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" id=""><br>
            <label for="massages">Massages</label><br>
            {{-- <input type="text" name="massages" id="massage"><br> --}}
            <textarea name="massages" id="massage" id="" cols="30" rows="10"></textarea><br>
            <button class="contact_button">Submit</button>
        </form>
    </div>
</div>

</body>
</html>
@endsection