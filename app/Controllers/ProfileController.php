<?php
namespace App\Controllers;

class ProfileController extends Controller
{
    public function profile()
    {
        echo "<br>";
        echo "this is from profile controller User profile";
    }

    public function editProfile()
    {
        echo "Edit user profile";
    }
} 
?>