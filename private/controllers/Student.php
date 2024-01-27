<?php

final class Student extends Controller
{
    function index($id='')
    {
        echo "This is the student controller".$id;
    }
}
