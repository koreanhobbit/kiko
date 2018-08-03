<?php


//#########################//
//########Admin############//
//########################//

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('admin.dashboard.index'));
});

// Dashboard > Product > List
Breadcrumbs::for('productlist', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Product', route('admin.product.index'));
});

// Dashboard > Product > Name
Breadcrumbs::for('productcreate', function ($trail) {
    $trail->parent('productlist');
    $trail->push('Create Product', route('admin.product.create'));
});

// Dashboard > Image
Breadcrumbs::for('medialist', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Media', route('admin.media.index'));
});

