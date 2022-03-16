<?php 

class Post {
    public function __construct(
        public readonly string $title,
        public readonly string $content,
    ) {}
}

$post = new Post('First post', 'Lorem ipsum');

$post->title = 'Other'; // error