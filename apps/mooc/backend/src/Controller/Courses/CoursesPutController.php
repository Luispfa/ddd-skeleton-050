<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Courses;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

final class CoursesPutController
{

    public function __invoke(string $id, Request $request)
    {
        return new Response('', 201);
    }

}
