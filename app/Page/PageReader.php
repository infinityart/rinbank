<?php
/**
 * @author: Jonty Sponselee <jsponselee@student.scalda.nl>
 * @since: 9/9/2018
 */

declare(strict_types = 1);

namespace RinB\Page;

interface PageReader
{
    public function readBySlug(string $slug) : string;
}