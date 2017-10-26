<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('home'));
});

// Home > Category
Breadcrumbs::register('category', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push($category->slug, route('category'));
});


// Home > Category
Breadcrumbs::register('subcategory', function ($breadcrumbs) {
    $breadcrumbs->parent('category');
    $breadcrumbs->push($category->slug, route('subcategory'));
});
/*
// Home > Blog > [Category] > [Post]
Breadcrumbs::register('post', function ($breadcrumbs, $post) {
    $breadcrumbs->parent('category', $post->category);
    $breadcrumbs->push($post->title, route('post', $post));
}); */