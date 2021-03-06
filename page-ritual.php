<?php
/**
 * Template Name: Ritual Page
 *
 * Template for the ritual page
 */
$context = Timber::get_context();
$context['post'] = new Timber\Post();
$context['flavours'] = $context['post']->get_field('ritual_flavours');

Timber::render('pages/ritual.twig', $context);
