<?php
/**
 * @author: Jonty Sponselee <jsponselee@student.scalda.nl>
 * @since: 9/9/2018
 */
declare(strict_types = 1);

return [
    ['GET', '/hello-world', function () {
        echo 'Hello World';
    }],
    ['GET', '/another-route', function () {
        echo 'This works too';
    }],
];