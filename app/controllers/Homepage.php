<?php
/**
 * Class Homepage.php
 *
 * Class documentation
 *
 * @author: Jonty Sponsleee <jsponselee@student.scalda.nl>
 * @since: 09/09/2018
 * @version 0.1 09/09/2018 Initial class definition.
 */
declare(strict_types = 1);

namespace RinB\Controllers;

use http\Response;

class Homepage
{

    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function show()
    {
        $this->response->setContent('Hello Worldasdsa');
    }

}