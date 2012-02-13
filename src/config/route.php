<?php

return array(
	'/\b'.'hello'.'\b/i' => 'Talk::Hello',
	'/\b'.'hi'.'\b/i' => 'Talk::Hello',
	'/\b'.'how are you'.'\b/i' => 'Talk::Howareyou',
	'/\b'.'goodbye'.'\b/i' => 'Talk::Bye',
	'/\b'.'bye'.'\b/i' => 'Talk::Bye',
	'/\b'.'current time'.'\b/i' => 'Time::CurrentTime',
	'/\b'.'the book'.'\b/i' => 'Debug::Show'
);

?>