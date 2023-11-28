<h1>List of users</h1>

<!-- <?php
foreach ($contacts as $user){
    echo $user->name.'<br>';
}
?> -->

@foreach($contacts as $user)
<p>{{$user->name}}</p>
@endforeach