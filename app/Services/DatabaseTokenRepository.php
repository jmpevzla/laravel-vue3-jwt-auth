<?php

namespace App\Services;

use Illuminate\Auth\Passwords\DatabaseTokenRepository as DbTokenRepository;

class DatabaseTokenRepository extends DbTokenRepository {

     /**
     * Create a new token for the user.
     *
     * @return string
     */
    public function createNewToken()
    {
        return \random_int(100000, 999999);
    }

}
