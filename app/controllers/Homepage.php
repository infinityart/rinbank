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

use Http\Request;
use http\Response;

class Homepage
{

    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function show()
    {
        $content = '<h1>Hello World</h1>';
        $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        $this->response->setContent($content);
    }

}