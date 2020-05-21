<?php

declare(strict_types=1);

namespace CodelyTv\Apps\Mooc\Backend\Controller\Courses;

use CodelyTv\Mooc\Courses\Application\CreateCourseRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use CodelyTv\Mooc\Courses\Application\CoursesCreator;

final class CoursesPutController
{

    private $creator;

    public function __construct(CoursesCreator $creator)
    {
        $this->creator = $creator;
    }

    public function __invoke(string $id, Request $request)
    {
        $this->creator->__invoke(
            new CreateCourseRequest(
                $id,
                $request->request->get('name'),
                $request->request->get('duration')
            )
        );

        return new Response('', Response::HTTP_CREATED);
    }

}
