<?php

	//helper functions
	get_template_part("internal/helpers");
	
	//configuration and overriding wp defaults
	get_template_part("internal/overrides");
	get_template_part("internal/configs");

	//add section: notas
	get_template_part("internal/register_links");
	
	//add section: shelf
	get_template_part("internal/register_shelf");



?>
