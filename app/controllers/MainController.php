<?php

Class MainController
{
	public function index()
	{
		Response::render("home");

	}

	public function about()
	{
			echo "Este es el fucking about";

	}
}