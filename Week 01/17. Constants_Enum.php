<?php

class BlogPost {
    private Status $status;

    public function getStatus(): string {
        return $this->status;
    }

    public function setStatus(string $status): void {
        $this->status = $status;
    }
}

enum Status {
    case DRAFT;
    case PUBLISHED;
    case UNDER_REVIEW;
}

//final class Status {
//    public const DRAFT = 'draft';
//    public const PUBLISHED = 'published';
//    public const UNDER_REVIEW = 'under_review';
//}

$post = new BlogPost();

//if($post === Status::PUBLISHED){
//    //
//}