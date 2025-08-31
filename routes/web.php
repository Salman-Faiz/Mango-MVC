<?php
return [
     // key => path name
     //value => [controller@method, http_method]
     '/user/profile' => ['App\Controllers\ProfileController','profile'],
     '/user/profile/edit' => ['App\Controllers\ProfileController','editProfile']
];
?>