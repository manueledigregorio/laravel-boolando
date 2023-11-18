<?php
$menuPerson = config('menues.menuPerson')
?>
<header>
    <div class="container ">

          <ul class="menu">
            @foreach ($menuPerson as $person )
            <li>
                <a href="{{$person['href']}}">{{$person['text']}}</a>
            </li>
            @endforeach


          </ul>


          <img class="logo" src="/img/boolean-logo.png" alt="logo" />

          <ul class="menu">
            <li>
              <a href=""><i class="fa-regular fa-user"></i></a>
            </li>
            <li>
              <a><i class="fa-regular fa-heart"></i></a>
            </li>
            <li>
              <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
            </li>
          </ul>

    </div>
  </header>
