<?php

class Status
{
    const DRAFT = 'draft';
    const PUBLISHED = 'published';
    const ARCHIVED = 'archived';
}


var_dump(Status::ARCHIVED);

//PHP 8.1
enum Status2
{
    case Draft;
    case Published;
    case Archived;
}

var_dump(Status2::Draft);
