<?php
	// echo file_get_contents('note.xml');

	// load and read xml file
	// $note = simplexml_load_file('note.xml');
	// print_r($note);
	// echo "<br>";
	// echo $note->to;
	// echo "<br>";
	// echo $note->from;
	// echo "<br>";
	// echo $note->heading;
	// echo "<br>";
	// echo $note->body->h1;
	// echo "<br>";
	// echo $note->body->p;

	$books = new SimpleXMLElement('<?xml version="1.0"?><books/>');

	$book1 = $books->addChild('book');
	$book1->addChild("BookTitle", "Harry Potter");
	$book1->addChild("PublicationYear", 1998);

	$book2 = $books->addChild('book');
	$book2->addChild("BookTitle", "Lord of the Rings");
	$book2->addChild("PublicationYear", 1977);

	file_put_contents('new_books.xml', $books->asXML());
	echo "XML created";
?>