<?php
/**
 * @author: Jonty Sponselee <jsponselee@student.scalda.nl>
 * @since: 9/9/2018
 */
declare(strict_types = 1);

namespace RinB\Template;

interface Renderer
{
    public function render($template, $data = []) : string;
}