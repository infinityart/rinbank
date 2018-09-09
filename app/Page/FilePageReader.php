<?php
/**
 * Class FilePageReader.php
 *
 * Class documentation
 *
 * @author: Jonty Sponsleee <jsponselee@student.scalda.nl>
 * @since: 09/09/2018
 * @version 0.1 09/09/2018 Initial class definition.
 */
declare(strict_types=1);

namespace RinB\Page;

class FilePageReader implements PageReader
{
    private $pageFolder;

    public function __construct(string $pageFolder)
    {
        $this->pageFolder = $pageFolder;
    }

    public function readBySlug(string $slug) : string
    {
        $path = "$this->pageFolder/$slug.md";

        if (!file_exists($path)) {
            throw new InvalidPageException($slug);
        }

        return file_get_contents($path);
    }

}