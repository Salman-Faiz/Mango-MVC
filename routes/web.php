<?php

use App\Controllers\ProfileController;

return [
     // key => path name
     //value => [controller@method, http_method]
     '/user/profile' => [ProfileController::class,'profile'],
     '/user/profile/edit' => [ProfileController::class,'editProfile']
];
?>