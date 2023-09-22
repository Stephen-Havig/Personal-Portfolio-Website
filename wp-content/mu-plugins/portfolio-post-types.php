<?php

function portfolio_post_types() {
    register_post_type('project', array(
      'public' => true,
      'has_archive' => true,
      // 'rewrite' => array('slug' => 'projects'),
      'show_in_rest' => true,
      'labels' => array(
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project'
      ),
      'menu_icon' => 'dashicons-hammer'
    ));
  }

  add_action('init', 'portfolio_post_types');

  ?>