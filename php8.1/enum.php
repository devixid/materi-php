<?php 

enum Status {
    case Pending;
    case Active;
    case Hiatus;
    case Completed;
    case Archive;
    case OnGoing;
}

// Access enum
echo Status::OnGoing;

// Backed enum
enum Framework: string {
    case Laravel = 'Laravel';
    case Rails = 'Rails';
    case React = 'React';
    case Vue = 'Vue';
}

echo Framework::Laravel;