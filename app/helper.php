<?php

function loginUser(){
    $user = Auth::user();
    return $user;
}
